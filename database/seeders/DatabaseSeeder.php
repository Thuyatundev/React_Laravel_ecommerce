<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Supplier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('password'),
        ]);

        Admin::create([
            'name'=> 'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password'),
        ]);

        $category = ['T shirt','Hat','Electronic','Laptop','Mobile'];
        foreach( $category as $c){
            Category::create([
                'slug'=>Str::slug($c),
                'name'=>$c
            ]);
        }

        $brand = ['Samsaung','Apple','Hwawei'];
        foreach( $brand as $c){
            Category::create([
                'slug'=>Str::slug($c),
                'name'=>$c
            ]);
        }

        $color = ['red','green','blue','black','white'];
        foreach( $color as $c){
            Category::create([
                'slug'=>Str::slug($c),
                'name'=>$c
            ]);
        }

        Supplier::create([
            'name'=>'mgmg',
            'image'=>'supplier.png',
            'description'=>'testing'
        ]);

    }
}
