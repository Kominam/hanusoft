<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('projects')->insert([
             array('name'=>'Bussiness CMS','description'=>'Many companies find it difficult to update their website content as often as they would like.Often, there are delays getting new content online, the site stagnates and your clients get to see outdated information.Thinking about making an interactive website for your business or building an online community for your business?','link_preview'=>'#','type_id'=>1,'start_date'=>'2015-10-01','plan_end_date'=>'2016-01-01','actual_end_date'=>'2016-01-05','link_github'=>'#','slug'=>'bussiness-cms','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Content Management System (CMS)','description'=>'A web application to manage and structure website content by the end users is the answer to your need.CMS helps decrease the maintenance cost and the turnaround time, while providing complete ownership of the content.Another important objective of making a website that is easy to update and has an effective user interface at an affordable cost is achieved through CMS.That is why so many companies are turning to CMS.','link_preview'=>'#','type_id'=>1,'start_date'=>'2015-09-01','plan_end_date'=>'2016-03-01','actual_end_date'=>'2016-02-28','link_github'=>'#','slug'=>'content-management-system-cms','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Online dating','description'=>'Word is very dynamic place to live in, ever since the internet revolution took over the globe. The time-consuming environment takes huge impact on every part of our life, and in the run for the priorities of material nature, we seem to lack of time for private life.That is the reason of emerge and popularity of online dating app.','link_preview'=>'#','type_id'=>1,'start_date'=>'2015-01-01','plan_end_date'=>'2015-05-05','actual_end_date'=>'2015-05-05','link_github'=>'#','slug'=>'online-dating','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'HANU Event','description'=>'With more and more people relying on their smartphones and tablets, event planners are turning to apps to better engage with their attendees.HANU envent allow people to get important information about the event (schedule, speakers, location, social media feeds)and features, such as e.g. networking, onto mobile end devices.','link_preview'=>'#','type_id'=>2,'start_date'=>'2015-10-10','plan_end_date'=>'2016-06-06','actual_end_date'=>'2016-07-10','link_github'=>'#','slug'=>'hanu-event', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'FIT Portal','description'=>'Built on the occasion of the 10th anniversary of the establishment of the information technology department.','link_preview'=>'#','type_id'=>1,'start_date'=>'2015-12-10','plan_end_date'=>'2016-10-10','actual_end_date'=>'2016-11-10','link_github'=>'#','slug'=>'fit-portal','created_at' => Carbon::now(),'updated_at' => Carbon::now()) 

        ]);
    }
}
