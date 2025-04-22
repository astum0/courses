<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'Леночка',
                'email' => 'LenochkaExrt@gmail.com',
                'telegram' => '@lenochkaexrt',
                'message' => 'Фиолетовый OTKROI SVOI ROT',
                'status' => 'cancel'
            ],
            [
                'name' => 'Натаха',
                'email' => 'NatahaWex',
                'telegram' => '@NatahaWex',
                'message' => 'HelloGays',
                'status' => 'waiting'
            ],
            [
                'name' => 'Дристун Дристуныч',
                'email' => 'dristun228@gmail.com',
                'telegram' => '@dristan',
                'message' => null,
                'status' => 'waiting'
            ],
        ];
    }
}
