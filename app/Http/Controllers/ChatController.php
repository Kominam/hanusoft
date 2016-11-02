<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ProjectChat;

use App\Project;

use App\Events\ChatOnProject;

use Auth;

use App\Notifications\ChatProject;

class ChatController extends Controller
{
    public function chat(Request $resquest) {
    	//cp the lay
    	$message=$resquest->message;
    	$user=Auth::user();
    	//how can find project chat id
    	//gui 1 resquest cp tem la name len
    	$project_chat = ProjectChat::firstOrCreate(['name' => $resquest->project_chat_name]);
    	$user->project_chats()->attach($project_chat->id, ['message' => $message]);
        $project = Project::where('name','=', $project_chat->name)->first();
        foreach ($project->users as $receiver) {
            if ($user->id !=$receiver->id) {
                 $receiver->notify(new ChatProject($user->name, $message, $user->url_avt, $project_chat->name, $project_chat->id));
            }   
        }
       
    	return 'ok';
    }
    public function getChatContent(Request $resquest) {
    	$project_chat = ProjectChat::where('name', '=', $resquest->project_chat_name)->first();
    		$cont='';
    	if ($project_chat === null) {
   				$cont='No message for this project.Be the first to raise up conversation';
			}	
    	else if ($project_chat->users->count()>0) {
    		foreach ($project_chat->users as $msg) {
    			$img = url('frontend/img/team/'.$msg->url_avt);
    		    $new_msg = '<div class="msg-time-chat"><a href="#" class="message-img"><img class="avatar" style="width:45px;height:45px" src="'.$img.'" alt=""></a><div class="message-body msg-out"><span class="arrow"></span><div class="text"><p class="attribution"> <a href="#">'.$msg->name.'</a> at '.$msg->pivot->created_at.'</p><p>'.$msg->pivot->message.'</p></div></div></div>';
    		$cont .=$new_msg;
    		}
    	}  
    	return response()->json($cont);
    }
}
