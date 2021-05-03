
var video = document.getElementById("bgVideo");
var btn = document.getElementById("bgVideo");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}


$(window).resize(function(){
  var text = $(".about h1"),
      currentWidth = parseInt(text.css("width")),
      newWidth = 50;
  
  if(currentWidth==700) newWidth = 40;
      else if (currentWidth<700 && currentWidth>=600) newWidth = 30;
      else if (currentWidth<600 && currentWidth>=500) newWidth = 20;
      else if (currentWidth<500 && currentWidth>=300) newWidth = 15;
  
  text.css("font-size",newWidth+"px");
});
