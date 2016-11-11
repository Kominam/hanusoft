function update_task(task_id) {
  $(document).ready(function() {
    $('#updateTaskForm'+ task_id).on('submit', function(e){
        var new_content = $('#update_task_content'+ task_id).val();
        var new_duedate = $('#update_task_due_date'+ task_id).val();
        var new_status = $('#update_task_status'+ task_id).find(":selected").text();
        alert(new_content + new_duedate + new_status);
         $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          url:"/my/task/update/" + task_id,
          type: "put",
          data : {'_token': $('input[name=_token]').val(), 'content' : new_content, 'due_date': new_duedate,'status': new_status},
          success: function(data) {
            swal({
            title: "Success!",
            text: "This task was updated!",
            type: "success",
            timer:2000,
            confirmButtonText: "OK"
            });
            location.reload();
          },
          error: function (xhr, ajaxOptions, thrownError) {
            swal({
                title: "Whoops!",
                text: "Sorry, something went wrong!",
                type: "error",
                confirmButtonText: "OK"
              });
          }
        });
    });
  });
}