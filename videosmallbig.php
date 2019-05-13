<!DOCTYPE html> 
<html> 
<body> 

<div style="text-align:center"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="420">
    <source src="Images/kid.mp4" type="video/mp4">
    <source src="Images/kid.ogg" type="video/ogg">
    Your browser does not support HTML5 video.
  </video>
</div> 

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 

<p>Video courtesy of <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>.</p>
</body> 

<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml5_video_js_prop, 2017-07-01 05:09:49 GMT -->
</html>
