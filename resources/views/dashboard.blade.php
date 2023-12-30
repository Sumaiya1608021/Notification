<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notification</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
    <script>
        var userId = @json(auth()->user()->id);
   
    </script>
</head>
<body>

    <a href="/logout" style="float: right">Logout</a>

   {{-- tone --}}
    <audio id="myAudio">
        <source src="{{asset('tone/tone.mp3')}}" type="audio/mpeg">
    </audio>
  

    <h3 style="color: grey" id="notification"></h3>

    <h4>Hii {{ auth()->user()->name }}</h4>

    <form action="" id="notificationForm">
        @csrf
        <input type="text" name="message" placeholder="Enter Text" id="notification-text" required>
        <br><br>
        <input type="submit" value="Send Notification">
        <p style="color:green" id="notificationSend"></p>
    </form>



</body>
</html>
