<html>
    <head>
        <title>goodreads</title>
        <link rel="stylesheet" href="{{ url('css/recensioni.css') }}" />
        <script src="{{ url('js/recensione.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header> 
            <div id="sfondo">
                <nav>
                    <div id="links">
                        <a href="{{ route('home') }}">Home</a>
                    </div>
                </nav>

                <a href="{{ route('home') }}" id="saluto">
                    ciao<strong>{{ $user['username'] }}</strong>
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
                    <form method="post" action="{{ route('createPost') }}">
                        @csrf
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
</html>