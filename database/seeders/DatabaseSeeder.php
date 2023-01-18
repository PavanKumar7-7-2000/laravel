<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\listings;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create(
            [
                'name'=>'Pavan Kumar',
                'email'=>'mpavankumar00000@gmail.com'
            ]
        );

        listings::factory(6)->create(
            [
                'user_id'=>$user->id
            ]
        );        
        // listings::create([
        //     'title' => 'Flutter Developer',
        //     'tags' => 'Flutter Dart',
        //     'company' => 'Google',
        //     'location' => 'China',
        //     'website' => 'www.flutter.com',
        //     'email' => 'mpavankumar00000@gmail.com',
        //     'description' => 'I am a flutter developer'
        // ]);

        // listings::create([
        //     'title' => 'Web Developer',
        //     'tags' => 'Laravel JavaScript',
        //     'company' => 'Google',
        //     'location' => 'China',
        //     'website' => 'www.laravel.com',
        //     'email' => 'mpavankumar00000@gmail.com',
        //     'description' => 'I am a Web developer'
        // ]);
    }
}
