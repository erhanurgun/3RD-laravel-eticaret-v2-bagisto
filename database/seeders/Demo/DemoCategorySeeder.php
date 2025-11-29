<?php

namespace Database\Seeders\Demo;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Demo kategorileri oluşturan seeder.
 * Genel e-ticaret sitesi için ana ve alt kategoriler oluşturur.
 * Kategori verileri database/data/categories.json dosyasından okunur.
 */
class DemoCategorySeeder extends Seeder
{
    /**
     * Kategori yapısı (JSON'dan yüklenir).
     */
    protected array $categories = [];

    /**
     * Oluşturulan kategori ID'leri.
     */
    public array $categoryIds = [];

    /**
     * Kategori sayacı (run() içinde dinamik olarak belirlenir).
     */
    protected int $categoryCounter;

    /**
     * Position sayacı.
     */
    protected int $positionCounter;

    /**
     * Nested set için sayaçlar (run() içinde dinamik olarak belirlenir).
     */
    protected int $lft;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // JSON dosyasından kategori verilerini yükle
        $this->loadCategoriesFromJson();

        $now = Carbon::now();
        $locales = ['tr', 'en'];

        // Mevcut maksimum ID, position ve _rgt değerlerini al
        $maxId = DB::table('categories')->max('id') ?? 0;
        $maxPosition = DB::table('categories')->max('position') ?? 0;
        $maxRgt = DB::table('categories')->max('_rgt') ?? 2;

        $this->categoryCounter = $maxId + 1;
        $this->positionCounter = $maxPosition + 1;
        $this->lft = $maxRgt + 1;

        // Root kategori _rgt değerini güncelle
        $totalCategories = $this->countTotalCategories();
        $newRootRgt = $maxRgt + ($totalCategories * 2);
        DB::table('categories')->where('id', 1)->update(['_rgt' => $newRootRgt]);

        foreach ($this->categories as $slug => $categoryData) {
            // Slug zaten varsa atla
            $existingCategory = DB::table('category_translations')
                ->where('slug', $slug)
                ->first();

            if ($existingCategory) {
                $this->categoryIds[$slug] = $existingCategory->category_id;
                // Alt kategorileri de kontrol et
                if (isset($categoryData['children'])) {
                    foreach ($categoryData['children'] as $childSlug => $childData) {
                        $existingChild = DB::table('category_translations')
                            ->where('slug', $childSlug)
                            ->first();
                        if ($existingChild) {
                            $this->categoryIds[$childSlug] = $existingChild->category_id;
                        }
                    }
                }
                continue;
            }

            $mainCategoryId = $this->createCategory(
                slug: $slug,
                translations: $categoryData,
                parentId: 1,
                locales: $locales,
                now: $now,
                hasChildren: isset($categoryData['children'])
            );

            $this->categoryIds[$slug] = $mainCategoryId;

            if (isset($categoryData['children'])) {
                foreach ($categoryData['children'] as $childSlug => $childData) {
                    // Alt kategori zaten varsa atla
                    $existingChild = DB::table('category_translations')
                        ->where('slug', $childSlug)
                        ->first();

                    if ($existingChild) {
                        $this->categoryIds[$childSlug] = $existingChild->category_id;
                        continue;
                    }

                    $childCategoryId = $this->createCategory(
                        slug: $childSlug,
                        translations: $childData,
                        parentId: $mainCategoryId,
                        locales: $locales,
                        now: $now,
                        hasChildren: false
                    );
                    $this->categoryIds[$childSlug] = $childCategoryId;
                }

                // Ana kategorinin _rgt değerini güncelle
                $childCount = count($categoryData['children']);
                $newMainRgt = $this->lft - 1;
                DB::table('categories')
                    ->where('id', $mainCategoryId)
                    ->update(['_rgt' => $newMainRgt]);
            }
        }
    }

    /**
     * Toplam kategori sayısını hesapla.
     */
    protected function countTotalCategories(): int
    {
        $count = 0;
        foreach ($this->categories as $categoryData) {
            $count++; // Ana kategori
            if (isset($categoryData['children'])) {
                $count += count($categoryData['children']);
            }
        }
        return $count;
    }

    /**
     * Yeni kategori oluştur.
     */
    protected function createCategory(
        string $slug,
        array $translations,
        int $parentId,
        array $locales,
        Carbon $now,
        bool $hasChildren
    ): int {
        $categoryId = $this->categoryCounter++;

        $currentLft = $this->lft;
        $currentRgt = $hasChildren ? $this->lft + 1 : $this->lft + 1;
        $this->lft += 2;

        DB::table('categories')->insert([
            'id'           => $categoryId,
            'position'     => $this->positionCounter++,
            'logo_path'    => null,
            'status'       => 1,
            'display_mode' => 'products_and_description',
            '_lft'         => $currentLft,
            '_rgt'         => $currentRgt,
            'parent_id'    => $parentId,
            'additional'   => null,
            'banner_path'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        foreach ($locales as $locale) {
            $data = $translations[$locale] ?? $translations['en'] ?? $translations['tr'];
            DB::table('category_translations')->insert([
                'category_id'      => $categoryId,
                'name'             => $data['name'],
                'slug'             => $slug,
                'url_path'         => $slug,
                'description'      => '<p>' . $data['description'] . '</p>',
                'meta_title'       => $data['name'],
                'meta_description' => $data['description'],
                'meta_keywords'    => $data['name'],
                'locale_id'        => null,
                'locale'           => $locale,
            ]);
        }

        // Filterable attributes ekle
        $filterableAttributes = [11, 23, 24, 25]; // price, color, size, brand
        foreach ($filterableAttributes as $attributeId) {
            DB::table('category_filterable_attributes')->insert([
                'category_id'  => $categoryId,
                'attribute_id' => $attributeId,
            ]);
        }

        return $categoryId;
    }

    /**
     * Kategori ID'lerini döndür.
     */
    public function getCategoryIds(): array
    {
        return $this->categoryIds;
    }

    /**
     * JSON dosyasından kategori verilerini yükle.
     */
    protected function loadCategoriesFromJson(): void
    {
        $jsonPath = database_path('data/categories.json');

        if (!file_exists($jsonPath)) {
            throw new \RuntimeException('Kategori veri dosyası bulunamadı: ' . $jsonPath);
        }

        $jsonContent = file_get_contents($jsonPath);
        $this->categories = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Kategori JSON dosyası okunamadı: ' . json_last_error_msg());
        }
    }
}
