document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
      document.querySelector("body").classList.add("loaded");
  }, 10)
});
function showline(num){
    if(num == 1){
      document.getElementById('mainsection').style.height = "500px";
      document.getElementById('first').style.display='block';
      document.getElementById('sec').style.display='none';
      document.getElementById('three').style.display='none';
      document.getElementById('four').style.display='none';
      document.getElementById('five').style.display='none';
      document.getElementById('six').style.display='none';
      document.getElementById(num).style.display='block';
      document.getElementById(4).style.display='none';
      document.getElementById(3).style.display='none';
      document.getElementById(2).style.display='none';
      document.getElementById(5).style.display='none';
      document.getElementById(6).style.display='none';
    }
    else if(num == 2) {
      document.getElementById('mainsection').style.height = "500px";
      document.getElementById('first').style.display='none';
      document.getElementById('sec').style.display='block';
      document.getElementById('three').style.display='none';
      document.getElementById('four').style.display='none';
      document.getElementById('five').style.display='none';
      document.getElementById('six').style.display='none';
      document.getElementById(5).style.display='none';
      document.getElementById(6).style.display='none';
      document.getElementById(1).style.display='none';
      document.getElementById(3).style.display='none';
      document.getElementById(4).style.display='none';
      document.getElementById(num).style.display='block';
    }
    else if( num == 3){
      document.getElementById('mainsection').style.height = "670px";
      document.getElementById('first').style.display='none';
      document.getElementById('sec').style.display='none';
      document.getElementById('three').style.display='block';
      document.getElementById('four').style.display='none';
      document.getElementById('five').style.display='none';
      document.getElementById('six').style.display='none';
      document.getElementById(5).style.display='none';
      document.getElementById(6).style.display='none';
      document.getElementById(1).style.display='none';
      document.getElementById(2).style.display='none';
      document.getElementById(4).style.display='none';
      document.getElementById(num).style.display='block';
  
    }
    else if(num == 4){
      document.getElementById('mainsection').style.height = "1050px";
      document.getElementById('first').style.display='none';
      document.getElementById('sec').style.display='none';
      document.getElementById('three').style.display='none';
      document.getElementById('four').style.display='block';
      document.getElementById('five').style.display='none';
      document.getElementById('six').style.display='none';
      document.getElementById(5).style.display='none';
      document.getElementById(6).style.display='none';
      document.getElementById(1).style.display='none';
      document.getElementById(3).style.display='none';
      document.getElementById(2).style.display='none';
      document.getElementById(num).style.display='block';
  
    }
    else if(num == 5){
      document.getElementById('mainsection').style.height = "500px";
      document.getElementById('first').style.display='none';
      document.getElementById('sec').style.display='none';
      document.getElementById('three').style.display='none';
      document.getElementById('four').style.display='none';
      document.getElementById('five').style.display='block';
      document.getElementById('six').style.display='none';
      document.getElementById(4).style.display='none';
      document.getElementById(6).style.display='none';
      document.getElementById(1).style.display='none';
      document.getElementById(3).style.display='none';
      document.getElementById(2).style.display='none';
      document.getElementById(num).style.display='block';
  
    }
    else{
      document.getElementById('mainsection').style.height = "500px";
      document.getElementById('first').style.display='none';
      document.getElementById('sec').style.display='none';
      document.getElementById('three').style.display='none';
      document.getElementById('four').style.display='none';
      document.getElementById('five').style.display='none';
      document.getElementById('six').style.display='block';
      document.getElementById(5).style.display='none';
      document.getElementById(4).style.display='none';
      document.getElementById(1).style.display='none';
      document.getElementById(3).style.display='none';
      document.getElementById(2).style.display='none';
      document.getElementById(num).style.display='block';
  
    }
  }

function updateuseretime(){
  jQuery.ajax({
    url:'useronline.php',
    success: function(){

    }
  });
}

setInterval(function(){
  updateuseretime();
  
},5000);
var i=0;

