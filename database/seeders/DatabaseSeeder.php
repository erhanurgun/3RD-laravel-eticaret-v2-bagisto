<?php

namespace Database\Seeders;

use Database\Seeders\Demo\DemoDataSeeder;
use Illuminate\Database\Seeder;
use Webkul\Installer\Database\Seeders\DatabaseSeeder as BagistoDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BagistoDatabaseSeeder::class, false, [
            'parameters' => [
                'default_locale'     => config('app.locale'),
                'default_currency'   => config('app.currency'),
                'allowed_locales'    => ['tr', 'en'],
                'allowed_currencies' => ['TRY', 'USD', 'EUR'],
            ],
        ]);

        // Demo verileri oluştur (kategoriler, ürünler, müşteriler, siparişler, yorumlar, kuponlar)
        $this->call(DemoDataSeeder::class);
    }
}
