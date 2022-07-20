function onClick(event){
    
    const tendina = document.querySelector('#tendina');
    const menu = event.currentTarget;
    
    tendina.classList.remove('hidden');
    menu.classList.add('hidden');
}

function onClick2(){

    const tendina = document.querySelector('#tendina');
    const menu = document.querySelector('#menu');
    
    tendina.classList.add('hidden');
    menu.classList.remove('hidden');
}

const button = document.querySelector('#menu');
button.addEventListener('click', onClick);

const close = document.querySelector('#close');
close.addEventListener('click', onClick2);