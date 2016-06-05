// Sets up the scroll-page functionality
$(document).ready(function() {
     $('#fullpage').fullpage({
         sectionsColor: ['#ff9933', '#0099ff', '#00cc66'],
         menu: '#menu',
         anchors: ['firstPage', 'secondPage', 'thirdPage'],
         navigation: true,
         navigationPosition: 'right'
     });
 });

// Controls the updating of the progress bars
$(document).ready(function() {
    $.ajax({
      type: "post",
      url: "./getScores",
      success: function(response){
        updateScores( response['em'], response['rob']);
      }
    });
 });

 $(document).ready(function() {
   preload("images/headshots/rob_hover.png", "images/headshots/emelie_hover.png");
 });

function updateScores(emelieScore, robScore) {
  var progression = 0,
  progress = setInterval(function()
  {
     if(progression <= emelieScore) {
       $('.progress-e .progress-bar-e').css({'width':progression+'%'});
     }
     if(progression <= robScore) {
          $('.progress-r .progress-bar-r').css({'width':progression+'%'});
     }

     progression += 1;
     if (progression > emelieScore && progression > robScore) {
       clearInterval();
     }
 }, 20);
}

// preload images
var imgs = new Array()
function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					imgs[i] = new Image()
					imgs[i].src = preload.arguments[i]
				}
			}
