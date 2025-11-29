<?php

namespace Webkul\Installer\Database\Seeders\Marketing;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        $this->call(CartRuleTableSeeder::class, false, ['parameters' => $parameters]);
    }
}
