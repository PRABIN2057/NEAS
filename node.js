
 
        function registerUser() {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            fetch('/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ username, email })
            })
            .then(response => response.text())
            .then(message => console.log(message))
            .catch(error => console.error('Error:', error));
        }

        function sendAlert() {
            const email = document.getElementById('alertEmail').value;
            const message = document.getElementById('alertMessage').value;
            fetch('/send-alert', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ email, message })
            })
            .then(response => response.text())
            .then(message => console.log(message))
            .catch(error => console.error('Error:', error));
        }
 
