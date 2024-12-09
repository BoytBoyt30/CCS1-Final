//Submit Form changing display after submitting form
const mainContainer = document.getElementById('contactContainer');
const thanksContainer = document.getElementById('thanksContainer');
const contactForm = document.querySelector('.contactForm form');
const returnContact = document.getElementById('returnContact');

contactForm.addEventListener('submit', (event) => {
  event.preventDefault();
  contactContainer.style.display = 'none';
  thanksContainer.style.display = 'block';
});

returnContact.addEventListener('click', (event) => {
  event.preventDefault();
  contactForm.reset();
  contactContainer.style.display = 'flex';
  thanksContainer.style.display = 'none';
});


document.querySelectorAll('.hoverOverlay').forEach((link) => {
  link.addEventListener('mouseenter', () => {
      link.querySelector('.overlayContent').style.opacity = '1';
  });

  link.addEventListener('mouseleave', () => {
      link.querySelector('.overlayContent').style.opacity = '0';
  });
});
;
