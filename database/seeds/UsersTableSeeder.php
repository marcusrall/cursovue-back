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
      factory(User::class,10)->create();

      factory(User::class)->create([
        'name' => 'Marcus Rogerio Almeida',
        'email' => 'marcus@email.com',
        'password' => bcrypt('marcus')
      ]);

    }
}
