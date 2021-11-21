<?php

namespace Database\Seeders;

use App\Models\ProductVerity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ProductVerityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pverity_names = [
            'Respiratory',
            'Suction Therapy',
            'Aerosal Therapy',
            'CPAP Therapy',
            'Ventilation Therapy',
            'Diagnostiscs'
        ];

        
        for($i=0; $i<6; $i++){
            $data = [
                'name' => $pverity_names[$i],
                'publish'=>1,
                'user_id'=>1
            ];
            ProductVerity::create($data);
        }
        
    }
}
