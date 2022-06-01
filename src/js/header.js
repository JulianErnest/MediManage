let loginBtn = document.getElementById('login');
let signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', () => {
    window.location.replace('http://localhost/medimanage/public/login/login.view.php')
})

signupBtn.addEventListener('click', () => {
    window.location.replace('http://localhost/medimanage/public/register/register.view.php')
})
