<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	 DB::table('positions')->insert([
             array('name'=>'Leadership','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Design','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Development','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Tester','created_at' => Carbon::now(),'updated_at' => Carbon::now())
        ]);
    }
}
