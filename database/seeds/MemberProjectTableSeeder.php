<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('project_user')->insert([
             array('user_id'=>1, 'project_id'=>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>1, 'project_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>1, 'project_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>1, 'project_id'=>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>1, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
         	
         	 array('user_id'=>2, 'project_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>2, 'project_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>2, 'project_id'=>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>2, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>3, 'project_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>3, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>4, 'project_id'=>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>5, 'project_id'=>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>5, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>6, 'project_id'=>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>6, 'project_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>6, 'project_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>7, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>8, 'project_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>8, 'project_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>8, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>9, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

            array('user_id'=>10, 'project_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>10, 'project_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>10, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

              array('user_id'=>11, 'project_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>11, 'project_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>11, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>12, 'project_id'=>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>12, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('user_id'=>13, 'project_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('user_id'=>13, 'project_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
            
        ]);
    }
}
