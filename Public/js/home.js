
//------------------------------------------------------ Get the modal of detail-----------------------------------
var modal = document.getElementById('detailModal');

// Get the button that opens the modal
var btn = document.getElementById("showdetail");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//------------------------------------------------------ ADD TO PANNIER-----------------------------------
var pannier = document.getElementById('pannier');



var ps=document.querySelectorAll("#addit").forEach(b=>{  b.addEventListener('click', e=> {     pannier.textContent++;    })  
 })

//------------------------------------------------------ CANCEL from PANNIER-----------------------------------
var pannier = document.getElementById('pannier');
var totalprice = document.getElementById('totalprice');



var ps=document.querySelectorAll("#cancelit").forEach(b=>{  b.addEventListener('click', e=> {     pannier.textContent--; totalprice.textContent--;    })  
 })






/*----------------------pour le slideshow--------------------*/

var slideIndex = 1;
showSlides1(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides1(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides1(slideIndex = n);
}

function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
 
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  
  slides[slideIndex-1].style.display = "block"; 
  
}

/*-------------------comment section-------------------- */

var newcmnt = document.getElementById('NewComnt');
var addcmnt = document.getElementById('AddComnt');
var holdercmnt = document.getElementById('holderComnt');


addcmnt.onclick = function() {
  holdercmnt.innerHTML=newcmnt.textContent;
}

/*----------------------------------------*/

{var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
  }}
  
