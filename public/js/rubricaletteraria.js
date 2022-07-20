//VISUALIZZAZIONE DI TUTTI GLI ARTICOLI

function inserimento(json){
    console.log(json);
  
    const sezione = document.querySelector('.articoli');
    sezione.innerHTML = '';
    for(const i of json){
      const articolo = document.createElement('article');
      const immagine = document.createElement('img');
      immagine.src = i.immagine;
      const corpo = document.createElement('div');
      corpo.classList.add('testo');
      const titolo = document.createElement('a');
      titolo.textContent = i.titolo;
      titolo.addEventListener('click', onClick1);
      const testo = document.createElement('em');
      testo.textContent = i.anteprima;
      const link = document.createElement('button');
      link.textContent = "LEGGI ARTICOLO";
      link.addEventListener('click', onClick);
  
      articolo.appendChild(immagine);
      articolo.appendChild(corpo);
      corpo.appendChild(titolo);
      corpo.appendChild(testo);
      corpo.appendChild(link);
  
      sezione.appendChild(articolo);
    }
}

function onResponse(response){
    console.log('Risposta ricevuta');
    return response.json();
}

function onClick(event){
    const button = event.currentTarget;
    const corpo = button.parentNode;
    const a = corpo.querySelector('a');
    const articoli = document.querySelector('.articoli');
    const articolo = document.querySelector('#articolo');
    const rubrica = document.querySelector('main .titolo');
    const sottotitolo = document.querySelector('#sottotitolo');

    articoli.classList.add('hidden');
    rubrica.classList.add('hidden');
    sottotitolo.classList.add('hidden');
    articolo.classList.remove('hidden');
    scrollTo(0,0);

    const titolo = a.textContent;
    console.log(titolo);
    fetch("column/article/"+encodeURIComponent(titolo)).then(onResponse).then(visualizzazione);
}

function onClick1(event){
    const a = event.currentTarget;
    const articoli = document.querySelector('.articoli');
    const articolo = document.querySelector('#articolo');
    const rubrica = document.querySelector('main .titolo');
    const sottotitolo = document.querySelector('#sottotitolo');

    articoli.classList.add('hidden');
    rubrica.classList.add('hidden');
    sottotitolo.classList.add('hidden');
    articolo.classList.remove('hidden');
    scrollTo(0,0);

    const titolo = a.textContent;
    fetch("column/article/"+encodeURIComponent(titolo)).then(onResponse).then(visualizzazione);
}

fetch("column/articles").then(onResponse).then(inserimento);


//VISUALIZZAZIONE DEL SINGOLO ARTICOLO

function visualizzazione(json){
    console.log(json);
    
    const sezione = document.querySelector('#articolo');
    sezione.innerHTML = '';
    const titolo = document.createElement('h1');
    titolo.textContent = json.titolo;
    const div = document.createElement('div')
    const autore = document.createElement('h2');
    autore.textContent = json.autore+' | ';
    const link1 = document.createElement('div');
    link1.classList.add('titolo');
    link1.innerHTML = "rubrica<strong>letteraria</strong>";
    link1.addEventListener('click', articoli);
    const immagine = document.createElement('img');
    immagine.src = json.immagine;
    const testo = document.createElement('em');
    testo.innerHTML = json.testo;
    const link = document.createElement('button');
    link.textContent = "TORNA AGLI ARTICOLI";
    link.addEventListener('click', articoli);

    sezione.appendChild(titolo);
    //sezione.appendChild(autore);
    sezione.appendChild(div);
    div.appendChild(autore);
    div.appendChild(link1);
    sezione.appendChild(immagine);
    sezione.appendChild(testo);
    sezione.appendChild(link);
}

function articoli(){
    const libreriarticoli = document.querySelector('.articoli');
    const articolo = document.querySelector('#articolo');

    const rubrica = document.querySelector('main .titolo');
    const sottotitolo = document.querySelector('#sottotitolo');

    articolo.classList.add('hidden');
    libreriarticoli.classList.remove('hidden');
    rubrica.classList.remove('hidden');
    sottotitolo.classList.remove('hidden');

    scrollTo(0,0);
}


//MENÙ A TENDINA

function tendina(event){

    const tendina = document.querySelector('#tendina');
    const menu = event.currentTarget;
    
    tendina.classList.remove('hidden');
    menu.classList.add('hidden');
}

function menu(){

    const tendina = document.querySelector('#tendina');
    const menu = document.querySelector('#menu');
    
    tendina.classList.add('hidden');
    menu.classList.remove('hidden');
}

const button = document.querySelector('#menu');
button.addEventListener('click', tendina);

const close = document.querySelector('#close');
close.addEventListener('click', menu);