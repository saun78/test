<?php

namespace Database\Seeders;

use App\Models\products;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        products::create([
            "p_name"=>'brocoli',
            "p_mass"=>'100',
            "p_price"=>'3.00',
        ]);
        products::create([
            "p_name"=>'tomato',
            "p_mass"=>'100',
            "p_price"=>'4.00',
        ]);
        products::create([
            "p_name"=>'apple',
            "p_mass"=>'100',
            "p_price"=>'3.00',
        ]);

        products::create([
            "p_name"=>'brocoli',
            "p_mass"=>'100',
            "p_price"=>'3.00',
        ]);      
        products::create([
            "p_name"=>'orange',
            "p_mass"=>'100',
            "p_price"=>'3.00',
        ]);      
    }
}
