document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('login-form');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Get form inputs
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Validate password
        const passwordRegex = /^[A-Za-z\d@$!%*?&]{8,12}$/;

        if (!passwordRegex.test(password)) {
            alert('Password must be at least 8 characters long.');
            return;
        }

        // Create payload object to send to server
        const payload = {
            email: username,
            password: password
        };

        // Make POST request to login API
        fetch('http://127.0.0.1:3000/api/login', {
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
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    });
});
