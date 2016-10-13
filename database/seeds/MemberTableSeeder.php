<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
             array('name'=>'Cong NV','email'=>'congnv@gmail.com','gender'=>1,'password' =>bcrypt('123456'),'bio'=>'Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>1,'grade_id'=>1,'url_avt'=>'mr cong.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Binh DC','email'=>'binhdc@gmail.com','gender'=>1,'password' =>bcrypt('123456'),'bio'=>'The number one benefit of information technology is that it empowers people to do what they want to do. It lets people be creative. It lets people be productive. It lets people learn things they didnot think they could learn before, and so in a sense it is all about potential','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>3,'url_avt'=>'mr Binh.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Dung','email'=>'dung@gmail.com','gender'=>1,'password' =>bcrypt('123456'),'bio'=>'It has become appallingly obvious that our technology has exceeded our humanity.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mr Dung.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Hai Gemini','email'=>'gemini.wind285@gmail.com','gender'=>1,'password' =>bcrypt('123456'),'bio'=>'The first rule of any technology used in a business is that automation applied to an efficient operation will magnify the efficiency. The second is that automation applied to an inefficient operation will magnify the inefficiency.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mr Hai.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Nam Kominam','email'=>'kominam2511@gmail.com','gender'=>1,'password' =>bcrypt('123456'),'bio'=>'Technology is a gift of God. After the gift of life it is perhaps the greatest of Gods gifts. It is the mother of civilizations, of arts and of sciences','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mr Nam.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Nhan','email'=>'nhan@gmail.com','gender'=>1,'password' =>bcrypt('123456'),'bio'=>'One machine can do the work of fifty ordinary men. No machine can do the work of one extraordinary man.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mr Nhan.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
               array('name'=>'Quan','email'=>'quan@gmail.com','gender'=>1,'password' =>bcrypt('123456'),'bio'=>'The first rule of any technology used in a business is that automation applied to an efficient operation will magnify the efficiency. The second is that automation applied to an inefficient operation will magnify the inefficiency.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mr Quan.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('name'=>'Anh Uno','email'=>'rubik.hanu@gmail.com','gender'=>2,'password' =>bcrypt('123456'),'bio'=>'Technology is a gift of God. After the gift of life it is perhaps the greatest of Gods gifts. It is the mother of civilizations, of arts and of sciences.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mrs Anh.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('name'=>'Huyen','email'=>'huyen@gmail.com','gender'=>2,'password' =>bcrypt('123456'),'bio'=>'Our technological powers increase, but the side effects and potential hazards also escalate.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mrs Huyen.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('name'=>'Phuong','email'=>'phuong@gmail.com','gender'=>2,'password' =>bcrypt('123456'),'bio'=>'Technology gives us power, but it does not and cannot tell us how to use that power. Thanks to technology, we can instantly communicate across the world, but it still doesnt help us know what to say.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mrs Phuong.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('name'=>'Thanh ','email'=>'thanh@gmail.com','gender'=>1,'password' =>bcrypt('123456'),'bio'=>'We re still in the first minutes of the first day of the Internet revolution','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'mr Thanh.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('name'=>'Thao ','email'=>'thao@gmail.com','gender'=>2,'password' =>bcrypt('123456'),'bio'=>'Technology... is a queer thing. It brings you great gifts with one hand, and it stabs you in the back with the other.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>2,'grade_id'=>4,'url_avt'=>'ms Thao.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('name'=>'Thuong ','email'=>'thuong@gmail.com','gender'=>2,'password' =>bcrypt('123456'),'bio'=>'Everybody gets so much information all day long that they lose their common sense.','url_fb'=>'#','url_gmail'=>'#','url_github'=>'#','position_id'=>3,'grade_id'=>4,'url_avt'=>'ms Thuong.jpg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
        ]);
    }
}
