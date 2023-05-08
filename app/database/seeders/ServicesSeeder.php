<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Helpers\Slugger;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Sublimation',
            'Tarpaulin',
            'Acrylic',
            'Signage',
            'Sticker'
        ];
        
        foreach ($services as $service) {
            Service::create([ 'name' => $service, 'slug' =>  Slugger::makeSlug($service)]);
        }
    }
}
