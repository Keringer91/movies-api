<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        App\User::create(['name' => 'Test Tester', 'email' => 'admin@admin.com', 'password' => bcrypt('admin')]);
    }
}
