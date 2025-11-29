<?php

namespace Webkul\Installer\Database\Seeders\Marketing;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartRuleTableSeeder extends Seeder
{
    /**
     * Demo kupon kodlarını oluşturur.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('cart_rule_coupons')->delete();
        DB::table('cart_rule_channels')->delete();
        DB::table('cart_rule_customer_groups')->delete();
        DB::table('cart_rules')->delete();

        $now = date('Y-m-d H:i:s');

        // %50 indirim kuponu
        $cartRuleId1 = DB::table('cart_rules')->insertGetId([
            'name'                      => 'Demo %50 İndirim Kuponu',
            'description'               => 'Sepette %50 indirim sağlayan demo kupon kodu',
            'starts_from'               => null,
            'ends_till'                 => null,
            'status'                    => 1,
            'coupon_type'               => 1, // Belirli kupon kodu
            'use_auto_generation'       => 0,
            'usage_per_customer'        => 0, // Sınırsız
            'uses_per_coupon'           => 0, // Sınırsız
            'times_used'                => 0,
            'condition_type'            => 1,
            'conditions'                => null,
            'end_other_rules'           => 0,
            'uses_attribute_conditions' => 0,
            'action_type'               => 'by_percent',
            'discount_amount'           => 50.0000,
            'discount_quantity'         => 1,
            'discount_step'             => '1',
            'apply_to_shipping'         => 0,
            'free_shipping'             => 0,
            'sort_order'                => 0,
            'created_at'                => $now,
            'updated_at'                => $now,
        ]);

        // Kupon kodu oluştur
        DB::table('cart_rule_coupons')->insert([
            'code'               => 'DEMOKUPON50',
            'usage_limit'        => 0,
            'usage_per_customer' => 0,
            'times_used'         => 0,
            'type'               => 0,
            'cart_rule_id'       => $cartRuleId1,
            'expired_at'         => null,
            'is_primary'         => 1,
            'created_at'         => $now,
            'updated_at'         => $now,
        ]);

        // Kanal ilişkisi (tüm kanallar - varsayılan kanal ID: 1)
        DB::table('cart_rule_channels')->insert([
            'cart_rule_id' => $cartRuleId1,
            'channel_id'   => 1,
        ]);

        // Müşteri grubu ilişkisi (tüm gruplar)
        DB::table('cart_rule_customer_groups')->insert([
            ['cart_rule_id' => $cartRuleId1, 'customer_group_id' => 1], // guest
            ['cart_rule_id' => $cartRuleId1, 'customer_group_id' => 2], // general
            ['cart_rule_id' => $cartRuleId1, 'customer_group_id' => 3], // wholesale
        ]);

        // %100 indirim kuponu (ücretsiz)
        $cartRuleId2 = DB::table('cart_rules')->insertGetId([
            'name'                      => 'Demo Ücretsiz Kupon',
            'description'               => 'Sepette %100 indirim sağlayan demo kupon kodu (ücretsiz)',
            'starts_from'               => null,
            'ends_till'                 => null,
            'status'                    => 1,
            'coupon_type'               => 1, // Belirli kupon kodu
            'use_auto_generation'       => 0,
            'usage_per_customer'        => 0, // Sınırsız
            'uses_per_coupon'           => 0, // Sınırsız
            'times_used'                => 0,
            'condition_type'            => 1,
            'conditions'                => null,
            'end_other_rules'           => 0,
            'uses_attribute_conditions' => 0,
            'action_type'               => 'by_percent',
            'discount_amount'           => 100.0000,
            'discount_quantity'         => 1,
            'discount_step'             => '1',
            'apply_to_shipping'         => 0,
            'free_shipping'             => 0,
            'sort_order'                => 1,
            'created_at'                => $now,
            'updated_at'                => $now,
        ]);

        // Kupon kodu oluştur
        DB::table('cart_rule_coupons')->insert([
            'code'               => 'DEMOFREECOUPON',
            'usage_limit'        => 0,
            'usage_per_customer' => 0,
            'times_used'         => 0,
            'type'               => 0,
            'cart_rule_id'       => $cartRuleId2,
            'expired_at'         => null,
            'is_primary'         => 1,
            'created_at'         => $now,
            'updated_at'         => $now,
        ]);

        // Kanal ilişkisi
        DB::table('cart_rule_channels')->insert([
            'cart_rule_id' => $cartRuleId2,
            'channel_id'   => 1,
        ]);

        // Müşteri grubu ilişkisi (tüm gruplar)
        DB::table('cart_rule_customer_groups')->insert([
            ['cart_rule_id' => $cartRuleId2, 'customer_group_id' => 1], // guest
            ['cart_rule_id' => $cartRuleId2, 'customer_group_id' => 2], // general
            ['cart_rule_id' => $cartRuleId2, 'customer_group_id' => 3], // wholesale
        ]);
    }
}
