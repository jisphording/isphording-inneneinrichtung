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

// NAVBAR HIDE ON SCROLL //
// -------------------------------------------------------------------------------- //
window.onscroll = function(e) {

  // On a freshly loaded page you have a bit of inertia
  if (this.scrollY > 200) {
    var that = this;
    hideOnScroll(that);
  }

  function hideOnScroll(el) {
    // Scrolling down hides the scrollbar
    if (el.oldScroll > el.scrollY) {
      document.getElementById('navbar').style.top="0";

    // Scrolling back up makes the Navbar visible again
    } else {
      document.getElementById('navbar').style.top="-20rem";
    };
    el.oldScroll = el.scrollY;
  }
}

// MENU FULLSCREEN //
// -------------------------------------------------------------------------------- //
const imagesLoaded = require('imagesloaded');
import Navigation from "./modules/navigation";

// Preload images
const preloadImages = () => {
    return new Promise((resolve, reject) => {
        imagesLoaded(document.querySelectorAll('.screen'), {background: true}, resolve);
    });
};

// Preload fonts and images
Promise.all([preloadImages()]).then(() => {
    new Navigation(document.querySelector('.menu'));
    // Remove loader (loading class)
    document.body.classList.remove('loading');
});

// ANIMATED BACKGROUND NOISE CANVAS //
// -------------------------------------------------------------------------------- //
import Noise from "./modules/noise";
new Noise('insert-readmore__grain', 8);