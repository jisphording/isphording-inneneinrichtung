// MODAL-GDPR //
// -------------------------------------------------------------------------------- //

// Get the modal
var modal = document.getElementById("modal-gdpr");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

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

// Check if the user has visited the site before
var userHasVisited = localStorage.getItem('visited');

// Check if the user has visited the site before
if ( userHasVisited == "yes" ) {
    modal.style.display = "none";
}

// Set a flag that user has visited the site before
localStorage.setItem('visited', 'yes');