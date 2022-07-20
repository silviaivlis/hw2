<html>
    <head>
        <title>goodreads</title>
        <link rel="stylesheet" href="{{ url('css/mybooks.css') }}" />
        <script src="{{ url('js/mybooks.js') }}" defer></script>
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
                my<strong>books</strong>
            </div>

            <div id="bottoni">
                <div id="b_libreria" class="selezionato">I tuoi libri</div>
                <div id="b_libri">Cerca e aggiungi libri</div>
            </div>

            <section>
               <div id="libreria">
                    <h3>
                       LA MIA LIBRERIA
                    </h3>

                    <div id="personal-library-view">
                    </div>
               </div>

               <div id="libri" class="vista">
                    <form>
                        Inserisci il titolo di un libro
                        <label>
                            <input type='text' id='author'>
                            <input type='submit' id='submit' value='CERCA'>
                        </label>
                    </form>

                    <p id="library-view">
                    </p>
                </div>
            </section>
        </main>
    </body>
</html>