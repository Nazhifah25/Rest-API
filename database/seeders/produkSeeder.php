<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            produk::create([
                'nama_usaha' => $faker->sentence,
                'jenis' => $faker->sentence,
                'pemilik' => $faker->name,
            ]);
        }
    }
}
