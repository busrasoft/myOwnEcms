<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                [
                    'settings_description' => 'Header',
                    'settings_key' => 'title',
                    'settings_value' => 'laravel ecms',
                    'settings_type' => 'text',
                    'settings_must' => 0,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Descripton',
                    'settings_key' => 'descripton',
                    'settings_value' => 'laravel ecms descripton',
                    'settings_type' => 'textarea',
                    'settings_must' => 1,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Logo',
                    'settings_key' => 'logo',
                    'settings_value' => 'logo.png',
                    'settings_type' => 'file',
                    'settings_must' => 2,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Icon',
                    'settings_key' => 'icon',
                    'settings_value' => 'icon.png',
                    'settings_type' => 'file',
                    'settings_must' => 3,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Anahtar Kelimeler',
                    'settings_key' => 'keywords',
                    'settings_value' => 'laravel7, ecms, software',
                    'settings_type' => 'text',
                    'settings_must' => 4,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Sabit Telefon',
                    'settings_key' => 'phone',
                    'settings_value' => '0850 xxx xx xx',
                    'settings_type' => 'text',
                    'settings_must' => 5,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'GSM Telefon',
                    'settings_key' => 'phone_gsm',
                    'settings_value' => '05xx xxx xx xx',
                    'settings_type' => 'text',
                    'settings_must' => 6,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Mail',
                    'settings_key' => 'mail',
                    'settings_value' => 'info@gmail.com',
                    'settings_type' => 'text',
                    'settings_must' => 7,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'District',
                    'settings_key' => 'district',
                    'settings_value' => 'Taksim',
                    'settings_type' => 'textarea',
                    'settings_must' => 8,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'City',
                    'settings_key' => 'city',
                    'settings_value' => 'Istanbul',
                    'settings_type' => 'text',
                    'settings_must' => 9,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Address',
                    'settings_key' => 'address',
                    'settings_value' => 'Istanbul, Taksim',
                    'settings_type' => 'ckeditor',
                    'settings_must' => 10,
                    'settings_delete' => '0',
                    'settings_status' => '1',
                ],
            ]
        );
    }
}
