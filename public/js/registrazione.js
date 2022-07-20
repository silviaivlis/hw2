function nome(event){
    const nome = event.currentTarget;
    const errore = document.querySelector('#nome');
    if(nome.value.length !== 0){
        nome.classList.remove('bordo_rosso');
        nome.classList.add('bordo_verde');
        errore.textContent = '';
    }else{
        errore.textContent = 'Inserire nome';
        nome.classList.remove('bordo_verde');
        nome.classList.add('bordo_rosso');
    }
}

function cognome(event){
    const cognome = event.currentTarget;
    const errore = document.querySelector('#cognome');
    if(cognome.value.length !== 0){
        cognome.classList.remove('bordo_rosso');
        cognome.classList.add('bordo_verde');
        errore.textContent = '';
    }else{
        errore.textContent = 'Inserire cognome';
        cognome.classList.remove('bordo_verde');
        cognome.classList.add('bordo_rosso');
    }
}

function onResponse(response){
    return response.json();
}

function username(event){
    const username = event.currentTarget;
    const errore = document.querySelector('#username');
    if(username.value.length<16 && username.value.length>4){

        fetch("register/username/"+encodeURIComponent(username.value)).then(onResponse).then(verificaUsername);
    }
    else{
        errore.textContent = "Username non valido";
        username.classList.add('bordo_rosso');
        username.classList.remove('bordo_verde');
    }
}

function verificaUsername(json){
    const username = document.querySelector('input[name="username"]');
    const errore = document.querySelector('#username');
    console.log(json.exists);
    if(json.exists == true){
        errore.textContent = "Username non disponibile";
        username.classList.add('bordo_rosso');
        username.classList.remove('bordo_verde');
    }else{
        username.classList.remove('bordo_rosso');
        username.classList.add('bordo_verde');
        errore.textContent = "";
    }
}

function email(event){
    const email = event.currentTarget;
    const errore = document.querySelector('#email');
    if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(email.value).toLowerCase())){
        errore.textContent = 'Email errata';
        email.classList.add('bordo_rosso');
        email.classList.remove('bordo_verde');
    }else{
        fetch("register/email/"+encodeURIComponent(String(email.value).toLowerCase())).then(onResponse).then(verificaEmail);
    }
}

function verificaEmail(json){
    const email = document.querySelector('input[name="email"]');
    const errore = document.querySelector('#email');
    if(json.exists == true){
        errore.textContent = "Esiste già un account associato a questa e-mail";
        email.classList.add('bordo_rosso');
        email.classList.remove('bordo-verde');
    }else{
        email.classList.remove('bordo_rosso');
        email.classList.add('bordo_verde');
        errore.textContent = '';
    }
}

let pw = document.querySelector('input[name="password"]');
function password(){
    const errore = document.querySelector('#password');

    if(pw.value.length == 0 || pw.value.length < 8){
        errore.textContent = 'Sono richiesti almeno 8 caratteri';
        pw.classList.add('bordo_rosso');
        pw.classList.remove('bordo_verde');
    }else{
        errore.textContent = '';
        pw.classList.add('bordo_verde');
        pw.classList.remove('bordo_rosso');
    }
}

function confermaPassword(event){
    const cpw = event.currentTarget;
    const errore = document.querySelector('#conferma-password');
    if(pw.value !== cpw.value || cpw.value.length == 0){
        errore.textContent = 'Le password non coincidono';
        cpw.classList.add('bordo_rosso');
        cpw.classList.remove('bordo_verde');
    }else{
        errore.textContent = '';
        cpw.classList.add('bordo_verde');
        cpw.classList.remove('bordo_rosso');
    }
}

document.querySelector('input[name="nome"]').addEventListener('blur', nome);
document.querySelector('input[name="cognome"]').addEventListener('blur', cognome);
document.querySelector('input[name="username"]').addEventListener('blur', username);
document.querySelector('input[name="email"]').addEventListener('blur', email);
document.querySelector('input[name="password"]').addEventListener('blur', password);
document.querySelector('input[name="conferma-password"]').addEventListener('blur', confermaPassword);