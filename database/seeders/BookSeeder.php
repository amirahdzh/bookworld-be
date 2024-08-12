<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        // // Create 50 books
        // Book::factory()->count(50)->create();

        Book::create(
            [
                'title' => 'The Dream',
                'summary' => "A young woman embarks on a journey to pursue her ultimate dream of becoming a world-renowned artist, facing personal and professional challenges along the way.",
                'stock' => 20,
                'category_id' => Category::where('name', 'Fiction')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-1.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'The Way of the Nameless',
                'summary' => "A mysterious warrior follows an ancient path to discover the secrets of his origins while confronting dark forces threatening his homeland.",
                'stock' => 8,
                'category_id' => Category::where('name', 'Fantasy')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-2.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'Lost Stars',
                'summary' => "In a distant galaxy, two star-crossed lovers from warring planets must navigate political intrigue and interstellar battles to save their love and their worlds.",
                'stock' => 55,
                'category_id' => Category::where('name', 'Science Fiction')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-3.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'Away',
                'summary' => "A man struggles to rebuild his life after a devastating personal loss, traveling to remote places in search of solace and self-discovery.",
                'stock' => 10,
                'category_id' => Category::where('name', 'Drama')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-4.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'The Fine Art of Small Talk',
                'summary' => "A practical guide that teaches readers how to master the skill of small talk to build better relationships and succeed in social and professional settings.",
                'stock' => 30,
                'category_id' => Category::where('name', 'Self-Help')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-5.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'Creative Business Startup',
                'summary' => "A step-by-step handbook for aspiring entrepreneurs looking to turn their creative ideas into successful businesses, with tips on innovation, marketing, and scaling.",
                'stock' => 3,
                'category_id' => Category::where('name', 'Business')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-6.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'Above Wilderness',
                'summary' => "An epic tale of survival and adventure as a group of explorers braves the harsh elements of a remote wilderness in search of an ancient treasure.",
                'stock' => 22,
                'category_id' => Category::where('name', 'Fantasy')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-7.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'The Game of Life',
                'summary' => "A philosophical exploration of the strategies and principles that govern success and happiness, using the metaphor of life as a complex, ever-changing game.",
                'stock' => 99,
                'category_id' => Category::where('name', 'Drama')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-8.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'A Year of Positive Thinking',
                'summary' => "A daily guide filled with motivational quotes, reflections, and exercises designed to help readers cultivate a positive mindset and improve their overall well-being.",
                'stock' => 20,
                'category_id' => Category::where('name', 'Self-Help')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-9.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'Left Alone',
                'summary' => "A suspenseful thriller where a woman is left isolated in a remote cabin, only to discover that she is not as alone as she thought, unraveling a web of dark secrets.",
                'stock' => 20,
                'category_id' => Category::where('name', 'Mystery')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-10.jpg'
            ]
        );
        Book::create(
            [
                'title' => 'Parallel Universe',
                'summary' => "A scientist's groundbreaking discovery of a parallel universe leads to extraordinary adventures and moral dilemmas, blurring the lines between reality and imagination.",
                'stock' => 38,
                'category_id' => Category::where('name', 'Science Fiction')->first()->id,
                'image' => 'http://localhost:8000/storage/images/book-11.jpg'
            ]
        );

    }
}

