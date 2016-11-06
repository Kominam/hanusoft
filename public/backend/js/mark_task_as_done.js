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
        url:'/member/mark-task-as-done/'+task_id,
        type: "get",
        success: function(data) {  
            alert("This task is mark as done");
        }
      });
    });
  });
}

