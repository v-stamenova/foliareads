<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Question;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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

        $user = User::factory()->create([
            'name' => 'Nikol Grueva',
            'email' => 'nikol@hz.nl',
            'password' => Hash::make('nikol123')
        ]);
        $user->assignRole('admin');

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

        $books = [
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen'],
            ['title' => 'Emma', 'author' => 'Jane Austen'],
            ['title' => 'Frankenstein', 'author' => 'Mary Shelley'],
            ['title' => 'Hard Times', 'author' => 'Charles Dickens'],
            ['title' => 'Treasure Island', 'author' => 'R.L. Stevenson'],
            ['title' => 'Dr Jekyll and Mr Hyde', 'author' => 'R.L. Stevenson'],
            ['title' => 'Alice\'s Adventures in Wonderland & Through the Looking Glass', 'author' => 'Lewis Carroll'],
            ['title' => 'The Life of Oscar Wilde', 'author' => 'Oscar Wilde'],
            ['title' => 'Tom Sawyer', 'author' => 'Mark Twain'],
            ['title' => 'Huckleberry Finn', 'author' => 'Mark Twain'],
            ['title' => 'The Awakening', 'author' => 'Kate Chopin'],
            ['title' => 'Mrs Dalloway', 'author' => 'Virginia Woolf'],
            ['title' => 'A Room With a View', 'author' => 'E.M. Forster'],
            ['title' => 'Maurice', 'author' => 'E.M. Forster'],
            ['title' => 'Howards End', 'author' => 'E.M. Forster'],
            ['title' => 'Where Angels Fear to Tread', 'author' => 'E.M. Forster'],
            ['title' => 'Brave New World', 'author' => 'Aldous Huxley'],
            ['title' => 'The Loved One', 'author' => 'Evelyn Waugh'],
            ['title' => 'Brideshead Revisited', 'author' => 'Evelyn Waugh'],
            ['title' => '1984', 'author' => 'George Orwell'],
            ['title' => 'The Quiet American', 'author' => 'Graham Greene'],
            ['title' => 'Lord of the Flies', 'author' => 'William Golding'],
            ['title' => 'A Clockwork Orange', 'author' => 'Anthony Burgess'],
            ['title' => 'Lucky Jim', 'author' => 'Kingsley Amis'],
            ['title' => 'Martha Quest', 'author' => 'Doris Lessing'],
            ['title' => 'Room at the Top', 'author' => 'John Braine'],
            ['title' => 'Saturday Night & Sunday Morning', 'author' => 'Alan Sillitoe'],
            ['title' => 'Heart of Darkness', 'author' => 'Joseph Conrad'],
            ['title' => 'The Thirty-nine Steps', 'author' => 'John Buchan'],
            ['title' => 'On the Beach', 'author' => 'Nevil Shute'],
            ['title' => 'The Country Girls', 'author' => 'Edna O\'Brien'],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
            ['title' => 'A Farewell to Arms', 'author' => 'Ernest Hemingway'],
            ['title' => 'The Sun Also Rises', 'author' => 'Ernest Hemingway'],
            ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger'],
            ['title' => 'If Beale Street Could Talk', 'author' => 'James Baldwin'],
            ['title' => 'Tortilla Flat', 'author' => 'John Steinbeck'],
            ['title' => 'On the Road', 'author' => 'Jack Kerouac'],
            ['title' => 'Breakfast at Tiffany\'s', 'author' => 'Truman Capote'],
            ['title' => 'The Electric Kool-Aid Acid Test', 'author' => 'Tom Wolfe']
            // ... add the rest of the books for 20th century American authors as in your table
        ];

        foreach ($books as $book) {
            Book::create([
                'title' => $book['title'],
                'author' => $book['author']
            ]);
        }
    }
}

