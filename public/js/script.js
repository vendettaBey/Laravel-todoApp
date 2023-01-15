$(document).ready(function () {




    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function () {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });


    const rate1Btn = document.querySelector('.rate1');
    const rate2Btn = document.querySelector('.rate2');
    const rate3Btn = document.querySelector('.rate3');
    const rate4Btn = document.querySelector('.rate4');
    const rate5Btn = document.querySelector('.rate5');
    const resInput = document.querySelector('#result');


    $(rate5Btn).click(function () {
        rate1Btn.children[0].classList.add('text-yellow-500');
        rate2Btn.children[0].classList.add('text-yellow-500');
        rate3Btn.children[0].classList.add('text-yellow-500');
        rate4Btn.children[0].classList.add('text-yellow-500');
        rate5Btn.children[0].classList.add('text-yellow-500');
        rate1Btn.children[0].classList.add('dark:text-yellow-500');
        rate2Btn.children[0].classList.add('dark:text-yellow-500');
        rate3Btn.children[0].classList.add('dark:text-yellow-500');
        rate4Btn.children[0].classList.add('dark:text-yellow-500');
        rate5Btn.children[0].classList.add('dark:text-yellow-500');
        rate1Btn.children[0].classList.remove('dark:text-gray-600');
        rate2Btn.children[0].classList.remove('dark:text-gray-600');
        rate3Btn.children[0].classList.remove('dark:text-gray-600');
        rate4Btn.children[0].classList.remove('dark:text-gray-600');
        rate5Btn.children[0].classList.remove('dark:text-gray-600');
        resInput.value = 5;
        console.log(resInput.value);
    });
    $(rate4Btn).click(function () {
        rate1Btn.children[0].classList.add('text-yellow-500');
        rate2Btn.children[0].classList.add('text-yellow-500');
        rate3Btn.children[0].classList.add('text-yellow-500');
        rate4Btn.children[0].classList.add('text-yellow-500');
        rate1Btn.children[0].classList.add('dark:text-yellow-500');
        rate2Btn.children[0].classList.add('dark:text-yellow-500');
        rate3Btn.children[0].classList.add('dark:text-yellow-500');
        rate4Btn.children[0].classList.add('dark:text-yellow-500');
        rate1Btn.children[0].classList.remove('dark:text-gray-600');
        rate2Btn.children[0].classList.remove('dark:text-gray-600');
        rate3Btn.children[0].classList.remove('dark:text-gray-600');
        rate4Btn.children[0].classList.remove('dark:text-gray-600');
        rate5Btn.children[0].classList.remove('dark:text-yellow-500');
        rate5Btn.children[0].classList.add('dark:text-gray-600');
        resInput.value = 4;
        console.log(resInput.value);
    });
    $(rate3Btn).click(function () {
        rate1Btn.children[0].classList.add('text-yellow-500');
        rate2Btn.children[0].classList.add('text-yellow-500');
        rate3Btn.children[0].classList.add('text-yellow-500');
        rate1Btn.children[0].classList.add('dark:text-yellow-500');
        rate2Btn.children[0].classList.add('dark:text-yellow-500');
        rate3Btn.children[0].classList.add('dark:text-yellow-500');
        rate1Btn.children[0].classList.remove('dark:text-gray-600');
        rate2Btn.children[0].classList.remove('dark:text-gray-600');
        rate3Btn.children[0].classList.remove('dark:text-gray-600');
        rate4Btn.children[0].classList.remove('dark:text-yellow-500');
        rate4Btn.children[0].classList.add('dark:text-gray-600');
        rate5Btn.children[0].classList.remove('dark:text-yellow-500');
        rate5Btn.children[0].classList.add('dark:text-gray-600');
        resInput.value = 3;
        console.log(resInput.value);
    });
    $(rate2Btn).click(function () {
        rate1Btn.children[0].classList.add('text-yellow-500');
        rate2Btn.children[0].classList.add('text-yellow-500');
        rate1Btn.children[0].classList.add('dark:text-yellow-500');
        rate2Btn.children[0].classList.add('dark:text-yellow-500');
        rate1Btn.children[0].classList.remove('dark:text-gray-600');
        rate2Btn.children[0].classList.remove('dark:text-gray-600');
        rate3Btn.children[0].classList.remove('dark:text-yellow-500');
        rate3Btn.children[0].classList.add('dark:text-gray-600');
        rate4Btn.children[0].classList.remove('dark:text-yellow-500');
        rate4Btn.children[0].classList.add('dark:text-gray-600');
        rate5Btn.children[0].classList.remove('dark:text-yellow-500');
        rate5Btn.children[0].classList.add('dark:text-gray-600');
        resInput.value = 2;
        console.log(resInput.value);
    });
    $(rate1Btn).click(function () {
        rate1Btn.children[0].classList.add('text-yellow-500');
        rate1Btn.children[0].classList.add('dark:text-yellow-500');
        rate1Btn.children[0].classList.remove('dark:text-gray-600');
        rate2Btn.children[0].classList.remove('dark:text-yellow-500');
        rate2Btn.children[0].classList.add('dark:text-gray-600');
        rate3Btn.children[0].classList.remove('dark:text-yellow-500');
        rate3Btn.children[0].classList.add('dark:text-gray-600');
        rate4Btn.children[0].classList.remove('dark:text-yellow-500');
        rate4Btn.children[0].classList.add('dark:text-gray-600');
        rate5Btn.children[0].classList.remove('dark:text-yellow-500');
        rate5Btn.children[0].classList.add('dark:text-gray-600');
        resInput.value = 1;
        console.log(resInput.value);
    });

    $('#tasksTable').DataTable({

    });






});
