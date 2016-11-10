function deleteTask(task_id) {
  $(document).ready(function() {
       $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
      $('a[href="#deletetask'+task_id+'"]').click(function(){
          $.ajax({
              url:'/my/task/delete/'+ task_id,
              type: "get",
              success: function(data) {
                $('#displayTask'+task_id).remove();
                swal({
                  title: "Success!",
                  text: "This task was deleted!",
                  type: "success",
                  confirmButtonText: "OK"
                });
              }
            });
  });
 });
}