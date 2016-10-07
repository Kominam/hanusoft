<?php

use Illuminate\Database\Seeder;

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
             array('user_id'=>1, 'project_id'=>1),
             array('user_id'=>1, 'project_id'=>2),
             array('user_id'=>1, 'project_id'=>3),
             array('user_id'=>1, 'project_id'=>4),
         	
         	 array('user_id'=>2, 'project_id'=>5),
             array('user_id'=>2, 'project_id'=>6),
             array('user_id'=>2, 'project_id'=>7),
             array('user_id'=>2, 'project_id'=>8),

             array('user_id'=>3, 'project_id'=>9),
             array('user_id'=>3, 'project_id'=>10),
             array('user_id'=>3, 'project_id'=>1),
             array('user_id'=>3, 'project_id'=>2),

             array('user_id'=>4, 'project_id'=>3),
             array('user_id'=>4, 'project_id'=>4),
             array('user_id'=>4, 'project_id'=>5),
             array('user_id'=>4, 'project_id'=>6),

             array('user_id'=>5, 'project_id'=>7),
             array('user_id'=>5, 'project_id'=>8),
             array('user_id'=>5, 'project_id'=>9),
             array('user_id'=>5, 'project_id'=>10),

             array('user_id'=>6, 'project_id'=>1),
             array('user_id'=>6, 'project_id'=>2),
             array('user_id'=>6, 'project_id'=>3),
             array('user_id'=>6, 'project_id'=>4),

             array('user_id'=>7, 'project_id'=>5),
             array('user_id'=>7, 'project_id'=>6),
             array('user_id'=>7, 'project_id'=>7),
             array('user_id'=>7, 'project_id'=>8),

             array('user_id'=>8, 'project_id'=>9),
             array('user_id'=>8, 'project_id'=>10),
             array('user_id'=>8, 'project_id'=>1),
             array('user_id'=>8, 'project_id'=>2)
            
        ]);
    }
}
