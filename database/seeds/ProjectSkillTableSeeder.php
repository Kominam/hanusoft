<?php

use Illuminate\Database\Seeder;

class ProjectSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('project_skill')->insert([
             array('project_id'=>1, 'skill_id' =>1),
             array('project_id'=>1, 'skill_id' =>2),
             array('project_id'=>1, 'skill_id' =>3),
             array('project_id'=>1, 'skill_id' =>4),

             array('project_id'=>2, 'skill_id' =>1),
             array('project_id'=>2, 'skill_id' =>2),
             array('project_id'=>2, 'skill_id' =>3),
             array('project_id'=>2, 'skill_id' =>4),

             array('project_id'=>3, 'skill_id' =>1),
             array('project_id'=>3, 'skill_id' =>2),
             array('project_id'=>3, 'skill_id' =>3),
             array('project_id'=>3, 'skill_id' =>4),

             array('project_id'=>4, 'skill_id' =>1),
             array('project_id'=>4, 'skill_id' =>2),
             array('project_id'=>4, 'skill_id' =>3),
             array('project_id'=>4, 'skill_id' =>4),

             array('project_id'=>5, 'skill_id' =>1),
             array('project_id'=>5, 'skill_id' =>2),
             array('project_id'=>5, 'skill_id' =>3),
             array('project_id'=>5, 'skill_id' =>4),

             array('project_id'=>6, 'skill_id' =>1),
             array('project_id'=>6, 'skill_id' =>2),
             array('project_id'=>6, 'skill_id' =>3),
             array('project_id'=>6, 'skill_id' =>4),

             array('project_id'=>7, 'skill_id' =>1),
             array('project_id'=>7, 'skill_id' =>2),
             array('project_id'=>7, 'skill_id' =>3),
             array('project_id'=>7, 'skill_id' =>4),

             array('project_id'=>8, 'skill_id' =>1),
             array('project_id'=>8, 'skill_id' =>2),
             array('project_id'=>8, 'skill_id' =>3),
             array('project_id'=>8, 'skill_id' =>4),

             array('project_id'=>9, 'skill_id' =>1),
             array('project_id'=>9, 'skill_id' =>2),
             array('project_id'=>9, 'skill_id' =>3),
             array('project_id'=>9, 'skill_id' =>4),

             array('project_id'=>10, 'skill_id' =>1),
             array('project_id'=>10, 'skill_id' =>2),
             array('project_id'=>10, 'skill_id' =>3),
             array('project_id'=>10, 'skill_id' =>4)
        ]);
    }
}
