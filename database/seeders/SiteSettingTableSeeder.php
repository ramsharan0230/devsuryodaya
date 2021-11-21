<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetting::create([
            'site_name'=>'Suryodaya Inc',
            'email'=>'info@suryodaya.com',
            'landline'=>'01 0123456',
            'mobile'=>'0123456789',
            'address' => 'Krishna Galli, Pulchowk, Lalitpur',
            'location'=>'The Current Address, Kathmandu 44600',
            'location_url'=>'https://maps.google.com/maps?q=suryodaya%20bean&t=&z=13&ie=UTF8&iwloc=&output=embed',
            'facebook' =>'https://www.facebook.com/suryodaya/',
            'map'=>'https://maps.google.com/maps?q=suryodaya%20bean&t=&z=13&ie=UTF8&iwloc=&output=embed',
            'twiter' =>'https://twitter.com/suryodaya',
            'instagram' =>'',
            'customer_care_phone' =>'',
            'customer_care_email' =>'',
            'logo' =>'',
            'service_banner1' =>'',
            'service_banner2' =>'',
            'service_banner3' =>'',
            'publish'=>1
        ]);

        DB::table('seo_site_settings')->insert([
            'meta_title'=>'Suryodaya inc',
            'meta_description' => 'Suryodaya Inc',
            'meta_phrase' => 'Suryodaya Inc',
            'keyword'=> 'Suryodaya Inc',
            'publish'=> 1
        ]);
    }
}
