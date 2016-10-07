<?php

use Illuminate\Database\Seeder;

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
             array('name'=>'HTML/CSSS'),
             array('name'=>'Design'),
             array('name'=>'WordPress'),
             array('name'=>'PHP'),
             array('name'=>'Yii'),
             array('name'=>'Laravel'),
             array('name'=>'.NET'),
        ]);
    }
}
