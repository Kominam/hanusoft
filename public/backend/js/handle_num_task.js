function handle_num_task(noti_id) {
    $(document).ready(function() {
       var num_unread_task= parseInt($('#num_unread_task').text());
       var temp= parseInt(" 1 ");
          $("#task_disp").on("click", "#"+noti_id, function(event){
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
                          var new_num_unread_task = num_unread_task - temp;
                          $('#num_unread_task').text(new_num_unread_task);
                          $('#badge_num_unread_task').text(new_num_unread_taski);
                          }          
                      });
          });
       });
}
