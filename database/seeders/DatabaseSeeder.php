<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        Role::create(['name' => 'admin']);
        Role::create(['name' => 'client']);

        Question::create(
            ['text' => 'Uit welke historische periode moet het boek zijn?',
                'type' => 'open']);
        Question::create(
            ['text' => 'Hoe lang moet het boek zijn?',
                'type' => 'open']);
        Question::create(
            ['text' => 'Hoe belangrijk is het om online informatie over het boek te hebben?',
                'type' => 'score']);
        Question::create(
            ['text' => 'Wat is jouw favoriete genre?',
                'type' => 'select']);
        Question::create(
            ['text' => 'Boeken die je eerder niet leuk vond en waarom?',
                'type' => 'open']);
    }
}
