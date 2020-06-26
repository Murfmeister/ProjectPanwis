<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mahasiswa::class, 1000)->create();
    }
}
