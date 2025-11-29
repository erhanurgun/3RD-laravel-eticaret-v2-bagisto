<?php

namespace Database\Seeders\Demo;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Demo siparişler oluşturan seeder.
 * Farklı durumlarda siparişler oluşturur.
 */
class DemoOrderSeeder extends Seeder
{
    /**
     * Sipariş durumları.
     */
    protected array $statuses = [
        'pending',
        'pending_payment',
        'processing',
        'completed',
        'canceled',
        'closed',
    ];

    /**
     * Seed the application's database.
     */
    public function run(array $customerIds): void
    {
        if (empty($customerIds)) {
            $this->command->warn('Müşteri bulunamadı, siparişler oluşturulamadı.');
            return;
        }

        // Ürünleri al (sadece simple ürünler)
        $products = DB::table('products')
            ->join('product_flat', 'products.id', '=', 'product_flat.product_id')
            ->where('products.type', 'simple')
            ->where('product_flat.locale', 'tr')
            ->where('product_flat.status', 1)
            ->whereNotNull('product_flat.price')
            ->select('products.id', 'products.sku', 'product_flat.name', 'product_flat.price', 'product_flat.weight')
            ->get();

        if ($products->isEmpty()) {
            $this->command->warn('Ürün bulunamadı, siparişler oluşturulamadı.');
            return;
        }

        $orderCount = 0;

        // Her müşteri için 1-3 sipariş oluştur
        foreach ($customerIds as $customerId) {
            $customer = DB::table('customers')->find($customerId);
            if (!$customer) {
                continue;
            }

            $address = DB::table('addresses')
                ->where('customer_id', $customerId)
                ->where('address_type', 'customer')
                ->first();

            $numOrders = rand(1, 3);

            for ($i = 0; $i < $numOrders; $i++) {
                $status = $this->statuses[array_rand($this->statuses)];
                $this->createOrder($customer, $address, $products, $status);
                $orderCount++;
            }
        }
    }

    /**
     * Sipariş oluştur.
     */
    protected function createOrder($customer, $address, $products, string $status): void
    {
        // Rastgele 1-5 ürün seç
        $selectedProducts = $products->random(min(rand(1, 5), $products->count()));

        $subTotal = 0;
        $totalQty = 0;
        $totalWeight = 0;
        $orderItems = [];

        foreach ($selectedProducts as $product) {
            $qty = rand(1, 3);
            $price = (float) $product->price;
            $total = $price * $qty;

            $subTotal += $total;
            $totalQty += $qty;
            $totalWeight += ((float) ($product->weight ?? 1)) * $qty;

            $orderItems[] = [
                'product_id'    => $product->id,
                'sku'           => $product->sku,
                'name'          => $product->name,
                'qty'           => $qty,
                'price'         => $price,
                'total'         => $total,
                'weight'        => $product->weight ?? 1,
            ];
        }

        // Kargo ücreti
        $shippingAmount = $subTotal > 500 ? 0 : 29.90;

        // Vergi (%20 KDV dahil fiyat varsayımı)
        $taxAmount = round($subTotal * 0.20 / 1.20, 2);

        $grandTotal = $subTotal + $shippingAmount;

        // Rastgele geçmiş tarih (son 90 gün)
        $createdAt = Carbon::now()->subDays(rand(1, 90))->subHours(rand(0, 23));

        // Sipariş numarası
        $incrementId = date('Ymd', $createdAt->timestamp) . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);

