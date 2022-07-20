/* ---------- VISULIZZAZIONE/INSERIMENTO/ELIMINAZIONE RECENSIONI ---------- */

function onResponse(response){
    console.log(response);
    return response.json();
}

fetch("/recensioni/visualizza").then(onResponse).then(inserimento);

function inserimento(json){
    console.log(json);

    const bacheca = document.querySelector('#recensioni');
    for(const i of json){
        const conteiner = document.createElement('div');
        conteiner.classList.add('conteiner');

        const username = document.createElement('p');
        username.classList.add('username');
        username.textContent = '@'+i.username;

        const titolo = document.createElement('p');
        titolo.classList.add('title');
        titolo.textContent = 'Titolo: '+i.titolo;

        const autore = document.createElement('p');
        autore.classList.add('autore');
        autore.textContent = 'Autore: '+i.autore;

        const testo = document.createElement('p');
        testo.classList.add('text');
        testo.textContent = i.testo;

        const cestino = document.createElement('img');
        cestino.classList.add('icon1');
        cestino.src = '../immagini/cestino.jpeg';
        cestino.addEventListener('click', elimina);

        conteiner.appendChild(username);
        conteiner.appendChild(titolo);
        conteiner.appendChild(autore);
        conteiner.appendChild(testo);

        const user = document.querySelector('#saluto strong').textContent;
        if(user == i.username){
            conteiner.appendChild(cestino);
        }

        bacheca.appendChild(conteiner);
    }
}

function elimina(event){
    const cestino = event.currentTarget;
    const recensione = cestino.closest('.conteiner');
    const testo = recensione.querySelector('.text').textContent;
    
    recensione.remove();
    fetch("/recensioni/elimina/"+encodeURIComponent(testo));
}

/* ---------- MOBILE ---------- */

function onClick1(event){
    const bottone1 = event.currentTarget;
    const div = bottone1.parentNode;
    const bottone2 = div.querySelector('#b_recensioni')
    const recensioni =  document.querySelector('#grande');
    const recensione =  document.querySelector('#piccolo');

    recensioni.classList.add('hidden');
    recensione.classList.remove('hidden');
    bottone1.classList.add('selezionato');
    bottone2.classList.remove('selezionato');
}

function onClick2(event){
    const bottone1 = event.currentTarget;
    const div = bottone1.parentNode;
    const bottone2 = div.querySelector('#b_recensione')
    const recensioni =  document.querySelector('#grande');
    const recensione =  document.querySelector('#piccolo');

    recensioni.classList.remove('hidden');
    recensione.classList.add('hidden');
    bottone1.classList.add('selezionato');
    bottone2.classList.remove('selezionato');
}

const b_recensione = document.querySelector('#b_recensione');
b_recensione.addEventListener('click', onClick1);

const b_recensioni = document.querySelector('#b_recensioni');
b_recensioni.addEventListener('click', onClick2);