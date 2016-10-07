<?php

use Illuminate\Database\Seeder;

class ProjectTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('projecttypes')->insert([
             array('name'=>'Website'),
             array('name'=>'Application'),
             array('name'=>'Brand'),
             array('name'=>'Logo'),
        ]);
    }
}
