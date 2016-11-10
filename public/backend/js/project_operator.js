$(document).ready(function() {
  //Set up Ajax
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var project_id= $('#project_id').text();
  var project_name = $('#project_name').text();
  //Add new task
  $('a[href="#addtask"]').click(function(){
      var content = $('#todo_content').val();
      var due_date = $('#todo_due_date').val();
      var assigned_mem_list = [];
        $('input:checkbox:checked.assgined').map(function(){
          assigned_mem_list.push($(this).val());
          });
      $.ajax({
      url:'/my/task/create',
      type: "post",
      data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'content': content, 'due_date' : due_date, 'assigned_members':assigned_mem_list},
      success: function(data) {
           swal({
                title: "Success!",
                text: "This task is added successful!",
                type: "success",
                timer: 1000,
                confirmButtonText: "OK"
            }); 
          var new_task ='<li><div class="task-checkbox"><input type="checkbox" class="list-child" value=""/></div><div class="task-title"><span class="task-title-sp">'+content+'</span><span class="badge badge-sm label-success">2 Days</span> <span class="badge badge-sm label-primary">On queue</span><div class="pull-right hidden-phone"><button class="btn btn-success btn-xs"></i></button><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></div></div></li>';
          $('#task_list ul').append(new_task);
      }
    });
  });
  //Invite memeber
   $('a[href="#invitethem"]').click(function(){
      var inviter_list = [];
      $('input:checkbox:checked.inviter').map(function(){
        inviter_list.push($(this).val());
        });
      console.log(inviter_list);
       $.ajax({
          url:'/my/invitation/create',
          type: "post",
          data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'project_name': project_name, 'inviters' : inviter_list},
          success: function(data) {  
            swal({
                title: "Success!",
                text: "Invite these members successful!",
                type: "success",
                timer: 1000,
                confirmButtonText: "OK"
            }); 
          }
      });
    });
//Add state
  $('a[href="#addstate"]').click(function(){
      var content = $('#state_content').val();
      var due_date = $('#state_due_date').val();
      var status = $('#state_status').val();
      $.ajax({
      url:'/my/state/create',
      type: "post",
      data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'content': content, 'due_date' : due_date, 'status': status},
      success: function(data) {
        swal({
            title: "Success!",
            text: "This state is added successful!",
            type: "success",
            timer: 1000,
            confirmButtonText: "OK"
        }); 
        var n_state= '<article class="timeline-item"><div class="timeline-desk"><div class="panel"><div class="panel-body"><span class="arrow"></span><span class="timeline-icon blue"></span><span class="timeline-date">08:25 am</span><h1 class="blue">'+ data.due_date+'</h1><p>'+ data.content+'</p></div></div></div></article>';
         $('#timeline' + project_id).prepend(n_state);
      }
    });
  });
});
