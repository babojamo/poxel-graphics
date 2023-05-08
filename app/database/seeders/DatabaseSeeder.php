<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Helpers\Slugger;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class
            ServicesSeeder::class,
        ]);
        $this->production();
    }

    public function production() {

        $sublimation = Service::where('name', 'Sublimation')->first();
        $tarpaulin = Service::where('name', 'Tarpaulin')->first();
        $acrylic = Service::where('name', 'Acrylic')->first();
        $signage = Service::where('name', 'Signage')->first();
        $sticker = Service::where('name', 'Sticker')->first();

        $sublimation->products()->createMany([
            ['name' => 'Jersey Set', 'slug' => Slugger::makeSlug('Jersey Set'), 'main_image_url' => '/assets/img/products/basketball_jersey.png', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'T-Shirt', 'slug' => Slugger::makeSlug('T-Shirt'), 'main_image_url' => '/assets/img/products/basketball_jersey.png', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'Poloshirt', 'slug' => Slugger::makeSlug('Poloshirt'),  'main_image_url' => '/assets/img/products/basketball_jersey.png', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'Longsleeves', 'slug' => Slugger::makeSlug('Longsleeves'),  'main_image_url' => '/assets/img/products/sleeves.jpg', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'Longsleeves w/hood', 'slug' => Slugger::makeSlug('Longsleeves w/hood'),  'main_image_url' => '/assets/img/products/sleeves.jpg', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'Jacket', 'slug' => Slugger::makeSlug('Jacket'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Pants', 'slug' => Slugger::makeSlug('Pants'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Tube Mask', 'slug' => Slugger::makeSlug('Tube Mask'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Armsleeves', 'slug' => Slugger::makeSlug('Armsleeves'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Pillow', 'slug' => Slugger::makeSlug('Pillow'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Drawstring Bag', 'slug' => Slugger::makeSlug('Drawstring Bag'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Lanyard', 'slug' => Slugger::makeSlug('Lanyard'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Cap (Trucker Cap)', 'slug' => Slugger::makeSlug('Cap (Trucker Cap)'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Mug', 'slug' => Slugger::makeSlug('Mug'),  'main_image_url' => '/assets/img/products/sleeves.jpg'],
        ]);

        $tarpaulin->products()->createMany([
            ['name' => 'Tarpaulin', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'main_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
        ]);

        $acrylic->products()->createMany([
            ['name' => 'Acrylic', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'main_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
        ]);

        $signage->products()->createMany([
            ['name' => 'Signage', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'main_image_url' => '/assets/img/products/sleeves.jpg', 'featured' => true],
        ]);

        $sticker->products()->createMany([
            ['name' => 'Sticker', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'main_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
        ]);
    }
}
