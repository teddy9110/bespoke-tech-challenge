<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory([
            'email' => 'ross.steele@huler.io',
            'admin' => true,
        ])->create();

        User::factory([
            'email' => 'ash.shenton@huler.io'
        ])->create();

        User::factory([
            'email' => 'chris.hynda@huler.io'
        ])->create();

    }
}
