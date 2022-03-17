var modalml = document.getElementById("popupml");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modalml.style.display = "block";
}
span.onclick = function() {
  modalml.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modalml) {
    modalml.style.display = "none";
  }
}
