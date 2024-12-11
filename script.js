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