        $orderId = DB::table('orders')->insertGetId([
            'increment_id'                  => $incrementId,
            'status'                        => $status,
            'channel_name'                  => 'Default',
            'is_guest'                      => 0,
            'customer_email'                => $customer->email,
            'customer_first_name'           => $customer->first_name,
            'customer_last_name'            => $customer->last_name,
            'shipping_method'               => 'flatrate_flatrate',
            'shipping_title'                => 'Sabit Kargo Ücreti',
            'shipping_description'          => '500 TL üzeri ücretsiz kargo',
            'coupon_code'                   => null,
            'is_gift'                       => 0,
            'total_item_count'              => count($orderItems),
            'total_qty_ordered'             => $totalQty,
            'base_currency_code'            => 'TRY',
            'channel_currency_code'         => 'TRY',
            'order_currency_code'           => 'TRY',
            'grand_total'                   => $grandTotal,
            'base_grand_total'              => $grandTotal,
            'grand_total_invoiced'          => in_array($status, ['completed', 'closed']) ? $grandTotal : 0,
            'base_grand_total_invoiced'     => in_array($status, ['completed', 'closed']) ? $grandTotal : 0,
            'grand_total_refunded'          => 0,
            'base_grand_total_refunded'     => 0,
            'sub_total'                     => $subTotal,
            'base_sub_total'                => $subTotal,
            'sub_total_invoiced'            => in_array($status, ['completed', 'closed']) ? $subTotal : 0,
            'base_sub_total_invoiced'       => in_array($status, ['completed', 'closed']) ? $subTotal : 0,
            'sub_total_refunded'            => 0,
            'base_sub_total_refunded'       => 0,
            'discount_percent'              => 0,
            'discount_amount'               => 0,
            'base_discount_amount'          => 0,
            'discount_invoiced'             => 0,
            'base_discount_invoiced'        => 0,
            'discount_refunded'             => 0,
            'base_discount_refunded'        => 0,
            'tax_amount'                    => $taxAmount,
            'base_tax_amount'               => $taxAmount,
            'tax_amount_invoiced'           => in_array($status, ['completed', 'closed']) ? $taxAmount : 0,
            'base_tax_amount_invoiced'      => in_array($status, ['completed', 'closed']) ? $taxAmount : 0,
            'tax_amount_refunded'           => 0,
            'base_tax_amount_refunded'      => 0,
            'shipping_amount'               => $shippingAmount,
            'base_shipping_amount'          => $shippingAmount,
            'shipping_invoiced'             => in_array($status, ['completed', 'closed']) ? $shippingAmount : 0,
            'base_shipping_invoiced'        => in_array($status, ['completed', 'closed']) ? $shippingAmount : 0,
            'shipping_refunded'             => 0,
            'base_shipping_refunded'        => 0,
            'shipping_discount_amount'      => 0,
            'base_shipping_discount_amount' => 0,
            'shipping_tax_amount'           => 0,
            'base_shipping_tax_amount'      => 0,
            'shipping_tax_refunded'         => 0,
            'base_shipping_tax_refunded'    => 0,
            'sub_total_incl_tax'            => $subTotal,
            'base_sub_total_incl_tax'       => $subTotal,
            'shipping_amount_incl_tax'      => $shippingAmount,
            'base_shipping_amount_incl_tax' => $shippingAmount,
            'customer_id'                   => $customer->id,
            'customer_type'                 => 'Webkul\Customer\Models\Customer',
            'channel_id'                    => 1,
            'channel_type'                  => 'Webkul\Core\Models\Channel',
            'cart_id'                       => null,
            'applied_cart_rule_ids'         => null,
            'created_at'                    => $createdAt,
            'updated_at'                    => $createdAt,
        ]);

