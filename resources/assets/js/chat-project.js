import Echo from "laravel-echo";

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '29cd347d237de727387a'
});
var userId = $('#userId').text();
window.Echo.private('App.User.'+ userId)
    .notification((notification) => {
    	if (notification.type=='App\Notifications\ChatProject') {
    		console.log(notification.type);
    		var new_msg = '<div class="msg-time-chat"><a href="#" class="message-img"><img class="avatar" style="width:45px;height:45px" src="#" alt=""></a><div class="message-body msg-out"><span class="arrow"></span><div class="text"><p class="attribution"> <a href="'+ notification.member_avt+'">'+ notification.member_name+'</a> at a moment ago</p><p>'+ notification.message+'</p></div></div></div>';
            console.log(new_msg);
            $('#msg-cont').append(new_msg);
    	}
});