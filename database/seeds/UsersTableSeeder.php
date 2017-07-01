<?php

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$owner = Role::where('name', 'owner')->first();
		$admin = Role::where('name', 'admin')->first();
		$member = Role::where('name', 'member')->first();

        $user1 = new User();
		$user1->name = 'iwanna';
		$user1->email = 'iwanna@gmail.com';
		$user1->password = bcrypt('iwanna');
		$user1->save();        
		// attach Role
		$user1->attachRole($owner);

		$user2 = new User();
		$user2->name = 'trizal';
		$user2->email = 'trizal@gmail.com';
		$user2->password = bcrypt('trizal');
		$user2->save();  
		// attach Role
		$user2->attachRole($admin);		

		$user3 = new User();
		$user3->name = 'indah';
		$user3->email = 'indah@gmail.com';
		$user3->password = bcrypt('indah');
		$user3->save();  
		// attach Role
		$user3->attachRole($member);	

    }
}
