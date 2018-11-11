<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();

        $user = Role::create(['name' => 'administrator']);
        $user->givePermissionTo('laporan_manage');
		$user->givePermissionTo('user_manage');

		$user = Role::create(['name' => 'pelapor']);
		$user->givePermissionTo('laporan_manage');


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
