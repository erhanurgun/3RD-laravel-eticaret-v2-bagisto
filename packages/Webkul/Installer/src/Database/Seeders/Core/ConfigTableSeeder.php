<?php

namespace Webkul\Installer\Database\Seeders\Core;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('core_config')->delete();

        $now = Carbon::now();

        DB::table('core_config')->insert([
            'id'           => 1,
            'code'         => 'sales.checkout.shopping_cart.allow_guest_checkout',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 2,
            'code'         => 'emails.general.notifications.emails.general.notifications.registration',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 3,
            'code'         => 'emails.general.notifications.emails.general.notifications.customer_registration_confirmation_mail_to_admin',
            'value'        => '0',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 4,
            'code'         => 'emails.general.notifications.emails.general.notifications.customer_account_credentials',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 5,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_order',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 6,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_order_mail_to_admin',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 7,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_invoice',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 8,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_invoice_mail_to_admin',
            'value'        => '0',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 9,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_refund',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 10,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_refund_mail_to_admin',
            'value'        => '0',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 11,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_shipment',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 12,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_shipment_mail_to_admin',
            'value'        => '0',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 13,
            'code'         => 'emails.general.notifications.emails.general.notifications.new_inventory_source',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 14,
            'code'         => 'emails.general.notifications.emails.general.notifications.cancel_order',
            'value'        => '1',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        DB::table('core_config')->insert([
            'id'           => 15,
            'code'         => 'emails.general.notifications.emails.general.notifications.cancel_order_mail_to_admin',
            'value'        => '0',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);

        // Locale bazlı header offer değerlerini ekle
        $defaultLocale = $parameters['default_locale'] ?? config('app.locale');
        $locales = $parameters['allowed_locales'] ?? [$defaultLocale];

        $id = 16;

        foreach ($locales as $locale) {
            DB::table('core_config')->insert([
                'id'           => $id++,
                'code'         => 'general.content.header_offer.title',
                'value'        => trans('installer::app.seeders.core.header-offer.title', [], $locale),
                'channel_code' => 'default',
                'locale_code'  => $locale,
                'created_at'   => $now,
                'updated_at'   => $now,
            ]);

            DB::table('core_config')->insert([
                'id'           => $id++,
                'code'         => 'general.content.header_offer.redirection_title',
                'value'        => trans('installer::app.seeders.core.header-offer.redirection-title', [], $locale),
                'channel_code' => 'default',
                'locale_code'  => $locale,
                'created_at'   => $now,
                'updated_at'   => $now,
            ]);
        }
    }
}
