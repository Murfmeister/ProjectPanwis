<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(Mahasiswa::class, function (Faker $faker) {
    return [
        'Nama' => $faker->name,
        'Kelas' => $faker->randomElement(['5-01', '5-02','5-03','5-04','5-06','5-07',
        '5-08','5-09','5-10',]),
        'Program_Studi' => $faker->randomElement(['D-III Akuntansi','D-III Akuntansi','D-III Penilai','D-III Pajak','D-III Bea Cukai',
        'D-III Kebendaharaan Negara', 'D-III Manajemen Aset']),
        'NPM' => $faker->randomElement(['1302191612', '4301190017', '3301190099', '130290545','2301190339', '430219010', '2301190373',
        '1302191634', '4301196543', '3301190079', '130290644','2301190398', '430281007', '2301190373']),
    ];
});
