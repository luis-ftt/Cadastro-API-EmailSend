document.addEventListener('DOMContentLoaded', function () {
    const toRegister = document.getElementById('toRegister');
    const toLogin = document.getElementById('toLogin');
    const login = document.getElementById('LoginForm');
    const register = document.getElementById('registerForm');

    toRegister.addEventListener('click', () => {
        login.classList.remove('translate-x-0');
        login.classList.add('translate-x-[300%]');

        setTimeout(() => {
            login.classList.add('hidden');
            login.classList.remove('translate-x-[300%]');

            register.classList.remove('hidden');
            register.classList.remove('translate-x-full', 'translate-x-[300%]');
            register.classList.add('translate-x-0');
        }, 500);
    });

    toLogin.addEventListener('click', () => {
        register.classList.remove('translate-x-0');
        register.classList.add('translate-x-[300%]');

        setTimeout(() => {
            register.classList.add('hidden');
            register.classList.remove('translate-x-[300%]');
            login.classList.remove('hidden');
            login.classList.remove('translate-x-full', 'translate-x-[300%]');
            login.classList.add('translate-x-0');
        }, 500);
    });
});
