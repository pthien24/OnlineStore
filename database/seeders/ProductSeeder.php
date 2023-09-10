<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            $image = $faker->image(storage_path('app\public'), 400, 300, null, false);
            $imageName = basename($image);

            DB::table('products')->insert([
                'name' => $this->generateProductName($faker),
                'description' => $faker->paragraph,
                'image' => $imageName,
                'price' => $faker->numberBetween(100, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Generate a custom product name.
     *
     * @param \Faker\Generator $faker
     * @return string
     */
    private function generateProductName($faker)
    {
        $prefixes = ["FlexiGuard Case",
                    "PowerCharge Wireless Charger",
                    "SnapShield Screen Protector",
                    "SoundWave Bluetooth Earbuds",
                    "GripMaster Phone Stand",
                    "ClearView Phone Case",
                    "UltraSlim Phone Wallet",
                    "PowerBoost Portable Battery Pack",
                    "PhotoPro Phone Lens Kit",
                    "MultiTasker Phone Mount","AeroCool RGB Gaming Keyboard",
                    "SwiftMouse Wireless Mouse",
                    "CrystalClear Monitor Stand",
                    "ProType Mechanical Keyboard",
                    "PixelPerfect Graphics Tablet",
                    "TurboCool Laptop Cooling Pad",
                    "DataGuard Webcam Cover",
                    "LinkSync Cable Management Kit",
                    "ComfortView Anti-Glare Screen Filter",
                    "TechFlex Cable Organizer"];

        $prefix = $faker->randomElement($prefixes);
        return "{$prefix}";
    }
}
