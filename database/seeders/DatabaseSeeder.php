<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Wahid Hasyim',
            'email' => 'Wahidaja862@gmail.com',
            'password' => bcrypt('Hiwahid'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730143',
            'tgl' => '2023-11-22',            
        ]);
        User::create([
            'name' => 'rini',
            'email' => 'riniaini@gmail.com',
            'password' => bcrypt('rini123'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730111',
            'tgl' => '2023-11-22',            
        ]);
    }
}
