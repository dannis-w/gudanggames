var modalml = document.getElementById("popupml");

function modalpopup(harga){
  modalml.style.display = "block";
  document.getElementById("harga").innerText=harga;
}
function closepopup(){
  modalml.style.display ="none";
}
