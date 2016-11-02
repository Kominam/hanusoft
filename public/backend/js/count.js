function countUp(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}
var num_project = parseInt($('#num_project').text());
countUp(num_project);

function countUp2(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count2'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}
var num_post = parseInt($('#num_post').text());

countUp2(num_post);

function countUp3(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count3'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}
var num_unread_mess = parseInt($('#badge_num_unread_mess').text());

countUp3(num_unread_mess);

function countUp4(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count4'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}
var num_unread_noti = parseInt($('#badge_num_unread_noti').text());

countUp4(num_unread_noti);