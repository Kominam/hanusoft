<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('grades')->insert([
             array('name'=>'K10','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'K11','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'K12','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'K13','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'K14','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'K15','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'K16','created_at' => Carbon::now(),'updated_at' => Carbon::now())
        ]);
    }
}
