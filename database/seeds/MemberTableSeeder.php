<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
             array('name'=>'John Doe','email'=>'johndoe@gmail.com','password' =>bcrypt('123456'),'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>1,'url_avt'=>'team-1.jpg'),
             array('name'=>'Melinda Wolosky','email'=>'melindawolosky@gmail.com','password' =>bcrypt('123456'),'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>2,'url_avt'=>'team-4.jpg'),
              array('name'=>'Rick Eward Doe','email'=>'rikewarddoe@gmail.com','password' =>bcrypt('123456'),'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'url_avt'=>'team-3.jpg'),
              array('name'=>'Robert Doe','email'=>'robertdoe@gmail.com','password' =>bcrypt('123456'),'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'url_avt'=>'team-5.jpg'),
              array('name'=>'Will Doe','email'=>'willdoe@gmail.com','password' =>bcrypt('123456'),'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'url_avt'=>'team-7.jpg'),
              array('name'=>'Jerry Doe','email'=>'jerrydoe@gmail.com','password' =>bcrypt('123456'),'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'url_avt'=>'team-8.jpg'),
               array('name'=>'Jessica Doe','email'=>'jessicadoe@gmail.com','password' =>bcrypt('123456'),'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>4,'url_avt'=>'team-2.jpg'),
                array('name'=>'Mellisa Doe','email'=>'mellisadoe@gmail.com','password' =>bcrypt('123456'),'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>4,'url_avt'=>'team-6.jpg'),
        ]);
    }
}
