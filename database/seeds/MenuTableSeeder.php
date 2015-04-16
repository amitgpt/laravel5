<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MenuTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 //refresh users
		DB::table('menu')->truncate();
		$menuItem=array(
				
					array(
						'id'			=>  '1',
						'menu_name'		=>	'Home',
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						),
					array(
						'id'			=>  '2',
						'menu_name'		=>	'About',
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						),
					array(
						'id'			=>  '3',
						'menu_name'		=>	'Sample Post',
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						),
					array(
						'id'			=>  '4',
						'menu_name'		=>	'Contact',
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						)
			);
		  DB::table('menu')->insert($menuItem);
	}

}
