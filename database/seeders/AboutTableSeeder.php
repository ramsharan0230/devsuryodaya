<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
use Illuminate\Support\Facades\DB;


class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title'=>'Voluptatem dignissimos provident quasi',
            'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
            'main_description'=>'Headquartered in Port Washington, New York, Drive DeVilbiss Healthcare manufactures a complete 
                line of medical products, including mobility products, sleep and respiratory products, beds, bariatric products, wheelchairs, sleep surfaces and pressure prevention products, self-assist products, power operated wheelchairs, rehabilitation products, patient room equipment, personal care products and Mobility electrotherapy devices. Currently, the Company has corporate offices, manufacturing facilities and distribution facilities located throughout the United States, Canada, the United Kingdom, France, Germany, Romania, the Netherlands, China, Hong Kong, India and Australia. The Company markets its products to customers located throughout the United States, Canada, 
                Mexico, Central and South America, Europe, the Middle East, Asia and Australia. For more information, www.drivemedical.com.',
            'background_image'=>'about-us.jpg',
            'main_image' => 'about.jpg',
            'first_icon_title'=>'Corporis voluptates sit',
            'first_icon_description'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
            'second_icon_title' =>'Ullamco laboris nisi',
            'second_icon_description'=>'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt',
            'third_icon_title' =>'Labore consequatur',
            'third_icon_description' =>'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere',
            'fourth_icon_title' =>'Beatae veritatis',
            'fourth_icon_description' =>'Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta',
            'about_title' =>'About Drive Suryodaya Healthcare',
            'seo_title' =>'Voluptatem dignissimos provident quasi',
            'seo_short_description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'seo_main_description' =>'Headquartered in Port Washington, New York, Drive DeVilbiss Healthcare manufactures a complete 
            line of medical products, including mobility products, sleep and respiratory products, beds, bariatric products, wheelchairs, sleep surfaces and pressure prevention products, self-assist products, power operated wheelchairs, rehabilitation products, patient room equipment, personal care products and Mobility electrotherapy devices. Currently, the Company has corporate offices, manufacturing facilities and distribution facilities located throughout the United States, Canada, the United Kingdom, France, Germany, Romania, the Netherlands, China, Hong Kong, India and Australia. The Company markets its products to customers located throughout the United States, Canada, 
            Mexico, Central and South America, Europe, the Middle East, Asia and Australia. For more information, www.drivemedical.com.',
            'seo_about_title'=>'About Drive Suryodaya Healthcare',
            'publish'=>1
        ]);
    }
}
