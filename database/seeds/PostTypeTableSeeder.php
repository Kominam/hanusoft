<?php

use Illuminate\Database\Seeder;

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
             array('name'=>'Technology'),
             array('name'=>'Photo'),
             array('name'=>'Video'),
             array('name'=>'Design'),
             array('name'=>'Lifestyle')
        ]);
    }
}
