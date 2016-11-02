
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

/*require('./bootstrap');*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

/*Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: 'body'
});*/

import Echo from "laravel-echo";

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '29cd347d237de727387a'
});
var userId = $('#userId').text();
window.Echo.private('App.User.'+ userId)
    .notification((notification) => {
    	if (notification.type =='App\\Notifications\\InvitetoProject') {
    		var new_invitation='<li id="invite'+ notification.leadership_id + notification.project_id +'"><a href="#"><span class="label label-danger"><i class="icon-bolt"></i></span><span style="color:red;font-size:15px">Invite project</span><br>'+notification.project_name+ ' from ' + notification.leadership_name + '<br><span class="small italic">a moment ago</span><br><table><tr><td><a id="accept'+ notification.leadership_id + notification.project_id +'"><i class=" icon-ok" style="color:green">Accept</i></a></td><td><a id="decline'+ notification.leadership_id + notification.project_id +'"><i class="icon-minus" style="color:red">Decline</i></a></td><td><a href="#hide"><i class="icon-off">Hide</i></td></tr></table></a></li>';
    		$('#header_notification_bar li:first').after(new_invitation);
            $('#header_notification_bar li:nth-child(4)').remove();
            var num_unread_noti= parseInt($('#num_unread_noti').text());
            var temp= parseInt(" 1 ");
            var new_num_unread_noti = num_unread_noti + temp;
            $('#num_unread_noti').text(new_num_unread_noti);
            $('#badge_num_unread_noti').text(new_num_unread_noti);
    	}
        if (notification.type=='App\\Notifications\\ChatProject') {
            var new_msg = '<div class="msg-time-chat"><a href="#" class="message-img"><img class="avatar" style="width:45px;height:45px" src="hanusoft.dev:8000/frontend/img/team/'+notification.member_avt+'" alt=""></a><div class="message-body msg-out"><span class="arrow"></span><div class="text"><p class="attribution"> <a href="'+ notification.member_avt+'">'+ notification.member_name+'</a> at a moment ago</p><p>'+ notification.message+'</p></div></div></div>';
            $('#msg-cont').append(new_msg);
            var num_unread_mess= parseInt($('#num_unread_mess').text());
            var temp= parseInt(" 1 ");
            var new_num_unread_mess = num_unread_mess + temp;
            $('#num_unread_mess').text(new_num_unread_mess);
            $('#badge_num_unread_mess').text(new_num_unread_mess);
            var new_noti_msg = '<li id="'+ notification.id+'"><a href="http://hanusoft.dev:8000/member/mail"><span class="photo"><img alt="avatar" src="#"></span><span class="subject"><span class="from" style="color:red">'+ notification.member_name +'</span><span class="time">moment ago</span></span><span class="message"><strong>'+ notification.project_chat_name+'</strong></span><span class="message">'+ notification.message+'</span></a></li>';
            console.log(new_noti_msg);
            $('#header_inbox_bar li:first').after(new_noti_msg);
            $('#header_inbox_bar li:nth-child(4)').remove();
        }
        if (notification.type=='App\\Notifications\\AddNewState') {
            var n_state= '<article class="timeline-item"><div class="timeline-desk"><div class="panel"><div class="panel-body"><span class="arrow"></span><span class="timeline-icon red"></span><span class="timeline-date">08:25 am</span><h1 class="red">'+ notification.state_due_date+'</h1><p>'+ notification.state_content+'</p></div></div></div></article>';
            $('#timeline' + notification.project_id).prepend(n_state);
            var new_state = '<li id="'+ notification.id+'"><a href="http://hanusoft.dev:8000/member/project/'+ notification.project_id+'"><span class="label label-danger"><i class="icon-bolt"></i></span>New State Added.<span class="small italic">'+ notification.project_name+'</span></a></li>';
            $('#header_notification_bar li:first').after(new_state);
            $('#header_notification_bar li:nth-child(4)').remove();
            var num_unread_noti= parseInt($('#num_unread_noti').text());
            var temp= parseInt(" 1 ");
            var new_num_unread_noti = num_unread_noti + temp;
            $('#num_unread_noti').text(new_num_unread_noti);
            $('#badge_num_unread_noti').text(new_num_unread_noti);
        }
        if (notification.type=='App\\Notifications\\DeleteState') {
            $('#state' + notification.state_id).remove();
            var new_state = '<li id="'+ notification.id+'"><a href="http://hanusoft.dev:8000/member/project/'+ notification.project_id+'"><span class="label label-danger"><i class="icon-bolt"></i></span>State #'+ notification.state_id+'removed .<span class="small italic">'+ notification.project_name+'</span></a></li>';
            $('#header_notification_bar li:first').after(new_state);
            $('#header_notification_bar li:nth-child(4)').remove();
            var num_unread_noti= parseInt($('#num_unread_noti').text());
            var temp= parseInt(" 1 ");
            var new_num_unread_noti = num_unread_noti + temp;
            $('#num_unread_noti').text(new_num_unread_noti);
            $('#badge_num_unread_noti').text(new_num_unread_noti);
        }
         if (notification.type=='App\\Notifications\\AssignNewTask') {
            var new_task = '<li id="'+notification.id+'"><a href="http://hanusoft.dev:8000/member/project/'+ notification.project_id+'"><div class="task-info"><div class="desc">'+notification.project_name+'</div><div class="desc">'+notification.todo_content+'</div></div></a></li>';
            $('#header_task_bar li:first').after(new_task);
            $('#header_task_bar li:nth-child(4)').remove();
            var new_task ='<li><div class="task-checkbox"><input type="checkbox" class="list-child" value=""/></div><div class="task-title"><span class="task-title-sp">'+notification.todo_content+'</span><span class="badge badge-sm label-success">2 Days</span><div class="pull-right hidden-phone"><button class="btn btn-success btn-xs"><i class="icon-ok"></i></button><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></div></div></li>';
            $('#task_list ul').append(new_task);
            console.log(new_task);
            var num_unread_task= parseInt($('#num_unread_task').text());
            var temp= parseInt(" 1 ");
            var new_num_unread_task = num_unread_task + temp;
            $('#num_unread_task').text(new_num_unread_task);
            $('#badge_num_unread_task').text(new_num_unread_task);
        }
         if (notification.type=='App\\Notifications\\DeleteTask') {
            var new_task = '<li id="'+notification.id+'"><a href="http://hanusoft.dev:8000/member/project/'+ notification.project_id+'"><div class="task-info"><div class="desc">'+notification.project_name+'</div><div class="desc">Your Task #'+notification.todo_id+'was remove</div></div></a></li>';
            $('#header_task_bar li:first').after(new_task);
            $('#header_task_bar li:nth-child(4)').remove();
            var num_unread_task= parseInt($('#num_unread_task').text());
            var temp= parseInt(" 1 ");
            $('#displayTask'+notification.todo_id).remove();
            var new_num_unread_task = num_unread_task + temp;
            $('#num_unread_task').text(new_num_unread_task);
            $('#badge_num_unread_task').text(new_num_unread_task);
        }
         console.log(notification.type);
});