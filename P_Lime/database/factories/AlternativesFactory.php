<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alternatives>
 */
class AlternativesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'                      =>fake()->name(),
            'jumlah_usia_produktif'     =>fake()->numberBetween(1,10),
            'jumlah_anggota_keluarga'   =>fake()->numberBetween(1.10),
            'kondisi_rumah'             =>fake()->numberBetween(1,10),
            'jumlah_kk'                 =>fake()->numberBetween(1,2),
            'pendapatan_total'          =>fake()->numberBetween(1,30) * 100000,
        ];
    }
}
