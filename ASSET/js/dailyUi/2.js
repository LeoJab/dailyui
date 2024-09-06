document.addEventListener('DOMContentLoaded', () => {
    console.log('JS Chargé !');

    var btnPlus = document.querySelectorAll('.plus');
    var btnMoins = document.querySelectorAll('.moins');
    var number = document.querySelectorAll('.number');

    console.log(btnPlus, btnMoins, number);

    for(let i = 0; i < number.length; i++) {
        btnPlus[i].addEventListener('click', () => {
            console.log('Click !');
            number[i].innerHTML = (parseInt(number[i].textContent) + 1);
        })

        btnMoins[i].addEventListener('click', () => {
            console.log('Click !');
            number[i].innerHTML = (parseInt(number[i].textContent) - 1);
        })
    };
})