        // Sipariş kalemleri
        foreach ($orderItems as $item) {
            DB::table('order_items')->insert([
                'order_id'                  => $orderId,
                'product_id'                => $item['product_id'],
                'product_type'              => 'Webkul\Product\Models\Product',
                'sku'                       => $item['sku'],
                'type'                      => 'simple',
                'name'                      => $item['name'],
                'coupon_code'               => null,
                'weight'                    => $item['weight'],
                'total_weight'              => $item['weight'] * $item['qty'],
                'qty_ordered'               => $item['qty'],
                'qty_shipped'               => in_array($status, ['completed', 'closed']) ? $item['qty'] : 0,
                'qty_invoiced'              => in_array($status, ['completed', 'closed']) ? $item['qty'] : 0,
                'qty_canceled'              => $status === 'canceled' ? $item['qty'] : 0,
                'qty_refunded'              => 0,
                'price'                     => $item['price'],
                'base_price'                => $item['price'],
                'total'                     => $item['total'],
                'base_total'                => $item['total'],
                'total_invoiced'            => in_array($status, ['completed', 'closed']) ? $item['total'] : 0,
                'base_total_invoiced'       => in_array($status, ['completed', 'closed']) ? $item['total'] : 0,
                'amount_refunded'           => 0,
                'base_amount_refunded'      => 0,
                'discount_percent'          => 0,
                'discount_amount'           => 0,
                'base_discount_amount'      => 0,
                'discount_invoiced'         => 0,
                'base_discount_invoiced'    => 0,
                'discount_refunded'         => 0,
                'base_discount_refunded'    => 0,
                'tax_percent'               => 20,
                'tax_amount'                => round($item['total'] * 0.20 / 1.20, 2),
                'base_tax_amount'           => round($item['total'] * 0.20 / 1.20, 2),
                'tax_amount_invoiced'       => 0,
                'base_tax_amount_invoiced'  => 0,
                'tax_amount_refunded'       => 0,
                'base_tax_amount_refunded'  => 0,
                'price_incl_tax'            => $item['price'],
                'base_price_incl_tax'       => $item['price'],
                'total_incl_tax'            => $item['total'],
                'base_total_incl_tax'       => $item['total'],
                'additional'                => json_encode(['locale' => 'tr']),
                'parent_id'                 => null,
                'created_at'                => $createdAt,
                'updated_at'                => $createdAt,
            ]);
        }

        // Sipariş adresleri (Fatura ve Teslimat)
        // Bagisto'da sipariş adresleri 'addresses' tablosunda saklanır
        $addressData = [
            'first_name'      => $customer->first_name,
            'last_name'       => $customer->last_name,
            'email'           => $customer->email,
            'phone'           => $customer->phone ?? '+905001234567',
            'gender'          => $customer->gender ?? 'male',
            'company_name'    => null,
            'address'         => $address->address ?? 'Örnek Mahallesi, Örnek Sokak No: 1',
            'city'            => $address->city ?? 'İstanbul',
            'state'           => $address->state ?? 'İstanbul',
            'country'         => 'TR',
            'postcode'        => $address->postcode ?? '34000',
            'vat_id'          => null,
            'order_id'        => $orderId,
            'customer_id'     => null,
            'cart_id'         => null,
            'default_address' => 0,
            'additional'      => null,
            'created_at'      => $createdAt,
            'updated_at'      => $createdAt,
        ];

        // Fatura adresi (order_billing)
        DB::table('addresses')->insert(array_merge($addressData, ['address_type' => 'order_billing']));

        // Teslimat adresi (order_shipping)
        $shippingAddressId = DB::table('addresses')->insertGetId(array_merge($addressData, ['address_type' => 'order_shipping']));

        // Ödeme kaydı
        DB::table('order_payment')->insert([
            'method'       => 'cashondelivery',
            'method_title' => 'Kapıda Ödeme',
            'additional'   => json_encode(['method_title' => 'Kapıda Ödeme']),
            'order_id'     => $orderId,
            'created_at'   => $createdAt,
            'updated_at'   => $createdAt,
        ]);

