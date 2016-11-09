function updateTodo_item(todo_id) {
  $(document).ready(function() {
       $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
       var project_id= $('#project_id').text();
       var content = $('#todo_content_update'+todo_id).val();
       var due_date = $('#todo_due_date_update'+todo_id).val();
        var ass_list = [];
      $('input:checkbox:checked.new_assign').map(function(){
        ass_list.push($(this).val());
        });
       $('a[href="#updatetask'+todo_id+'"]').click(function(){
               alert(content + due_date);
          $.ajax({
              url:'/my/task/update',
              type: "post",
              data : {'_token': $('input[name=_token]').val(),'id': todo_id, 'content' : content, 'due_date': due_date, 'project_id': project_id, 'new_assigned_members': ass_list},
              success: function(data) {  
                alert('Success');
                console.log(data);
              }
            });
  });
 });
}