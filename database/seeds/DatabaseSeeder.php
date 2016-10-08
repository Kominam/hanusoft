<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(PositionTableSeeder::class);
      $this->call(MemberTableSeeder::class);
  		$this->call(SkillTableSeeder::class);
  		$this->call(MemberSkillTableSeeder::class);
  		$this->call(ProjectTypeTableSeeder::class);
  		$this->call(ProjectTableSeeder::class);
  		$this->call(ProjectSkillTableSeeder::class);
  		$this->call(ProjectImageTableSeeder::class);
    	$this->call(MemberProjectTableSeeder::class);
    	$this->call(PostTypeTableSeeder::class);
      $this->call(PostTableSeeder::class);
    	$this->call(PostTypeTableSeeder::class);
    }
}
