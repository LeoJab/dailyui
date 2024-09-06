document.addEventListener('DOMContentLoaded', () => {
    console.log('JS Chargé !');

    // Bouton sign up et sign in
    const btnSignUp = document.querySelector('.signUp');
    const btnSignIn = document.querySelector('.signIn');

    // Formulaire register et login
    const register = document.querySelector('#register');
    const login = document.querySelector('#login');
    console.log('btn: ', btnSignUp, btnSignIn, 'form: ', register, login);

    if(btnSignUp) {
        btnSignUp.addEventListener('click', () => {
            console.log('Click !');

            if(register.classList == 'none') {
                console.log('btn: ', btnSignUp, btnSignIn, 'form: ', register, login);
                register.classList.toggle('none');
                login.classList.toggle('none');
                btnSignUp.classList.toggle('active');
                btnSignIn.classList.toggle('active');
            }
        });
    };

    if(btnSignIn) {
        btnSignIn.addEventListener('click', () => {
            console.log('Click !');

            if(login.classList == 'none') {
                console.log('btn: ', btnSignUp, btnSignIn, 'form: ', register, login);
                register.classList.toggle('none');
                login.classList.toggle('none');
                btnSignUp.classList.toggle('active');
                btnSignIn.classList.toggle('active');
            }
        });
    };
})