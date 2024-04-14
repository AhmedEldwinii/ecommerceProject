<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'type' => 'admin',
        ]);


        User::factory(10)->create(
            [
                'type' => 'user',
            ]
            );

            
        Category::factory(20)->create([
            'parent_id' => '0',
        ]);
    }
}
