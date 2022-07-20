<html>
    <head>
        <title>goodreads</title>
        <link rel="stylesheet" href="<?php echo e(url('css/recensioni.css')); ?>" />
        <script src="<?php echo e(url('js/recensione.js')); ?>" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
                recensioni<strong>libri</strong>
            </div>

            <div id="bottoni">
                <div id="b_recensione" class="selezionato">Scrivi la tua recensione</div>
                <div id="b_recensioni">Tutte le recensioni</div>
            </div>

            <section>
               <div id="piccolo">
                    <form method="post" action="<?php echo e(route('createPost')); ?>">
                        <?php echo csrf_field(); ?>
                        <label>
                            Titolo del libro <input type="text" name="titolo">
                        </label>
                        
                        <label>
                            Autore del libro <input type="text" name="autore">
                        </label>

                        <p>Recensione</p>
                        <textarea name="commento" placeholder="Scrivi la tua recensione qui"></textarea>

                        <span>
                            <input id="bottone" type="submit" value="PUBBLICA">
                        </span>
                    </form>
               </div>

               <div id="grande" class="hidden">
                   <article>
                       LE RECENSIONI DEI LETTORI
                   </article>
                   <p id="recensioni">

                   </p>
                </div>
            </section>
        </main>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/recensioni.blade.php ENDPATH**/ ?>