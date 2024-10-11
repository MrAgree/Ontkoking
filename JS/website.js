// login page and sign up page JS

function togglePage() {
    document.querySelector(".overlay-signin").classList.toggle("show");
    document.querySelector(".overlay-signup").classList.toggle("hide");
    document.querySelector(".signup").classList.toggle("show");
    document.querySelector(".signin").classList.toggle("hide");
  }

  // navigation animation JS
  
// Get references to all list items and the nav element
const navItems = document.querySelectorAll('nav ul li');
const nav = document.querySelector('nav ul');

// Create the sliding box
const navBox = document.createElement('div');
navBox.classList.add('nav-box');
nav.appendChild(navBox);

// Function to move the box to the hovered item
function moveNavBox(item) {
    const itemRect = item.getBoundingClientRect();
    const navRect = nav.getBoundingClientRect();

    // Calculate the position and size of the hovered item
    const leftPosition = itemRect.left - navRect.left;
    const width = itemRect.width;

    // Set the sliding box to the calculated position and width
    navBox.style.left = `${leftPosition}px`;
    navBox.style.width = `${width}px`;
    navBox.style.opacity = '1'; // Make it fully visible
}

// Function to hide the sliding box when not hovering
function hideNavBox() {
    navBox.style.opacity = '0'; // Fade out the box
}

// Add event listeners to each nav item
navItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        moveNavBox(item); // Move the box on hover
    });

    item.addEventListener('mouseleave', () => {
        hideNavBox(); // Hide the box when mouse leaves the item
    });
});

// modal animation JS

// Get references to modal and buttons
const modal = document.getElementById("modal");
const openModal = document.getElementById("open_modal");
const closeModal = document.getElementById("closeModal");

// When the user clicks on the "toevoegen" button, open the modal
openModal.addEventListener("click", function() {
    modal.style.display = "block"; // Show the modal
});

// When the user clicks on <span> (x), close the modal
closeModal.addEventListener("click", function() {
    modal.style.display = "none"; // Hide the modal
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
    if (event.target === modal) {
        modal.style.display = "none"; // Hide the modal
    }
});

// for the nav_bar sticky
const header = document.querySelector('.head');

// Function to handle scroll events
function handleScroll() {
    if (window.scrollY > 0) {
        header.classList.add('scrolled'); // Add the class if the user has scrolled down
    } else {
        header.classList.remove('scrolled'); // Remove the class if at the top
    }
}

// Add the scroll event listener
window.addEventListener('scroll', handleScroll);

