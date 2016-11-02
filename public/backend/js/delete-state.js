function deleteState(state_id) {
  $(document).ready(function() {
       $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
      $('a[href="#deletestate'+state_id+'"]').click(function(){
          $.ajax({
              url:'/member/delete-state/'+ state_id,
              type: "get",
              success: function(data) {  
                $('#state'+state_id).remove();
                 alert("delete state ok");
              }
            });
  });
 });
}