function markAsDone(task_id) {
    $(document).ready(function() {
    //Set up Ajax
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('#btn_mark_todo_as_done'+task_id).click(function(){
        $.ajax({
        url:'/my/task/mark-as-done/'+task_id,
        type: "get",
        success: function(data) {  
           swal({
              title: "Success!",
              text: "Mark this task as done!",
              type: "success",
              timer:2000,
              confirmButtonText: "OK"
            });
           $('#btn_mark_todo_as_done'+task_id).remove();
        },
        error: function() {  
           swal({
              title: "Whoops!",
              text: "Something wnet wrong.Please try again!",
              type: "error",
              confirmButtonText: "OK"
            });
        }
      });
    });
  });
}

