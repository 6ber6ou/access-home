<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
	{

    public function run()
	    {

		DB::table( 'roles' )->delete();

	    // ------------------------------------------------------------

		DB::table( 'roles' )->insert(
			[

			'slug'				=>		'admin',
			'name'				=>		trans( 'webpage-text.role-1' ),
			'created_at'		=>		new \DateTime,
			'updated_at'		=>		new \DateTime

			] );

	    // ------------------------------------------------------------

		DB::table( 'roles' )->insert(
			[

			'slug'		=>		'user',
			'name'		=>		trans( 'webpage-text.role-2' ),
			'created_at'		=>		new \DateTime,
			'updated_at'		=>		new \DateTime

			] );

	    }

	}
