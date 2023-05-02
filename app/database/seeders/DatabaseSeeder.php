<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

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
        ]);
        $this->production();
    }

    public function production() {
        Service::insert([
            ['name' => 'Sublimation'],
            ['name' => 'Tarpaulin'],
            ['name' => 'Acrylic'],
            ['name' => 'Signage'],
            ['name' => 'Sticker'],
        ]);

        $sublimation = Service::where('name', 'Sublimation')->first();
        $tarpaulin = Service::where('name', 'Tarpaulin')->first();
        $acrylic = Service::where('name', 'Acrylic')->first();
        $signage = Service::where('name', 'Signage')->first();
        $sticker = Service::where('name', 'Sticker')->first();

        $sublimation->products()->createMany([
            ['name' => 'Jersey Set', 'main_image_url' => '/assets/img/products/basketball_jersey.png', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'T-Shirt', 'main_image_url' => '/assets/img/products/basketball_jersey.png', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'Poloshirt', 'main_image_url' => '/assets/img/products/basketball_jersey.png', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'Longsleeves', 'main_image_url' => '/assets/img/products/sleeves.jpg', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'Longsleeves w/hood', 'main_image_url' => '/assets/img/products/sleeves.jpg', 'secondary_image_url' => '/assets/img/products/basketball_jersey.png', 'featured' => true],
            ['name' => 'Jacket', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Pants', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Tube Mask', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Armsleeves', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Pillow', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Drawstring Bag', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Lanyard', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Cap (Trucker Cap)', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
            ['name' => 'Mug', 'main_image_url' => '/assets/img/products/sleeves.jpg'],
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
