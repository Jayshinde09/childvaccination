const form = document.querySelector('form');


form.addEventListener('submit', function(event) {

    event.preventDefault();


    const email = form.querySelector('input[name="email"]').value;
    const password = form.querySelector('input[name="password"]').value;

    if (email === '' || password === '') {
        alert('Please enter your email address and password.');
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/login');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({ email, password }));


    xhr.onload = function() {
        if (xhr.status === 200) {

            window.location.href = '/dashboard';
        } else {

            alert('Invalid email address or password.');
        }
    };
});