function open(evt, city){
  var i, likeskin;

  likeskin = document.getElementsByClassName("likeSkin");
  for (i = 0; i < likeskin.length; i++) {
    likeskin[i].className = likeskin[i].className.replace(" active", "");
  }
  document.getElementById(city).style.display = "block";
  evt.currentTarget.className += " active";
}
  

