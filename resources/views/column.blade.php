<html>
    <head>
        <title>goodreads</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ url('css/rubrica.css') }}" />
        <script src="{{ url('js/rubricaletteraria.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header> 
            <div id="sfondo">
                <nav>
                    <div id="links">
                        <a href="{{ route('homepage') }}">Home</a>
                        <a href="{{ route('login') }}">Accedi</a>
                        <a href="{{ route('register') }}" class="button">Registrati</a>
                    </div>
    
                    <div id="menu">
                        <span class="fa-solid fa-bars"></span>
                    </div>
                </nav>

                <div id="tendina" class="hidden">
                    <div id="flex-conteiner">
                        <span class="fa-solid fa-xmark" id="close"></span>
                        <div id="links-tendina">
                            <a href="{{ route('homepage') }}">Home</a>
                            <a href="{{ route('login') }}">Accedi</a>
                            <a href="{{ route('registration') }}">Registrati</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('homepage') }}" class="titolo">
                    good<strong>reads</strong>
                </a>
            </div>
        </header>

        <main>
            <div class="titolo">rubrica<strong>letteraria</strong></div>

            <div id="sottotitolo">La redazione di good<strong>reads</strong>, guidata della capo redattrice Maria Rossi, cura una rubrica letteraria che realizza articoli a 360° sul mondo della lettura: interviste, curiosità, approfondimenti sugli autori e molto altro! </br>Registrati al nostro sito per contribuire e vedere pubblicato un tuo pezzo!</div>

            <section class="articoli">
                
            </section>

            <section id="articolo" class="hidden">

            </section>
        </main>

        <footer>
            <div>good<strong>reads</strong> - 2022</div>
            <div>Powered by Silvia Garozzo 1000001999</div>
        </footer>
    </body>
</html>