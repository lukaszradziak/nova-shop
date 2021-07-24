<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('app.env') !== 'local') {
            return $this->command->line('Wrong ENV');
        }

        $this->command->line('Creating Admin');
        User::create([
            'name' => 'admin', 
            'email' => 'admin@admin', 
            'password' => Hash::make('admin')
        ]);

        $this->command->line('Creating Products');
        Product::factory()->count(50)->create();
    }
}
