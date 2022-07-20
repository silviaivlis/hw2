<html>
    <head>
        <title>goodreads</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo e(url('css/libroperfetto.css')); ?>" />
        <script src="<?php echo e(url('js/libroperfetto.js')); ?>" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header> 
            <div id="sfondo">
                <nav>
                    <div id="links">
                        <a href="<?php echo e(route('home')); ?>">Home</a>
                    </div>
                </nav>

                <a href="<?php echo e(route('home')); ?>" id="saluto">
                    ciao<strong><?php echo e($user['username']); ?></strong>
                </a>
            </div>
        </header>

        <main>
            <div id="titolo">
                libro<strong>perfetto</strong>
            </div>

            <article id="test">
                
                <h1>Domanda 1: se dovessi descriverlo con un aggettivo quale sceglieresti?</h1>
                
                <section class="choice-grid">
                    <div data-choice-id="fiction" data-question-id="one">
                    <p>Eclettico</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="music history" data-question-id="one">
                    <p>Sensibile</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="travel guide" data-question-id="one">
                    <p>Avventuroso</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="artists' books" data-question-id="one">
                    <p>Creativo</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="philosophy" data-question-id="one">
                    <p>Profondo</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="murder mystery" data-question-id="one">
                    <p>Misterioso</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>
                </section>

                <h1>Domanda 2: se doveste partire insieme per un viaggio, dove andreste?</h1>

                <section class="choice-grid">
                    <div data-choice-id="fiction" data-question-id="two">
                    <p>A New York, per sentirsi al centro del mondo</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="music history" data-question-id="two">
                    <p>A Vienna, per visitare la casa di Mozart</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="travel guide" data-question-id="two">
                    <p>In Sudafrica, per fare un affascinante safari</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="artists' books" data-question-id="two">
                    <p>A Firenze, per ammirare la Venere di Botticelli</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="philosophy" data-question-id="two">
                    <p>In Grecia, per conoscere l'Agorà di Atene</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="murder mystery" data-question-id="two">
                    <p>In Egitto, per scoprire le tombe dei faraoni</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>
                </section>

                <h1>Domanda 3: quale oggetto pensi che lo rappresenti meglio?</h1>

                <section class="choice-grid">
                    <div data-choice-id="fiction" data-question-id="three">
                    <p>Un anello</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="music history" data-question-id="three">
                    <p>Un giradischi</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="travel guide" data-question-id="three">
                    <p>Il suo passaporto</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="artists' books" data-question-id="three">
                    <p>Una borsa di tela</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="philosophy" data-question-id="three">
                    <p>Una biro</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>

                    <div data-choice-id="murder mystery" data-question-id="three">
                    <p>Un rompicapo</p>
                    <img class="checkbox" src="../immagini/unchecked.png"/>
                    </div>
                </section>

                <div id="risultato" class="hidden">
                    <h1>Ecco la nostra selezione pensata per te:</h1>

                    <article id="library-view">
                    </article>

                    <a id="reset">Ripeti il questionario</a>
                </div>

            </article>
        </main>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/libroperfetto.blade.php ENDPATH**/ ?>