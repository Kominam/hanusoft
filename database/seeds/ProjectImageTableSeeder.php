<?php

use Illuminate\Database\Seeder;

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
             array('project_id'=>1, 'img_name' =>'project.jpg'),
             array('project_id'=>1, 'img_name' =>'project-1.jpg'),
          	 array('project_id'=>1, 'img_name' =>'project-2.jpg'),
         
             array('project_id'=>2, 'img_name' =>'project-2.jpg'),
             array('project_id'=>2, 'img_name' =>'project-3.jpg'),
          	 array('project_id'=>2, 'img_name' =>'project-4.jpg'),

             array('project_id'=>3, 'img_name' =>'project-3.jpg'),
             array('project_id'=>3, 'img_name' =>'project-4.jpg'),
          	 array('project_id'=>3, 'img_name' =>'project-5.jpg'),

             array('project_id'=>4, 'img_name' =>'project-4.jpg'),
             array('project_id'=>4, 'img_name' =>'project-5.jpg'),
          	 array('project_id'=>4, 'img_name' =>'project-6.jpg'),

             array('project_id'=>5, 'img_name' =>'project-5.jpg'),
             array('project_id'=>5, 'img_name' =>'project-6.jpg'),
          	 array('project_id'=>5, 'img_name' =>'project-7.jpg'),

             array('project_id'=>6, 'img_name' =>'project-6.jpg'),
             array('project_id'=>6, 'img_name' =>'project-7.jpg'),
          	 array('project_id'=>6, 'img_name' =>'project-2.jpg'),


             array('project_id'=>7, 'img_name' =>'project-7.jpg'),
             array('project_id'=>7, 'img_name' =>'project-3.jpg'),
          	 array('project_id'=>7, 'img_name' =>'project-4.jpg'),


          	 array('project_id'=>8, 'img_name' =>'project.jpg'),
             array('project_id'=>8, 'img_name' =>'project-7.jpg'),
          	 array('project_id'=>8, 'img_name' =>'project-1.jpg'),


             array('project_id'=>9, 'img_name' =>'project-3.jpg'),
             array('project_id'=>9, 'img_name' =>'project-2.jpg'),
          	 array('project_id'=>9, 'img_name' =>'project-5.jpg'),


             array('project_id'=>10, 'img_name' =>'project-5.jpg'),
             array('project_id'=>10, 'img_name' =>'project-3.jpg'),
          	 array('project_id'=>10, 'img_name' =>'project-6.jpg'),

        ]);
    }
}
