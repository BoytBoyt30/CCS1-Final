//Submit Form changing display after submitting form
const mainContainer = document.getElementById('contactContainer');
const thanksContainer = document.getElementById('thanksContainer');
const contactForm = document.querySelector('.contactForm form');
const returnContact = document.getElementById('returnContact');

//using event listener with the submit button to change content displays
contactForm.addEventListener('submit', (event) => {
  event.preventDefault();                      //prevent default to prevent from resetting site
  contactContainer.style.display = 'none';     //changes CSS display to none to give way to thank you div when form is submitted
  thanksContainer.style.display = 'block';     //changes display from none to block after form submission
});

returnContact.addEventListener('click', (event) => {
  event.preventDefault();
  contactForm.reset();                         //resets contact form
  contactContainer.style.display = 'flex';     //returns the contact div when user goes back to forms
  thanksContainer.style.display = 'none';      //hides thank you div
});

//this is for projects page for showing content when hovering
document.querySelectorAll('.hoverOverlay').forEach((link) => {     //using query selectors to access CSS class
  link.addEventListener('mouseenter', () => {                      //event listener mouseenter for hover over
      link.querySelector('.overlayContent').style.opacity = '1';   //changes content opacity to 1 to show the overlay content
  });

  link.addEventListener('mouseleave', () => {                      //event listener mouseleave when not hovering
      link.querySelector('.overlayContent').style.opacity = '0';   //changes to zero to hide content
  });
});
;
