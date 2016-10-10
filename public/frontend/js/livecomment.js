function liveComment(post_id) {
  var new_cmt;
  //instantiate a Pusher object with our Credential's key
    var pusher = new Pusher('29cd347d237de727387a', {
    encrypted: true
  });

  //Subscribe to the channel we specified in our Laravel Event
  var channel = pusher.subscribe('comment-on-post' +post_id);

  //Bind a function to a Event (the full Laravel class)
  channel.bind('App\\Events\\CommentWasSent', function(comments){
   for (var property in comments) {
        new_cmt='<li><div class="comment"><div class="img-thumbnail"><img class="avatar" alt="" src="#"></div><div class="comment-block"><div class="comment-arrow"></div><span class="comment-by"><strong>' + comments[property].name +'</strong><span class="pull-right"><span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span></span></span><p>' + comments[property].content + '</p><span class="date pull-right">a moment ago</span></div></div></li>';
    }  
  });
  return new_cmt;
}
              