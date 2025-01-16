document.addEventListener('DOMContentLoaded', function () {
 // ====== CONTACT FORM VALIDATION ======
 const contactForm = document.getElementById('contact-form');
 const phoneInput = document.getElementById('phone');

 if (contactForm && phoneInput) {
   // Prevent non-numeric characters while typing
   phoneInput.addEventListener('keypress', function (e) {
     const char = String.fromCharCode(e.which);
     if (!/[0-9]/.test(char)) {
       e.preventDefault(); // Block non-numeric input
     }
   });

   // Validate on form submission
   contactForm.addEventListener('submit', function (e) {
     const name = document.getElementById('name').value.trim();
     const email = document.getElementById('email').value.trim();
     const phone = phoneInput.value.trim();
     const message = document.getElementById('message').value.trim();

     const phonePattern = /^[0-9]{10}$/; // 10-digit number validation

     // Check if all fields are filled
     if (!name || !email || !phone || !message) {
       alert('Please fill out all fields!');
       e.preventDefault();
       return;
     }

     // Validate phone number format
     if (!phonePattern.test(phone)) {
       alert('Please enter a valid 10-digit phone number.');
       e.preventDefault();
       return;
     }

     // If all validations pass
     alert(`Thank you, ${name}. We have received your message.`);
   });
 }});