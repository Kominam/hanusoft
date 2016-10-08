<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
             array('name'=>'Website','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Application','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Brand','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Logo','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
        ]);
    }
}
