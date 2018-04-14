<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		for($i = 1; $i <= 10;$i++)
		{
            // admin
			if($i==1){
				DB::table('users')->insert(
					[
						'username' => 'User_'.$i,
						'email' => 'ptdat'.$i.'@gmail.com',
						'password' => bcrypt('123456'),
						'fullname' =>'ptdat'.$i,
						'quyen'=> 2,
						'created_at' => new DateTime(),
					]
				);
            }else if($i%3==0){  // tuyển dụng
            	DB::table('users')->insert(
            		[
            			'username' => 'User_'.$i,
            			'email' => 'ptdat'.$i.'@gmail.com',
            			'password' => bcrypt('123456'),
            			'fullname' =>'ptdat'.$i,
            			'quyen'=> 1,
            			'created_at' => new DateTime(),
            		]
            	);
            }else{ // user thường
            	DB::table('users')->insert(
            		[
            			'username' => 'User_'.$i,
            			'email' => 'ptdat'.$i.'@gmail.com',
            			'password' => bcrypt('123456'),
            			'fullname' =>'ptdat'.$i,
            			'quyen'=> 0,
            			'created_at' => new DateTime(),
            		]
            	);
            }
        }
    }
}
