<html>
    <head>
        <title>goodreads</title>
        <link rel="stylesheet" href="{{ url('css/login.css') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <main>
            <div id="accedi">
            
                <a href="{{ route('homepage') }}" id="titolo">
                    good<strong>reads</strong>
                </a>
                <h3>bentornato!</h3>

                @if($error)
                    <div id='errore'>Username e/o password errati.</div>
                @endif

                <form name="login" method="post" action="{{ route('reglogin') }}">
                    @csrf
                    <label>
                        Username <input type="text" name="username">
                    </label>
                
                    <label>
                        Password <input type="password" name="password">
                    </label>

                    <input id="bottone" type="submit" value="ACCEDI">
                </form>

                <div id="registrati">
                    Non hai ancora un account? <a href="{{ route('register') }}">Registrati</a>
                </div>

             </div>
        </main>
    </body>
</html>