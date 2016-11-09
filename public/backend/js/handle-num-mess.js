  function handle_mess(noti_id) {
        $(document).ready(function() {
       var num_unread_mess= parseInt($('#num_unread_mess').text());
       var temp= parseInt(" 1 "); 
         $("#inbox").on("click", "#"+ noti_id, function(){
               $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });
                $.ajax({
                      url:'/my/notifications',
                      type: "post",
                      data: { '_token': $('input[name=_token]').val(), 'noti_id': noti_id},
                      success: function(data) {   
                          var new_num_unread_mess = num_unread_mess - temp;
                          $('#num_unread_mess').text(new_num_unread_mess);
                          $('#badge_num_unread_mess').text(new_num_unread_mess);
                          window.location.href = "http://hanusoft.dev/my/profile/inbox ";
                          }          
                      });
          });
       }); 
  }
 
