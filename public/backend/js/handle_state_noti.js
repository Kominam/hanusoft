function handle_state(noti_id) {
    $(document).ready(function() {
       var num_unread_noti= parseInt($('#num_unread_noti').text());
       var temp= parseInt(" 1 ");
          $("#noti").on("click", "#"+noti_id, function(event){
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
                          var new_num_unread_noti = num_unread_noti - temp;
                          $('#num_unread_noti').text(new_num_unread_noti);
                          $('#badge_num_unread_noti').text(new_num_unread_noti);
                          }          
                      });
          });
       });
}
