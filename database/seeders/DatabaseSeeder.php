<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(20)->create();

        $user = User::find(1);
        if ($user) {
            $user->update([
                'name' => 'Leo',
                'email' => 'leo@email.com',
            ]);
        } else {
            // Optionally, create a new User if it doesn't exist
            User::create([
                'name' => 'Leo',
                'email' => 'leo@email.com',
                // Add other necessary fields here
            ]);
        }
    }
}
