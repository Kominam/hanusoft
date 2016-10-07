<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('positions')->insert([
             array('name'=>'Leadership'),
             array('name'=>'Design'),
             array('name'=>'Development'),
             array('name'=>'Tester')
        ]);
    }
}
