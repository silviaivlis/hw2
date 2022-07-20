<html>
    <head>
        <title>goodreads</title>
        <link rel="stylesheet" href="{{ url('css/registrazione.css') }}" />
        <script src="{{ url('js/registrazione.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <main>
            <div id="registrati">
                <a href="{{ route('homepage') }}" id="titolo">
                    good<strong>reads</strong>
                </a>
                <h3>benvenuto!</h3>

                <form name="registazione" method="post" action="{{ route('registration') }}">
                    @csrf
                    <section>
                        <div>
                            <label>
                                Nome <input type="text" name="nome" value='{{ old("nome") }}'>
                                <span id="nome" class="errore"></span>
                            </label>
                            
                            <label>
                                Cognome <input type="text" name="cognome" value='{{ old("cognome") }}'>
                                <span id="cognome" class="errore"></span>
                            </label>
                        </div>

                        <div>
                            <label>
                                Username <input type="text" name="username" value='{{ old("username") }}'>
                                <span id="username" class="errore"></span>
                            </label>

                            <label>
                                E-mail <input type="text" name="email" value='{{ old("email") }}'>
                                <span id="email" class="errore"></span>
                            </label>
                        </div>

                        <div>
                            <label>
                                Password <input type="password" name="password">
                                <span id="password" class="errore"></span>
                            </label>
                            
                            <label>
                                Conferma password <input type="password" name="conferma-password">
                                <span id="conferma-password" class="errore"></span>
                            </label>
                        </div>
                    </section>

                    <input id="bottone" type="submit" value="REGISTRATI">
                </form>

                <div id="accedi">
                    Hai già un account? <a href="{{ url('login') }}">Accedi</a>
                </div>
                
             </div>
        </main>
    </body>
</html>