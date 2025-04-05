document.addEventListener('DOMContentLoaded', function() {
    const signupForm = document.forms['signupForm'];

    signupForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Get form inputs
        const username = signupForm.elements['Username'].value;
        const email = signupForm.elements['email'].value; 
        const password = signupForm.elements['Password'].value;
        const phone = signupForm.elements['phone'].value;

        // Validate password
        const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (!passwordRegex.test(password)) {
            alert('Password must be at least 8 characters long and contain at least one alphabet character, one number, and one special character.');
            return;
        }

        // Create payload object to send to server
        const payload = {
            username: username,
            email: email,
            password: password,
            phone: phone
        };

        // Make POST request to account creation API
        fetch('http://localhost:3000/accountcreation', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(payload)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Handle response from server
            console.log(data); // You can process the response data here
            // Redirect to Menu.html after successful account creation
            window.location.href = 'Menu.html';
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    });
});
