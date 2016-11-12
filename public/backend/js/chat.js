$(document).ready(function() {
     $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
    function sendMessage() {
      $('#sendMsg').text('Waitting');
     var project_chat_name = $('#project_chat_name').find('p').text();
     var message= $('#message').val();
     var sender_name ="{{Auth::user()->name}}";
     var member_avt = "{{Auth::user()->url_avt}}";
     $.ajax({
       url:'/my/chat/create',
       type: "post",
       data: { '_token': $('input[name=_token]').val(), 'project_chat_name': project_chat_name, 'message': message},
       success: function(data) {
       $('#sendMsg').text('Send');
       $('#message').val("");
       var $img = $('<img class="avatar" style="width:45px;height:45px" src="http://hanusoft.dev/'+member_avt+'" />').on('load', function(){
            });
            var temp = $('<a href="#" class="message-img"></a>').append($img);
            var temp2 = $('<div class="msg-time-chat"></div>').append(temp);
            var new_msg = temp2.append('<div class="message-body msg-out"><span class="arrow"></span><div class="text"><p class="attribution"> <a href="'+ member_avt+'">You</a> at a moment ago</p><p>'+ message+'</p></div></div>');
       $('#msg-cont').append(new_msg);
       }          
     });
    }
   $('#sendMsg').click(function() {
     sendMessage();
   });
   $('#message').keypress(function(event) {
      var keycode = event.keyCode || event.which;
      var message= $('#message').val();
      if(keycode == '13' &&  message !='') {
        sendMessage();    
    }
   });
   function getContentMessage() {
      $('a[href="#{{$project_chat->name}}"]').click(function(){
      $('#project_chat_name').find('p').text($(this).text());
        $.ajax({
          url:'/my/chat/get-content',
          type: "post",
          data: { '_token': $('input[name=_token]').val(), 'project_chat_name': "{{$project_chat->name}}"},
          success: function(data) {   
                 $('#msg-cont').empty();
                 $('#msg-cont').prepend(data);
           }          
        });
      }); 
   }
});