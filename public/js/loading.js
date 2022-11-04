const number = document.getElementById('number');
const animated = document.querySelector('.animated');
const body  = document.querySelector('body');
let counter = 1;

function increase() {
    number.innerHTML = counter;
    counter++;
}
setInterval(increase, 50);

function hide() {
    animated.style.display = 'none';
    body.style.display  = 'inline';
}
setTimeout(hide, 5085);