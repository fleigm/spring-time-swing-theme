window.addEventListener('load', function () {
    let main_navigation = document.querySelector('#primary-menu');
    document.querySelector('#primary-menu-toggle')
        .addEventListener('click', e => {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
        });
});
