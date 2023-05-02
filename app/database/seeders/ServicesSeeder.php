<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            ['name' => 'Sublimation',]
            ['name' => 'Tarpaulin',]
            ['name' => 'Acrylic',]
            ['name' => 'Signage',]
            ['name' => 'Sticker',]
        ])
    }
}