        // Tamamlanmış siparişler için fatura ve kargo oluştur
        if (in_array($status, ['completed', 'closed'])) {
            $this->createInvoice($orderId, $orderItems, $subTotal, $shippingAmount, $grandTotal, $taxAmount, $createdAt);
            $this->createShipment($orderId, $orderItems, $totalWeight, $createdAt, $shippingAddressId);
        }
    }

    /**
     * Fatura oluştur.
     */
    protected function createInvoice(int $orderId, array $items, float $subTotal, float $shipping, float $grandTotal, float $tax, Carbon $createdAt): void
    {
        $invoiceId = DB::table('invoices')->insertGetId([
            'increment_id'                  => 'INV-' . $orderId,
            'state'                         => 'paid',
            'email_sent'                    => 1,
            'total_qty'                     => array_sum(array_column($items, 'qty')),
            'base_currency_code'            => 'TRY',
            'channel_currency_code'         => 'TRY',
            'order_currency_code'           => 'TRY',
            'sub_total'                     => $subTotal,
            'base_sub_total'                => $subTotal,
            'grand_total'                   => $grandTotal,
            'base_grand_total'              => $grandTotal,
            'shipping_amount'               => $shipping,
            'base_shipping_amount'          => $shipping,
            'tax_amount'                    => $tax,
            'base_tax_amount'               => $tax,
            'discount_amount'               => 0,
            'base_discount_amount'          => 0,
            'shipping_tax_amount'           => 0,
            'base_shipping_tax_amount'      => 0,
            'sub_total_incl_tax'            => $subTotal,
            'base_sub_total_incl_tax'       => $subTotal,
            'shipping_amount_incl_tax'      => $shipping,
            'base_shipping_amount_incl_tax' => $shipping,
            'order_id'                      => $orderId,
            'transaction_id'                => 'TXN-' . Str::random(10),
            'reminders'                     => 0,
            'next_reminder_at'              => null,
            'created_at'                    => $createdAt->copy()->addHours(1),
            'updated_at'                    => $createdAt->copy()->addHours(1),
        ]);

        foreach ($items as $item) {
            DB::table('invoice_items')->insert([
                'invoice_id'              => $invoiceId,
                'order_item_id'           => DB::table('order_items')
                    ->where('order_id', $orderId)
                    ->where('product_id', $item['product_id'])
                    ->value('id'),
                'parent_id'               => null,
                'name'                    => $item['name'],
                'description'             => null,
                'sku'                     => $item['sku'],
                'qty'                     => $item['qty'],
                'price'                   => $item['price'],
                'base_price'              => $item['price'],
                'total'                   => $item['total'],
                'base_total'              => $item['total'],
                'tax_amount'              => round($item['total'] * 0.20 / 1.20, 2),
                'base_tax_amount'         => round($item['total'] * 0.20 / 1.20, 2),
                'discount_amount'         => 0,
                'base_discount_amount'    => 0,
                'price_incl_tax'          => $item['price'],
                'base_price_incl_tax'     => $item['price'],
                'total_incl_tax'          => $item['total'],
                'base_total_incl_tax'     => $item['total'],
                'product_id'              => $item['product_id'],
                'product_type'            => 'Webkul\Product\Models\Product',
                'additional'              => null,
                'created_at'              => $createdAt->copy()->addHours(1),
                'updated_at'              => $createdAt->copy()->addHours(1),
            ]);
        }
    }

    /**
     * Kargo oluştur.
     */
    protected function createShipment(int $orderId, array $items, float $totalWeight, Carbon $createdAt, int $shippingAddressId): void
    {
        $shipmentId = DB::table('shipments')->insertGetId([
            'status'                   => null,
            'total_qty'                => array_sum(array_column($items, 'qty')),
            'total_weight'             => $totalWeight,
            'carrier_code'             => null,
            'carrier_title'            => 'Standart Kargo',
            'track_number'             => 'TRK' . strtoupper(Str::random(12)),
            'email_sent'               => 1,
            'customer_id'              => null,
            'customer_type'            => null,
            'order_id'                 => $orderId,
            'order_address_id'         => $shippingAddressId,
            'inventory_source_id'      => 1,
            'inventory_source_name'    => 'Varsayılan Depo',
            'created_at'               => $createdAt->copy()->addDays(1),
            'updated_at'               => $createdAt->copy()->addDays(1),
        ]);

        foreach ($items as $item) {
            DB::table('shipment_items')->insert([
                'shipment_id'    => $shipmentId,
                'order_item_id'  => DB::table('order_items')
                    ->where('order_id', $orderId)
                    ->where('product_id', $item['product_id'])
                    ->value('id'),
                'name'           => $item['name'],
                'description'    => null,
                'sku'            => $item['sku'],
                'qty'            => $item['qty'],
                'weight'         => $item['weight'],
                'price'          => $item['price'],
                'base_price'     => $item['price'],
                'total'          => $item['total'],
                'base_total'     => $item['total'],
                'product_id'     => $item['product_id'],
                'product_type'   => 'Webkul\Product\Models\Product',
                'additional'     => null,
                'created_at'     => $createdAt->copy()->addDays(1),
                'updated_at'     => $createdAt->copy()->addDays(1),
            ]);
        }
    }
}
