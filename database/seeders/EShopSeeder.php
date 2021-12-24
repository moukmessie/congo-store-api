<?php

namespace Database\Seeders;

use App\Models\stores;
use Illuminate\Database\Seeder;

class EShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        stores::factory(7)->create();
    }
}
