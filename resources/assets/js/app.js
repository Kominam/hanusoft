
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
    		console.log(new_invitation);
    		$('#header_notification_bar ul').prepend(new_invitation);
            $('#header_notification_bar li:last').remove();
            var num_unread_noti= parseInt($('#num_unread_noti').text());
            var temp= parseInt(" 1 ");
            var new_num_unread_noti = num_unread_noti + temp;
            $('#num_unread_noti').text(new_num_unread_noti);
            $('#badge_num_unread_noti').text(new_num_unread_noti);
    	}
        if (notification.type=='App\\Notifications\\ChatProject') {
            console.log(notification.type);
            var new_msg = '<div class="msg-time-chat"><a href="#" class="message-img"><img class="avatar" style="width:45px;height:45px" src="hanusoft.dev:8000/frontend/img/team/'+notification.member_avt+'" alt=""></a><div class="message-body msg-out"><span class="arrow"></span><div class="text"><p class="attribution"> <a href="'+ notification.member_avt+'">'+ notification.member_name+'</a> at a moment ago</p><p>'+ notification.message+'</p></div></div></div>';
            $('#msg-cont').append(new_msg);
            var num_unread_mess= parseInt($('#num_unread_mess').text());
            var temp= parseInt(" 1 ");
            var new_num_unread_mess = num_unread_mess + temp;
            $('#num_unread_mess').text(new_num_unread_mess);
            $('#badge_num_unread_mess').text(new_num_unread_mess);
            var new_noti_msg = '<li><a href="#"><span class="photo"><img alt="avatar" src="#"></span><span class="subject"><span class="from" style="color:red">'+ notification.member_name +'</span><span class="time">moment ago</span></span><span class="message"><strong>'+ notification.project_chat_name+'</strong></span><span class="message">'+ notification.message+'</span></a></li>';
            console.log(new_noti_msg);
            $('#header_inbox_bar ul').prepend(new_noti_msg);
            $('#header_inbox_bar li:last').remove();

            /*$('#header_inbox_bar li').find(' > li:nth-last-child(2)').remove();*/
        }
         console.log(notification.type);
});