<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Role();
		$owner->name = 'owner';
		$owner->display_name = 'Project Owner'; // optional
		$owner->description = 'User is the owner of a given project'; // optional
		$owner->save();

		$admin = new Role();
		$admin->name = 'admin';
		$admin->display_name = 'User Administrator'; // optional
		$admin->description = 'User is allowed to manage and edit other users'; // optional
		$admin->save();		

		$member = new Role();
		$member->name = 'member';
		$member->display_name = 'User Member'; // optional
		$member->description = 'User is allowed to logged in'; // optional
		$member->save();
    }
}
