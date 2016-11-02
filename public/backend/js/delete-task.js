function deleteTask(task_id) {
  $(document).ready(function() {
       $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
      $('a[href="#deletetask'+task_id+'"]').click(function(){
          $.ajax({
              url:'/member/delete-task/'+ task_id,
              type: "get",
              success: function(data) {
                alert("delete task ok");
                $('#displayTask'+task_id).remove();
              }
            });
  });
 });
}