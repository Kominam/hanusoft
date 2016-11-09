function handle_inite_project(leadership_id, project_id) {
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

      /*$('#header_notification_bar ul').prepend('Some text');*/
    var notification_id = $('#noti_id').text();
    var num_unread_noti= parseInt($('#num_unread_noti').text());
    var temp= parseInt(" 1 ");
    $('#accept' +leadership_id+project_id).click(function(){
            $.ajax({
            url:'/my/invitation/handle',
            type: "post",
            data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'response': 'accept', 'noti_id': notification_id},
            success: function(data) {
                alert("Accept success");   
                $('#invite'+leadership_id+project_id).remove();
                 var new_num_unread_noti = num_unread_noti - temp;
                $('#num_unread_noti').text(new_num_unread_noti);
                $('#badge_num_unread_noti').text(new_num_unread_noti);
                }          
            });
        });
    $('#decline'+leadership_id+project_id).click(function(){
            $.ajax({
            url:'/my/invitation/handle',
            type: "post",
            data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'response': 'decline','noti_id': notification_id},
            success: function(data) { 
                 alert("Decline success");  
                $('#invite'+leadership_id+project_id).remove();
                 var new_num_unread_noti = num_unread_noti - temp;
                $('#num_unread_noti').text(new_num_unread_noti);
                $('#badge_num_unread_noti').text(new_num_unread_noti);
                }          
            });  
        });
    $('#hide'+leadership_id+project_id).click(function(){
            $.ajax({
            url:'/my/invitation/handle',
            type: "post",
            data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'response': 'hide',  'noti_id': notification_id},
            success: function(data) {
                 alert("Hide success");
                $('#invite'+leadership_id+project_id).remove();  
                 var new_num_unread_noti = num_unread_noti - temp;
                $('#num_unread_noti').text(new_num_unread_noti);
                $('#badge_num_unread_noti').text(new_num_unread_noti);
                }          
            });  
        }); 
});
}