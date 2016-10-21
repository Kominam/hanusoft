<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projectimages')->insert([
             array('project_id'=>1, 'img_name' =>'project.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>1, 'img_name' =>'project-1.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>1, 'img_name' =>'project-2.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
         
             array('project_id'=>2, 'img_name' =>'project-2.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>2, 'img_name' =>'project-3.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>2, 'img_name' =>'project-4.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>3, 'img_name' =>'project-3.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>3, 'img_name' =>'project-4.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>3, 'img_name' =>'project-5.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>4, 'img_name' =>'project-4.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>4, 'img_name' =>'project-5.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>4, 'img_name' =>'project-6.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>5, 'img_name' =>'project-5.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>5, 'img_name' =>'project-6.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>5, 'img_name' =>'project-7.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),


        ]);
    }
}
