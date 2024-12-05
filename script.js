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
//submitForm
/*
function submitForm() {
    document.getElementById("contactForm").addEventListener("submit", function (event) {
      event.preventDefault();
      const contacting = document.getElementById("maincontact");
      const thankss = document.getElementById("thankyou");
  
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const phone = document.getElementById("phone").value;
      const message = document.getElementById("message").value;
  
      if (name && email && phone && message) {
        contacting.style.display = "none";
        thankss.style.display = "block";
      }
    });
  }
    */
