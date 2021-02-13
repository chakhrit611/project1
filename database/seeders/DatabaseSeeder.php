<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $User = new User();
        $User->name = "chakhrit";
        $User->username = "admi";
        $User->email = "61123809@g.cmru.ac.th";
        $User->password = Hash::make("1234");
        $User->save();
    }
}
