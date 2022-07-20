/* ---------- FUNZIONAMENTO QUIZ ---------- */

const checked = '../immagini/checked.png';
const unchecked ='../immagini/unchecked.png';
const scores = { "fiction": 0, "music history": 0, "travel guide": 0, "artists' books": 0, "philosophy": 0, "murder mystery": 0};

function onClick(event)
{
  const box = event.currentTarget;
  const container = box.parentElement;
  const vector = container.querySelectorAll('div');

  for(const items of vector){
    items.classList.remove('selezionato');
    items.classList.add('scartato');
    const image = items.querySelector('.checkbox');
    image.src = unchecked;
  }

  box.classList.remove('scartato');
  box.classList.add('selezionato');
  const image = box.querySelector('.checkbox');
  image.src = checked;


  const selezionati = document.querySelectorAll('.selezionato');
  const boxes = document.querySelectorAll('.choice-grid div');
  const risultato = document.querySelector('#risultato');

  let flag = false;

  if(selezionati.length == 3){
    for (const box of boxes)
    {
      box.removeEventListener('click', onClick);
    }

    for(const selezionato of selezionati){
      const choiceid = selezionato.dataset.choiceId;
      const questionid = selezionato.dataset.questionId;

      if(questionid == 'one'){
        var primarisposta = choiceid;
      }
      scores[choiceid]=scores[choiceid]+1;
    }

    for (const property in scores) {
      if(scores[property]>=2){
        const subject = property;
        console.log(subject);
        search(subject);
        flag = true;
        break;
      }
    }

    if(flag === false){
      const subject = primarisposta;
      console.log(subject);
      search(subject);
    }

    risultato.classList.remove('hidden');
  }
}

function refresh(){
  const boxes = document.querySelectorAll('.choice-grid div');
  const risultato = document.querySelector('#risultato');
  const library = document.querySelector('#library-view');
  library.innerHTML = '';

  for(const box of boxes){
    box.classList.remove('selezionato');
    box.classList.remove('scartato');
    const image = box.querySelector('.checkbox');
    image.src = unchecked;
    box.addEventListener('click', onClick);
  }

  risultato.classList.add('hidden');

  for (const property in scores) {
    scores[property] = 0;
  }

  scrollTo(0,0);
}

const boxes = document.querySelectorAll('.choice-grid div');
for (const box of boxes)
{
  box.addEventListener('click', onClick);
}

const button = document.querySelector('#reset');
button.addEventListener('click', refresh);


/* ---------- API GOOGLE BOOKS ---------- */

function onJson(json)
{   
  console.log(json)

  const library = document.querySelector('#library-view');
  
  let i=0;
  const lenght=10;
  
  for(i=0; i<lenght; i++)
  {
    const doc = json.items[i]
  
    const cover = doc.volumeInfo.imageLinks;
    if(cover!==undefined){
      const cover_url = cover.thumbnail;
      const title = doc.volumeInfo.title;
      const author = doc.volumeInfo.authors;
      const id=doc.id;
      
      const book = document.createElement('div');
      const sezione = document.createElement('article');
      book.classList.add('book');
      sezione.classList.add('contenuto');
      
      const img = document.createElement('img');
      img.classList.add('copertina')
      img.src = cover_url;
      
      const caption = document.createElement('div');
      caption.classList.add('titolo');
      caption.textContent = title;
      
      const autore = document.createElement('div');
      autore.classList.add('autore');
      autore.textContent = author;
      
      const button = document.createElement('a');
      button.classList.add('bottone');
      button.href="https://books.google.com/ebooks?id="+id;
      button.textContent = 'e-book';
      
      book.appendChild(img);
      book.appendChild(sezione);
      sezione.appendChild(caption);
      sezione.appendChild(autore);
      sezione.appendChild(button);
      
      library.appendChild(book);
    }
  }
}

function onResponse(response) {
  console.log('Risposta ricevuta');
  return response.json();
}

function search(subject)
{
  console.log('Eseguo ricerca: '+subject);
  fetch("/libroperfetto/risultati/"+encodeURIComponent(subject)).then(onResponse).then(onJson);
}