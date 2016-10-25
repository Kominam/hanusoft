import Echo from "laravel-echo";

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '29cd347d237de727387a'
});
var userId = $('#userId').text();
window.Echo.private('comment-on-post' + post_id)
    .notification((notification) => {
    	if (notification.type='App\Notifications\InvitetoProject') {
    		var new_invitation='<li id="invite'+ notification.leadership_id + notification.project_id +'"><a href="#"><span class="label label-danger"><i class="icon-bolt"></i></span><span style="color:red;font-size:15px">Invite project</span><br>'+notification.project_name+ ' from ' + notification.leadership_name + '<br><span class="small italic">a moment ago</span><br><table><tr><td><a id="accept'+ notification.leadership_id + notification.project_id +'"><i class=" icon-ok" style="color:green">Accept</i></a></td><td><a id="decline'+ notification.leadership_id + notification.project_id +'"><i class="icon-minus" style="color:red">Decline</i></a></td><td><a href="#hide"><i class="icon-off">Hide</i></td></tr></table></a></li>';
    		console.log(new_invitation);
    		$('#header_notification_bar ul').prepend(new_invitation);
    	}
        console.log(notification.type);
});