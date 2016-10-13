<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
             array('project_id'=>1, 'skill_id' =>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>1, 'skill_id' =>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>1, 'skill_id' =>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>2, 'skill_id' =>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>2, 'skill_id' =>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>2, 'skill_id' =>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('project_id'=>2, 'skill_id' =>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>3, 'skill_id' =>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>3, 'skill_id' =>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>3, 'skill_id' =>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>3, 'skill_id' =>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>4, 'skill_id' =>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>4, 'skill_id' =>8,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>5, 'skill_id' =>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>5, 'skill_id' =>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>5, 'skill_id' =>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),

        ]);
    }
}
