<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Alternatives;
use App\Models\Bansos;

use App\Models\Iuran;
use App\Models\Kk;
use App\Models\laporan;
use App\Models\Organisasi;
use App\Models\Rt;
use App\Models\Rumah;
use App\Models\User;
use App\Models\Acara;
use App\Models\Expenditure;
use App\Models\Income;
use App\Models\umkm;
use App\Models\Warga;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Warga::factory(10)->create();
        User::factory(10)->create();
        umkm::factory(4)->create();
        Acara::factory(6)->create();
        Kk::factory(6)->create();
        Iuran::factory(30)->create();
        Alternatives::factory(50)->create();
        Bansos::factory(10)->create();
        Rt::factory(5)->create();
        Rumah::factory(5)->create();
        laporan::factory(4)->create();
        Organisasi::factory(5)->create();

        $this->call(CriteriaSeeder::class);




    }
}
