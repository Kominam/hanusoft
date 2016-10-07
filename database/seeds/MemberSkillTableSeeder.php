<?php

use Illuminate\Database\Seeder;

class MemberSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('skill_user')->insert([
             array('user_id'=>1, 'skill_id' =>1, 'level' => 75),
             array('user_id'=>1, 'skill_id' =>2, 'level' => 85),
             array('user_id'=>1, 'skill_id' =>3, 'level' => 65),
             array('user_id'=>1, 'skill_id' =>4, 'level' => 90),

             array('user_id'=>2, 'skill_id' =>1, 'level' => 75),
             array('user_id'=>2, 'skill_id' =>2, 'level' => 85),
             array('user_id'=>2, 'skill_id' =>3, 'level' => 65),
             array('user_id'=>2, 'skill_id' =>4, 'level' => 90),

             array('user_id'=>3, 'skill_id' =>1, 'level' => 75),
             array('user_id'=>3, 'skill_id' =>2, 'level' => 85),
             array('user_id'=>3, 'skill_id' =>3, 'level' => 65),
             array('user_id'=>3, 'skill_id' =>4, 'level' => 90),

             array('user_id'=>4, 'skill_id' =>1, 'level' => 75),
             array('user_id'=>4, 'skill_id' =>2, 'level' => 85),
             array('user_id'=>4, 'skill_id' =>3, 'level' => 65),
             array('user_id'=>4, 'skill_id' =>4, 'level' => 90),

             array('user_id'=>5, 'skill_id' =>1, 'level' => 75),
             array('user_id'=>5, 'skill_id' =>2, 'level' => 85),
             array('user_id'=>5, 'skill_id' =>3, 'level' => 65),
             array('user_id'=>5, 'skill_id' =>4, 'level' => 90),

             array('user_id'=>6, 'skill_id' =>1, 'level' => 75),
             array('user_id'=>6, 'skill_id' =>2, 'level' => 85),
             array('user_id'=>6, 'skill_id' =>3, 'level' => 65),
             array('user_id'=>6, 'skill_id' =>4, 'level' => 90),

             array('user_id'=>7, 'skill_id' =>1, 'level' => 75),
             array('user_id'=>7, 'skill_id' =>2, 'level' => 85),
             array('user_id'=>7, 'skill_id' =>3, 'level' => 65),
             array('user_id'=>7, 'skill_id' =>4, 'level' => 90),

             array('user_id'=>8, 'skill_id' =>1, 'level' => 75),
             array('user_id'=>8, 'skill_id' =>2, 'level' => 85),
             array('user_id'=>8, 'skill_id' =>3, 'level' => 65),
             array('user_id'=>8, 'skill_id' =>4, 'level' => 90),
        ]);
    }
}
