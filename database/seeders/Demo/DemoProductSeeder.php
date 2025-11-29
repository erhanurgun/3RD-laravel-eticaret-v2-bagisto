<?php

namespace Database\Seeders\Demo;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Demo ürünleri oluşturan seeder.
 * 200+ ürün oluşturur, her kategori için çeşitli ürünler.
 * Ürün verileri database/data/products.json dosyasından okunur.
 */
class DemoProductSeeder extends Seeder
{
    /**
     * Ürün ID sayacı (run() içinde dinamik olarak belirlenir).
     */
    protected int $productId;

    /**
     * Ürün verileri - kategori bazlı.
     */
    protected array $products = [];

    /**
     * Seed the application's database.
     */
    public function run(array $categoryIds): void
    {
        $this->loadProductsFromJson();
        $now = Carbon::now();
        $locales = ['tr', 'en'];
        $createdCount = 0;

        // Mevcut maksimum ürün ID'sini al
        $maxProductId = DB::table('products')->max('id') ?? 0;
        $this->productId = $maxProductId + 1;

        foreach ($this->products as $categorySlug => $products) {
            $categoryId = $categoryIds[$categorySlug] ?? null;
            if (!$categoryId) {
                continue;
            }

            foreach ($products as $product) {
                // SKU zaten varsa atla
                $sku = $product['sku'] ?? 'DEMO-' . str_pad($this->productId, 4, '0', STR_PAD_LEFT);
                if (DB::table('products')->where('sku', $sku)->exists()) {
                    continue;
                }

                $this->createProduct($product, $categoryId, $locales, $now);
                $createdCount++;
            }
        }
    }

    /**
     * Ürün oluştur.
     */
    protected function createProduct(array $product, int $categoryId, array $locales, Carbon $now): void
    {
        $productId = $this->productId++;
        $sku = $product['sku'] ?? 'DEMO-' . str_pad($productId, 4, '0', STR_PAD_LEFT);

        // Ana ürün kaydı
        DB::table('products')->insert([
            'id'                  => $productId,
            'sku'                 => $sku,
            'type'                => 'simple',
            'parent_id'           => null,
            'attribute_family_id' => 1,
            'additional'          => null,
            'created_at'          => $now,
            'updated_at'          => $now,
        ]);

        // Her dil için product_flat
        foreach ($locales as $locale) {
            $name = $product[$locale]['name'] ?? $product['tr']['name'];
            $description = $product[$locale]['description'] ?? $product['tr']['description'];
            $shortDescription = $product[$locale]['short_description'] ?? mb_substr($description, 0, 150) . '...';
            $urlKey = Str::slug($product['tr']['name']) . '-' . $productId;

            DB::table('product_flat')->insert([
                'product_id'           => $productId,
                'sku'                  => $sku,
                'type'                 => 'simple',
                'name'                 => $name,
                'short_description'    => $shortDescription,
                'description'          => '<p>' . $description . '</p>',
                'url_key'              => $urlKey,
                'new'                  => $product['new'] ?? rand(0, 1),
                'featured'             => $product['featured'] ?? rand(0, 1),
                'status'               => 1,
                'visible_individually' => 1,
                'meta_title'           => $name,
                'meta_keywords'        => $name,
                'meta_description'     => $shortDescription,
                'price'                => $product['price'],
                'special_price'        => $product['special_price'] ?? null,
                'special_price_from'   => isset($product['special_price']) ? $now : null,
                'special_price_to'     => isset($product['special_price']) ? $now->copy()->addMonths(1) : null,
                'weight'               => $product['weight'] ?? rand(1, 50) / 10,
                'locale'               => $locale,
                'channel'              => 'default',
                'attribute_family_id'  => 1,
                'created_at'           => $now,
                'updated_at'           => $now,
            ]);
        }

        // Ürün öznitelikleri
        $this->createProductAttributes($productId, $product, $locales, $now);

        // Kanal ilişkisi
        DB::table('product_channels')->insert([
            'product_id' => $productId,
            'channel_id' => 1,
        ]);

        // Kategori ilişkisi
        DB::table('product_categories')->insert([
            'product_id'  => $productId,
            'category_id' => $categoryId,
        ]);

        // Envanter
        $qty = $product['qty'] ?? rand(10, 200);
        DB::table('product_inventories')->insert([
            'product_id'          => $productId,
            'vendor_id'           => 0,
            'inventory_source_id' => 1,
            'qty'                 => $qty,
        ]);

        DB::table('product_inventory_indices')->insert([
            'product_id'  => $productId,
            'channel_id'  => 1,
            'qty'         => $qty,
            'created_at'  => $now,
            'updated_at'  => $now,
        ]);

        // Fiyat indeksi (tüm müşteri grupları için)
        $price = $product['special_price'] ?? $product['price'];
        $regularPrice = $product['price'];
        foreach ([1, 2, 3] as $customerGroupId) {
            DB::table('product_price_indices')->insert([
                'product_id'        => $productId,
                'customer_group_id' => $customerGroupId,
                'channel_id'        => 1,
                'min_price'         => $price,
                'regular_min_price' => $regularPrice,
                'max_price'         => $price,
                'regular_max_price' => $regularPrice,
                'created_at'        => $now,
                'updated_at'        => $now,
            ]);
        }
    }

