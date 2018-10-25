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
        for($i=0;$i<1;$i++)
        {
            User::create([
                'name'=>'admin',
                'email'=> 'admin@gmail.com',
                'password'=>bcrypt('pantherhillapartment')
            ]);
        }

    }
}
