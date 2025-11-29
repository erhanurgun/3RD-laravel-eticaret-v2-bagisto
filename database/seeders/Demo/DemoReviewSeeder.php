<?php

namespace Database\Seeders\Demo;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Demo ürün yorumları oluşturan seeder.
 * Gerçekçi Türkçe yorumlar oluşturur.
 * Yorum şablonları database/data/reviews.json dosyasından okunur.
 */
class DemoReviewSeeder extends Seeder
{
    /**
     * Olumlu yorumlar.
     */
    protected array $positiveReviews = [];

    /**
     * Orta düzey yorumlar.
     */
    protected array $neutralReviews = [];

    /**
     * Olumsuz yorumlar.
     */
    protected array $negativeReviews = [];

    /**
     * Yorum dağılımı ayarları.
     */
    protected array $distribution = [
        'positive' => 70,
        'neutral'  => 20,
        'negative' => 10,
    ];

    /**
     * Puan aralıkları.
     */
    protected array $ratings = [
        'positive' => ['min' => 4, 'max' => 5],
        'neutral'  => ['min' => 3, 'max' => 4],
        'negative' => ['min' => 1, 'max' => 3],
    ];

    /**
     * Seed the application's database.
     */
    public function run(array $customerIds): void
    {
        // JSON dosyasından yorum verilerini yükle
        $this->loadReviewsFromJson();

        if (empty($customerIds)) {
            $this->command->warn('Müşteri bulunamadı, yorumlar oluşturulamadı.');
            return;
        }

        // Ürünleri al
        $products = DB::table('products')
            ->join('product_flat', 'products.id', '=', 'product_flat.product_id')
            ->where('products.type', 'simple')
            ->where('product_flat.locale', 'tr')
            ->where('product_flat.status', 1)
            ->select('products.id')
            ->get()
            ->pluck('id')
            ->toArray();

        if (empty($products)) {
            $this->command->warn('Ürün bulunamadı, yorumlar oluşturulamadı.');
            return;
        }

        // Müşteri bilgilerini al
        $customers = DB::table('customers')
            ->whereIn('id', $customerIds)
            ->select('id', 'first_name', 'last_name')
            ->get();

        $reviewCount = 0;

        // Her ürün için rastgele 0-5 yorum ekle
        foreach ($products as $productId) {
            $numReviews = rand(0, 5);

            if ($numReviews === 0) {
                continue;
            }

            // Rastgele tarih (son 180 gün)
            $dates = [];
            for ($i = 0; $i < $numReviews; $i++) {
                $dates[] = Carbon::now()->subDays(rand(1, 180))->subHours(rand(0, 23));
            }
            sort($dates); // Tarihleri sırala

            for ($i = 0; $i < $numReviews; $i++) {
                $customer = $customers->random();
                $review = $this->getRandomReview();
                $rating = $this->getRating($review['type']);

                DB::table('product_reviews')->insert([
                    'title'      => $review['title'],
                    'rating'     => $rating,
                    'comment'    => $review['comment'],
                    'status'     => 'approved',
                    'name'       => $customer->first_name . ' ' . mb_substr($customer->last_name, 0, 1) . '.',
                    'product_id' => $productId,
                    'customer_id'=> $customer->id,
                    'created_at' => $dates[$i],
                    'updated_at' => $dates[$i],
                ]);

                $reviewCount++;
            }
        }
    }

    /**
     * Rastgele yorum seç.
     */
    protected function getRandomReview(): array
    {
        $positivePercent = $this->distribution['positive'];
        $neutralPercent = $this->distribution['neutral'];

        $rand = rand(1, 100);

        if ($rand <= $positivePercent) {
            $review = $this->positiveReviews[array_rand($this->positiveReviews)];
            $review['type'] = 'positive';
        } elseif ($rand <= $positivePercent + $neutralPercent) {
            $review = $this->neutralReviews[array_rand($this->neutralReviews)];
            $review['type'] = 'neutral';
        } else {
            $review = $this->negativeReviews[array_rand($this->negativeReviews)];
            $review['type'] = 'negative';
        }

        return $review;
    }

    /**
     * Yorum tipine göre puan ver.
     */
    protected function getRating(string $type): int
    {
        $range = $this->ratings[$type] ?? ['min' => 4, 'max' => 5];
        return rand($range['min'], $range['max']);
    }

    /**
     * JSON dosyasından yorum verilerini yükle.
     */
    protected function loadReviewsFromJson(): void
    {
        $jsonPath = database_path('data/reviews.json');

        if (!file_exists($jsonPath)) {
            throw new \RuntimeException('Yorum veri dosyası bulunamadı: ' . $jsonPath);
        }

        $jsonContent = file_get_contents($jsonPath);
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Yorum JSON dosyası okunamadı: ' . json_last_error_msg());
        }

        $this->positiveReviews = $data['positive'] ?? [];
        $this->neutralReviews = $data['neutral'] ?? [];
        $this->negativeReviews = $data['negative'] ?? [];
        $this->distribution = $data['distribution'] ?? $this->distribution;
        $this->ratings = $data['ratings'] ?? $this->ratings;
    }
}
