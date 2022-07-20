<html>
    <head>
        <title>goodreads</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo e(url('css/homepage.css')); ?>" />
        <script src="<?php echo e(url('js/homepage.js')); ?>" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header> 
            <div id="sfondo">
                <nav>
                    <div id="links">
                        <a href="<?php echo e(route('login')); ?>">Accedi</a>
                        <a href="<?php echo e(route('registration')); ?>" class="button">Registrati</a>
                    </div>
    
                    <div id="menu">
                        <span class="fa-solid fa-bars"></span>
                    </div>
                </nav>

                <div id="tendina" class="hidden">
                    <div id="flex-conteiner">
                        <span class="fa-solid fa-xmark" id="close"></span>
                        <div id="links-tendina">
                            <a href="<?php echo e(route('login')); ?>">Accedi</a>
                            <a href="<?php echo e(route('registration')); ?>">Registrati</a>
                        </div>
                    </div>
                </div>

                <section>
                    <div class="titolo">
                        good<strong>reads</strong>
                    </div>
                    <div id="sottotitolo">
                        a tutti coloro che amano leggere e che desiderano condividere con altri lettori le proprie sensazioni, emozioni, opinioni e le proprie storie.
                    </div>
                </section>
                
            </div>
        </header>

        <main>
            <div class="titolo">come<strong>funziona</strong></div>
            <article id="fasi">
                <div class="istruzione">
                    <h3>Registrati</h3>
                    <span class="fa-solid fa-user-plus"></span>
                    <div>Registrati in poche e semplici mosse al nostro sito web.</div>
                </div>

                <div class="istruzione">
                    <h3>Leggi</h3>
                    <span class="fa-solid fa-book-open"></span>
                    <div>Leggi al tuo ritmo qualsiasi libro che stuzzichi la tua curiosità.</div>
                </div>

                <div class="istruzione">
                    <h3>Condividi</h3>
                    <span class="fa-solid fa-message"></span>
                    <div>Condividi le tue opinioni con gli altri lettori.</div>
                </div>
            </article>
        </main>

        <article id="rubrica">
            <a href="<?php echo e(route('column')); ?>" class="titolo">rubrica<strong>letteraria</strong></a>

            <div id="vetrina">
                <div class="articolo">
                    <div class="immagine">
                        <img src="immagini/Lucinda Riley.jpeg">
                    </div>
                    <div class="testo">
                        <p>Storie di donne: Lucinda Riley</p>
                        <em>Lucinda Riley è ormai famosa in tutto il mondo per i suoi libri, soprattutto per la famosissima saga Le sette sorelle, ma non molti conoscono la sua vita movimentata e stravagante.</em>
                    </div>
                </div>
                
                <div class="articolo">
                    <div class="immagine">
                        <img src="immagini/agatha christie.jpeg">
                    </div>
                    <div class="testo">
                        <p>5 cose che forse non sai su Agatha Christie</p>
                        <em>Agatha Christie, regina del mistero, ha scritto una vertiginosa lista di libri, tra gialli, storie d'amore e racconti brevi. Ecco una lista di curiosità!</em>
                    </div>
                </div>
            
                <div class="articolo">
                    <div class="immagine">
                        <img src="immagini/italo calvino.jpeg">
                    </div>
                    <div class="testo">
                        <p>Italo Calvino racconta la magia della lettura</p>
                        <em>Come predisporsi alla lettura? Dove isolarsi? Quale posizione assumere? Ecco, i celebri consigli di Italo Calvino ai Lettori nell'incipit di "Se una notte d'inverno un viaggiatore".</em>
                    </div>
                </div>
            </div>
        </article>

        <section id="libroperfetto">
            <section>
                <div class="titolo">libro<strong>perfetto</strong></div>
                <article>
                    Regalare un libro non è sempre facile, soprattutto se la persona di cui stiamo parlando ha dei gusti diversi dai nostri. Come fare quindi per non fallire nella scelta del libro perfetto? Forse è proprio la scelta così ampia che rende tutto più difficile, ecco perchè vi proponiamo un percorso di 3 semplici domande mirate a filtrare le proposte sulla base alle tue risposte. Che cosa aspetti? Registrati per provarlo!
                </article>
            </section>
        </section>

        <footer>
            <div>good<strong>reads</strong> - 2022</div>
            <div>Powered by Silvia Garozzo 1000001999</div>
        </footer>

    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/homepage.blade.php ENDPATH**/ ?>