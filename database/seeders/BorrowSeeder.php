<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BorrowSeeder extends Seeder
{
    public function run()
    {
        // Get IDs for books and users from the database
        $bookIds = \App\Models\Book::pluck('id')->toArray();
        $userIds = \App\Models\User::whereDoesntHave('role', function ($query) {
            $query->where('name', 'owner');
        })->pluck('id')->toArray(); // Fetch user IDs excluding those with role 'owner'

        // Add a specific record first
        $specificBookId = $bookIds[array_rand($bookIds)];
        $specificUserId = $userIds[array_rand($userIds)]; // Ensure the user is not an 'owner'

        if (!$this->entryExists($specificBookId, $specificUserId)) {
            DB::table('borrows')->insert([
                'id' => Str::uuid(),
                'borrow_date' => Carbon::create(2024, 7, 20), // Specific borrow date
                'return_date' => Carbon::create(2024, 8, 1),  // Specific return date
                'book_id' => $specificBookId,
                'user_id' => $specificUserId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Define a number of records to create
        $numberOfRecords = 4;

        // Seed the borrow table with random data
        $uniquePairs = [];

        foreach (range(1, $numberOfRecords) as $index) {
            do {
                $bookId = $bookIds[array_rand($bookIds)];
                $userId = $userIds[array_rand($userIds)];
                $pair = "{$bookId}-{$userId}";
            } while (in_array($pair, $uniquePairs) || $this->entryExists($bookId, $userId));

            $uniquePairs[] = $pair;

            DB::table('borrows')->insert([
                'id' => Str::uuid(), // Generate a UUID
                'return_date' => Carbon::now()->addDays(rand(1, 30)), // Random return date within the next 30 days
                'borrow_date' => Carbon::now()->subDays(rand(1, 30)), // Random borrow date within the last 30 days
                'book_id' => $bookId, // Randomly pick a book ID
                'user_id' => $userId, // Randomly pick a user ID
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function entryExists($bookId, $userId)
    {
        return DB::table('borrows')
            ->where('book_id', $bookId)
            ->where('user_id', $userId)
            ->exists();
    }
}
