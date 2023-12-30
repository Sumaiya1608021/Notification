import './bootstrap';
var x = document.getElementById("myAudio");

function enableAutoplay() {
    x.autoplay = true;
    x.load();
}

$(document).ready(function(){

    $('#notificationForm').submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $(this)[0].reset();
        $.ajax({
            url:"/send-notification",
            type:"POST",
            data:formData,
            success:function(response){
                if(response.success){
                    $('#notificationSend').text(response.msg);
                }
                else{
                    alert(response.msg);
                }

                setTimeout(() => {
                    $('#notificationSend').text('');
                }, 2000);
            }
        });
    });

});


Echo.channel('notify-channel')
.listen('SendNotification', (e) => {
    if(userId != e.userId){
        enableAutoplay();
        $('#notification').text(e.message);
    }
});