//scroll
document.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  const navLinks = document.querySelectorAll('li.home a');

  if (window.scrollY > 0) {
    header.classList.add('lightHeader');
    header.classList.remove('default');

    navLinks.forEach(link => {
      link.classList.add('lightNav');
      link.classList.remove('home');
    });
  } else {
    header.classList.remove('lightHeader');
    header.classList.add('default');
      
    navLinks.forEach(link => {
      link.classList.remove('lightNav');
      link.classList.add('home');
    });
  }
});

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
