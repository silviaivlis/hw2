<html>
    <head>
        <title>goodreads</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ url('css/columnlogin.css') }}" />
        <script src="{{ url('js/columnlogin.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
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
            <div id="titolo">rubrica<strong>letteraria</strong></div>

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