<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('post_types')->insert([
             array('name'=>'Technology','created_at' => Carbon::now(),'slug'=>'technology','updated_at' => Carbon::now()),
             array('name'=>'Photo','created_at' => Carbon::now(),'slug'=>'photo','updated_at' => Carbon::now()),
             array('name'=>'Video','created_at' => Carbon::now(),'slug'=>'video','updated_at' => Carbon::now()),
             array('name'=>'Design','created_at' => Carbon::now(),'slug'=>'design','updated_at' => Carbon::now()),
             array('name'=>'Lifestyle','created_at' => Carbon::now(),'slug'=>'lifestyle','updated_at' => Carbon::now())
        ]);
    }
}
