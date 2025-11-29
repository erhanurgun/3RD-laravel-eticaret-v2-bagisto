<?php

namespace Webkul\Installer\Database\Seeders\Customer;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerTableSeeder extends Seeder
{
    /**
     * Demo müşteri hesabı oluşturur.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('customers')->delete();
        DB::table('addresses')->where('address_type', 'customer')->delete();

        $now = date('Y-m-d H:i:s');

        // Demo müşteri oluştur
        $customerId = DB::table('customers')->insertGetId([
            'first_name'                => 'Demo',
            'last_name'                 => 'Kullanıcı',
            'gender'                    => 'male',
            'date_of_birth'             => '1990-01-15',
            'email'                     => 'customer@erho.test',
            'phone'                     => '+905551234567',
            'status'                    => 1,
            'password'                  => Hash::make('!Dem0Str0ngP4ssw0rd!'),
            'customer_group_id'         => 2, // general
            'channel_id'                => 1,
            'subscribed_to_news_letter' => 1,
            'is_verified'               => 1,
            'is_suspended'              => 0,
            'created_at'                => $now,
            'updated_at'                => $now,
        ]);

        // Varsayılan ev adresi
        DB::table('addresses')->insert([
            'address_type'    => 'customer',
            'customer_id'     => $customerId,
            'first_name'      => 'Demo',
            'last_name'       => 'Kullanıcı',
            'gender'          => 'male',
            'company_name'    => null,
            'address'         => implode(PHP_EOL, ['Yavuz Mahallesi', 'Cumhuriyet Caddesi No: 123']),
            'city'            => 'Kadıköy',
            'state'           => 'İstanbul',
            'country'         => 'TR',
            'postcode'        => '34710',
            'email'           => 'customer@erho.test',
            'phone'           => '+905551234567',
            'vat_id'          => null,
            'default_address' => 1,
            'created_at'      => $now,
            'updated_at'      => $now,
        ]);

        // İş adresi
        DB::table('addresses')->insert([
            'address_type'    => 'customer',
            'customer_id'     => $customerId,
            'first_name'      => 'Demo',
            'last_name'       => 'Kullanıcı',
            'gender'          => 'male',
            'company_name'    => 'Demo Teknoloji A.Ş.',
            'address'         => implode(PHP_EOL, ['Levent Mahallesi', 'Büyükdere Caddesi No: 456 Kat: 12']),
            'city'            => 'Beşiktaş',
            'state'           => 'İstanbul',
            'country'         => 'TR',
            'postcode'        => '34330',
            'email'           => 'is@erho.test',
            'phone'           => '+902121234567',
            'vat_id'          => '1234567890',
            'default_address' => 0,
            'created_at'      => $now,
            'updated_at'      => $now,
        ]);
    }
}
