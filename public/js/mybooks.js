/* ---------- API GOOGLE BOOKS ---------- */

function onJson(json){   
  console.log(json)

  const library = document.querySelector('#library-view');
  library.innerHTML = '';

  let i=0;
  for(i=0; i<lenght; i++)
  {
    const doc = json.items[i]
    const cover = doc.volumeInfo.imageLinks;
    if(cover!==undefined){
      const cover_url = cover.thumbnail;
      const title = doc.volumeInfo.title;
      const author = doc.volumeInfo.authors;
      const id=doc.id;
      const descrizione=doc.volumeInfo.description;

      const book = document.createElement('div');
      const sezione = document.createElement('article');
      book.classList.add('book');
      sezione.classList.add('contenuto');
      
      const img = document.createElement('img');
      img.classList.add('copertina')
      img.src = cover_url;
      
      const caption = document.createElement('span');
      caption.classList.add('titolo');
      caption.textContent = title;
      
      const autore = document.createElement('span');
      autore.classList.add('autore');
      autore.textContent = author;
      
      const contenitore = document.createElement('div');
      contenitore.classList.add('flex-conteiner');
      const button = document.createElement('a');
      button.classList.add('bottone');
      button.href="https://books.google.com/ebooks?id="+id;
      button.textContent = 'e-book';
      const icon1 = document.createElement('img');
      icon1.classList.add('icon1');
      icon1.src = '../immagini/aggiungi.jpeg';
      icon1.addEventListener('click', aggiungi);
      const icon2 = document.createElement('img');
      icon2.classList.add('hidden');
      icon2.src = '../immagini/aggiunto.jpeg';

      const paragrafo=document.createElement('div');
      paragrafo.classList.add('testo')
      paragrafo.textContent=descrizione;

      book.appendChild(img);
      book.appendChild(sezione);
      sezione.appendChild(caption);
      sezione.appendChild(autore);
      sezione.appendChild(paragrafo);
      sezione.appendChild(contenitore);
      contenitore.appendChild(button);
      contenitore.appendChild(icon1);
      contenitore.appendChild(icon2);
      
      library.appendChild(book);
    }
  }
}

const lenght=20;

function onResponse(response){
  console.log('Risposta ricevuta');
  return response.json();
}

function search(event){
  event.preventDefault();
  const book_input = document.querySelector('#author');
  const book_value = encodeURIComponent(book_input.value);
  console.log('Eseguo ricerca: '+book_value);
  fetch("/mybooks/titolo/"+book_value).then(onResponse).then(onJson);
}

const form = document.querySelector('form');
form.addEventListener('submit', search);

/* ---------- VISULIZZAZIONE/INSERIMENTO/ELIMINAZIONE LIBRI ---------- */

function aggiungi(event){
  const nonaggiunto = event.currentTarget;
  const span = nonaggiunto.parentNode;
  const aggiunto = span.querySelector('.hidden');

  nonaggiunto.classList.add('hidden');
  aggiunto.classList.remove('hidden');
  aggiunto.classList.add('icon2');


  const book = aggiunto.closest('.book');
  console.log (book);
  const copertina = book.querySelector('.copertina').src;
  console.log(copertina);
  const titolo = book.querySelector('.titolo').textContent;
  console.log(titolo);
  const autore = book.querySelector('.autore').textContent;
  console.log(autore);
  
  fetch("/mybooks/aggiungi?copertina=" + encodeURIComponent(copertina) + "&titolo=" + encodeURIComponent(titolo) + "&autore="+encodeURIComponent(autore)).then(newfetch);
}

function newfetch(){
  fetch("/mybooks/visualizza").then(onResponse).then(inserimento);
}

fetch("/mybooks/visualizza").then(onResponse).then(inserimento);

function inserimento(json){
  console.log(json);

  const libreria = document.querySelector('#personal-library-view');
  libreria.innerHTML = '';
  for(const i of json){
    const book = document.createElement('div');
    const sezione = document.createElement('article');
    book.classList.add('book');
    sezione.classList.add('contenuto');
    
    const img = document.createElement('img');
    img.classList.add('copertina')
    img.src = i.immagine;
    
    const caption = document.createElement('span');
    caption.classList.add('titolo');
    caption.textContent = i.titolo;
    
    const autore = document.createElement('span');
    autore.classList.add('autore');
    autore.textContent = i.autore;
    
    const cestino = document.createElement('img');
    cestino.classList.add('icon1');
    cestino.src = '../immagini/cestino.jpeg';
    cestino.addEventListener('click', elimina);

    book.appendChild(img);
    book.appendChild(sezione);
    sezione.appendChild(caption);
    sezione.appendChild(autore);
    sezione.appendChild(cestino);

    libreria.appendChild(book);
  }
}

function elimina(event){
  const cestino = event.currentTarget;
  const book = cestino.closest('.book');
  const titolo = book.querySelector('.titolo').textContent;
  const copertina = book.querySelector('.copertina').src;

  book.remove();
  fetch('/mybooks/elimina?titolo='+ encodeURIComponent(titolo)+"&copertina="+encodeURIComponent(copertina));
}

/* ---------- MOBILE ---------- */

function onClick1(event){
  const bottone1 = event.currentTarget;
  const div = bottone1.parentNode;
  const bottone2 = div.querySelector('#b_libri')
  const libri =  document.querySelector('#libri');
  const libreria =  document.querySelector('#libreria');

  libri.classList.add('vista');
  libreria.classList.remove('vista');
  bottone1.classList.add('selezionato');
  bottone2.classList.remove('selezionato');

}

function onClick2(event){
  const bottone1 = event.currentTarget;
  const div = bottone1.parentNode;
  const bottone2 = div.querySelector('#b_libreria')
  const libri =  document.querySelector('#libri');
  const libreria =  document.querySelector('#libreria');

  libri.classList.remove('vista');
  libreria.classList.add('vista');
  bottone1.classList.add('selezionato');
  bottone2.classList.remove('selezionato');
}

const b_libreria = document.querySelector('#b_libreria');
b_libreria.addEventListener('click', onClick1);

const b_libri = document.querySelector('#b_libri');
b_libri.addEventListener('click', onClick2);