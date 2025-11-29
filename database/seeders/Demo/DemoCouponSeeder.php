<?php

namespace Database\Seeders\Demo;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Demo kuponlar ve kampanyalar oluşturan seeder.
 * Çeşitli indirim tipleri oluşturur.
 * Kupon verileri database/data/coupons.json dosyasından okunur.
 */
class DemoCouponSeeder extends Seeder
{
    /**
     * Kupon verileri (JSON'dan yüklenir).
     */
    protected array $coupons = [];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // JSON dosyasından kupon verilerini yükle
        $this->loadCouponsFromJson();

        $now = Carbon::now();

        foreach ($this->coupons as $coupon) {
            // Mevcut kupon kodunu kontrol et
            $exists = DB::table('cart_rule_coupons')
                ->where('code', $coupon['code'])
                ->exists();

            if ($exists) {
                continue;
            }

            $cartRuleId = DB::table('cart_rules')->insertGetId([
                'name'                      => $coupon['name'],
                'description'               => $coupon['description'],
                'starts_from'               => null,
                'ends_till'                 => null,
                'status'                    => 1,
                'coupon_type'               => 1,
                'use_auto_generation'       => 0,
                'usage_per_customer'        => $coupon['usage_per_customer'] ?? 0,
                'uses_per_coupon'           => 0,
                'times_used'                => 0,
                'condition_type'            => 1,
                'conditions'                => isset($coupon['min_amount']) ? json_encode([
                    [
                        'attribute'       => 'cart|base_sub_total',
                        'operator'        => '>=',
                        'value'           => $coupon['min_amount'],
                        'attribute_type'  => 'numeric',
                    ],
                ]) : null,
                'end_other_rules'           => 0,
                'uses_attribute_conditions' => 0,
                'action_type'               => $coupon['type'],
                'discount_amount'           => $coupon['amount'],
                'discount_quantity'         => 1,
                'discount_step'             => '1',
                'apply_to_shipping'         => 0,
                'free_shipping'             => isset($coupon['free_shipping']) && $coupon['free_shipping'] ? 1 : 0,
                'sort_order'                => 0,
                'created_at'                => $now,
                'updated_at'                => $now,
            ]);

            // Kupon kodu
            DB::table('cart_rule_coupons')->insert([
                'code'               => $coupon['code'],
                'usage_limit'        => 0,
                'usage_per_customer' => $coupon['usage_per_customer'] ?? 0,
                'times_used'         => 0,
                'type'               => 0,
                'cart_rule_id'       => $cartRuleId,
                'expired_at'         => null,
                'is_primary'         => 1,
                'created_at'         => $now,
                'updated_at'         => $now,
            ]);

            // Kanal ilişkisi
            DB::table('cart_rule_channels')->insert([
                'cart_rule_id' => $cartRuleId,
                'channel_id'   => 1,
            ]);

            // Müşteri grubu ilişkisi (tüm gruplar)
            foreach ([1, 2, 3] as $groupId) {
                DB::table('cart_rule_customer_groups')->insert([
                    'cart_rule_id'      => $cartRuleId,
                    'customer_group_id' => $groupId,
                ]);
            }
        }
    }

    /**
     * JSON dosyasından kupon verilerini yükle.
     */
    protected function loadCouponsFromJson(): void
    {
        $jsonPath = database_path('data/coupons.json');

        if (!file_exists($jsonPath)) {
            throw new \RuntimeException('Kupon veri dosyası bulunamadı: ' . $jsonPath);
        }

        $jsonContent = file_get_contents($jsonPath);
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Kupon JSON dosyası okunamadı: ' . json_last_error_msg());
        }

        $this->coupons = $data['coupons'] ?? [];
    }
}
