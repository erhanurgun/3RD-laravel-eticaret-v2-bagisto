<?php

namespace Database\Seeders\Demo;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Demo müşteriler oluşturan seeder.
 * 15-20 gerçekçi Türk müşteri profili oluşturur.
 * Müşteri verileri database/data/customers.json dosyasından okunur.
 */
class DemoCustomerSeeder extends Seeder
{
    /**
     * Oluşturulan müşteri ID'leri.
     */
    public array $customerIds = [];

    /**
     * Müşteri verileri (JSON'dan yüklenir).
     */
    protected array $customers = [];

    /**
     * Varsayılan şifre (JSON'dan yüklenir).
     */
    protected string $defaultPassword = 'Demo123!';

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // JSON dosyasından müşteri verilerini yükle
        $this->loadCustomersFromJson();

        $now = date('Y-m-d H:i:s');
        $password = Hash::make($this->defaultPassword);

        foreach ($this->customers as $customer) {
            // E-posta zaten varsa atla
            $existingCustomer = DB::table('customers')
                ->where('email', $customer['email'])
                ->first();

            if ($existingCustomer) {
                $this->customerIds[] = $existingCustomer->id;
                continue;
            }

            $customerId = DB::table('customers')->insertGetId([
                'first_name'                => $customer['first_name'],
                'last_name'                 => $customer['last_name'],
                'gender'                    => $customer['gender'],
                'date_of_birth'             => $customer['date_of_birth'],
                'email'                     => $customer['email'],
                'phone'                     => $customer['phone'],
                'status'                    => 1,
                'password'                  => $password,
                'customer_group_id'         => rand(1, 3), // guest, general, wholesale
                'channel_id'                => 1,
                'subscribed_to_news_letter' => rand(0, 1),
                'is_verified'               => 1,
                'is_suspended'              => 0,
                'created_at'                => $now,
                'updated_at'                => $now,
            ]);

            $this->customerIds[] = $customerId;

            // Müşteri adresi
            DB::table('addresses')->insert([
                'address_type'    => 'customer',
                'customer_id'     => $customerId,
                'first_name'      => $customer['first_name'],
                'last_name'       => $customer['last_name'],
                'gender'          => $customer['gender'],
                'company_name'    => null,
                'address'         => $customer['address']['address'],
                'city'            => $customer['address']['city'],
                'state'           => $customer['address']['state'],
                'country'         => 'TR',
                'postcode'        => $customer['address']['postcode'],
                'email'           => $customer['email'],
                'phone'           => $customer['phone'],
                'vat_id'          => null,
                'default_address' => 1,
                'created_at'      => $now,
                'updated_at'      => $now,
            ]);
        }
    }

    /**
     * Müşteri ID'lerini döndür.
     */
    public function getCustomerIds(): array
    {
        return $this->customerIds;
    }

    /**
     * JSON dosyasından müşteri verilerini yükle.
     */
    protected function loadCustomersFromJson(): void
    {
        $jsonPath = database_path('data/customers.json');

        if (!file_exists($jsonPath)) {
            throw new \RuntimeException('Müşteri veri dosyası bulunamadı: ' . $jsonPath);
        }

        $jsonContent = file_get_contents($jsonPath);
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Müşteri JSON dosyası okunamadı: ' . json_last_error_msg());
        }

        $this->customers = $data['customers'] ?? [];
        $this->defaultPassword = $data['default_password'] ?? 'Demo123!';
    }
}
