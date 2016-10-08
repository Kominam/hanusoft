<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skills')->insert([
             array('name'=>'HTML/CSSS','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Design','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'WordPress','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'PHP','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Yii','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Laravel','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'.NET','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
        ]);
    }
}
