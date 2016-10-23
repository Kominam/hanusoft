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
             array('project_id'=>1, 'img_name' =>'cms-1.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>1, 'img_name' =>'cms-2.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>1, 'img_name' =>'cms-3.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
         
             array('project_id'=>2, 'img_name' =>'book-1.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>2, 'img_name' =>'book-2.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>2, 'img_name' =>'book-3.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>3, 'img_name' =>'online-dating-1.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>3, 'img_name' =>'online dating-2.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>3, 'img_name' =>'online dating-3.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>4, 'img_name' =>'events-1.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>4, 'img_name' =>'events-2.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
          	 array('project_id'=>4, 'img_name' =>'event-3.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),

             array('project_id'=>5, 'img_name' =>'fit-portal-1.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('project_id'=>5, 'img_name' =>'fit-portal-2.jpg','created_at' => Carbon::now(),'updated_at' => Carbon::now()),


        ]);
    }
}