    /**
     * Ürün özniteliklerini oluştur.
     */
    protected function createProductAttributes(int $productId, array $product, array $locales, Carbon $now): void
    {
        $attributes = [
            // SKU (attribute_id: 1)
            ['attribute_id' => 1, 'text_value' => $product['sku'] ?? 'DEMO-' . str_pad($productId, 4, '0', STR_PAD_LEFT)],
            // Price (attribute_id: 11)
            ['attribute_id' => 11, 'float_value' => $product['price']],
            // Weight (attribute_id: 22)
            ['attribute_id' => 22, 'text_value' => (string) ($product['weight'] ?? rand(1, 50) / 10)],
            // Status (attribute_id: 8)
            ['attribute_id' => 8, 'boolean_value' => 1],
            // Visible Individually (attribute_id: 26)
            ['attribute_id' => 26, 'boolean_value' => 1],
            // New (attribute_id: 6)
            ['attribute_id' => 6, 'boolean_value' => $product['new'] ?? rand(0, 1)],
            // Featured (attribute_id: 7)
            ['attribute_id' => 7, 'boolean_value' => $product['featured'] ?? rand(0, 1)],
        ];

        if (isset($product['special_price'])) {
            // Special Price (attribute_id: 12)
            $attributes[] = ['attribute_id' => 12, 'float_value' => $product['special_price']];
        }

        foreach ($attributes as $attr) {
            $values = array_fill_keys(['text_value', 'boolean_value', 'integer_value', 'float_value', 'datetime_value', 'date_value', 'json_value'], null);
            foreach ($attr as $key => $value) {
                if ($key !== 'attribute_id') {
                    $values[$key] = $value;
                }
            }

            DB::table('product_attribute_values')->insert(array_merge([
                'attribute_id' => $attr['attribute_id'],
                'product_id'   => $productId,
                'channel'      => null,
                'locale'       => null,
                'unique_id'    => $productId . '|' . $attr['attribute_id'],
            ], $values));
        }

        // Dil bazlı öznitelikler
        foreach ($locales as $locale) {
            $name = $product[$locale]['name'] ?? $product['tr']['name'];
            $description = $product[$locale]['description'] ?? $product['tr']['description'];
            $shortDescription = $product[$locale]['short_description'] ?? mb_substr($description, 0, 150) . '...';
            $urlKey = Str::slug($product['tr']['name']) . '-' . $productId;

            $localeAttributes = [
                // Name (attribute_id: 2)
                ['attribute_id' => 2, 'text_value' => $name],
                // URL Key (attribute_id: 3)
                ['attribute_id' => 3, 'text_value' => $urlKey],
                // Short Description (attribute_id: 9)
                ['attribute_id' => 9, 'text_value' => $shortDescription],
                // Description (attribute_id: 10)
                ['attribute_id' => 10, 'text_value' => '<p>' . $description . '</p>'],
                // Meta Title (attribute_id: 16)
                ['attribute_id' => 16, 'text_value' => $name],
                // Meta Keywords (attribute_id: 17)
                ['attribute_id' => 17, 'text_value' => $name],
                // Meta Description (attribute_id: 18)
                ['attribute_id' => 18, 'text_value' => $shortDescription],
            ];

            foreach ($localeAttributes as $attr) {
                $values = array_fill_keys(['text_value', 'boolean_value', 'integer_value', 'float_value', 'datetime_value', 'date_value', 'json_value'], null);
                foreach ($attr as $key => $value) {
                    if ($key !== 'attribute_id') {
                        $values[$key] = $value;
                    }
                }

                DB::table('product_attribute_values')->insert(array_merge([
                    'attribute_id' => $attr['attribute_id'],
                    'product_id'   => $productId,
                    'channel'      => 'default',
                    'locale'       => $locale,
                    'unique_id'    => 'default|' . $locale . '|' . $productId . '|' . $attr['attribute_id'],
                ], $values));
            }
        }
    }

    /**
     * JSON dosyasından ürün verilerini yükle.
     */
    protected function loadProductsFromJson(): void
    {
        $jsonPath = database_path('data/products.json');

        if (!file_exists($jsonPath)) {
            throw new \RuntimeException('Ürün veri dosyası bulunamadı: ' . $jsonPath);
        }

        $jsonContent = file_get_contents($jsonPath);
        $this->products = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Ürün JSON dosyası okunamadı: ' . json_last_error_msg());
        }
    }
}
