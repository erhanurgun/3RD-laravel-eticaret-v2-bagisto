<?php

namespace Database\Seeders\Demo;

use Illuminate\Database\Seeder;

/**
 * Demo verileri oluşturan ana seeder.
 */
class DemoDataSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Kategoriler
        $categorySeeder = new DemoCategorySeeder();
        $categorySeeder->setCommand($this->command);
        $categorySeeder->run();
        $categoryIds = $categorySeeder->getCategoryIds();

        // 2. Ürünler
        $productSeeder = new DemoProductSeeder();
        $productSeeder->setCommand($this->command);
        $productSeeder->run($categoryIds);

        // 3. Müşteriler
        $customerSeeder = new DemoCustomerSeeder();
        $customerSeeder->setCommand($this->command);
        $customerSeeder->run();
        $customerIds = $customerSeeder->getCustomerIds();

        // 4. Siparişler
        $orderSeeder = new DemoOrderSeeder();
        $orderSeeder->setCommand($this->command);
        $orderSeeder->run($customerIds);

        // 5. Yorumlar
        $reviewSeeder = new DemoReviewSeeder();
        $reviewSeeder->setCommand($this->command);
        $reviewSeeder->run($customerIds);

        // 6. Kuponlar
        $couponSeeder = new DemoCouponSeeder();
        $couponSeeder->setCommand($this->command);
        $couponSeeder->run();
    }
}
