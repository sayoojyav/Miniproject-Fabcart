<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name'     => 'Sayoojya',            
            'email'    => 'sayoojya+admin@gmail.com',
            'password' => \Hash::make('test123456'),            
            'role_as'     => 'Admin',
            
                        
        ]);
        \App\Models\User::create([
            'name' => 'sayoojya',           
            'email'    => 'sayoojya+user@gmail.com',
            'password' => \Hash::make('test123456'),            
            'role_as'     => 'vendor',
        ]);
        \App\Models\Group::create([
            'name' => 'Electronics',
            'url' => 'electronics',
            'description' => 'This is small description of electronic items'
        ]);
        \App\Models\Group::create([
            'name' => 'Men',
            'url' => 'men',
            'description' => 'This is small description about men'
        ]);
        \App\Models\Group::create([
            'name' => 'Women',
            'url' => 'women',
            'description' => 'This is small description about women'

        ]);
        \App\Models\Category::create([
            'group_id' =>'1',
            'name' => 'Mobile',
            'url' => 'mobile',
            'description' => 'This is small description about mobile'
        ]);
        \App\Models\Category::create([
            'group_id' =>'2',
            'name' => 'shirt',
            'url' => 'shirt',
            'description' => 'This is small description about shirt'
        ]);
        \App\Models\Category::create([
            'group_id' =>'3',
            'name' => 'Saree',
            'url' => 'saree',
            'description' => 'This is small description about saree'
        ]);
    }
}
