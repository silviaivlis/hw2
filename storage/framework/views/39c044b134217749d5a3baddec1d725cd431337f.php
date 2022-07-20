<html>
    <head>
        <title>goodreads</title>
        <link rel="stylesheet" href="<?php echo e(url('css/login.css')); ?>" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <main>
            <div id="accedi">
            
                <a href="<?php echo e(route('homepage')); ?>" id="titolo">
                    good<strong>reads</strong>
                </a>
                <h3>bentornato!</h3>

                <?php if($error): ?>
                    <div id='errore'>Username e/o password errati.</div>
                <?php endif; ?>

                <form name="login" method="post" action="<?php echo e(route('reglogin')); ?>">
                    <?php echo csrf_field(); ?>
                    <label>
                        Username <input type="text" name="username">
                    </label>
                
                    <label>
                        Password <input type="password" name="password">
                    </label>

                    <input id="bottone" type="submit" value="ACCEDI">
                </form>

                <div id="registrati">
                    Non hai ancora un account? <a href="<?php echo e(route('register')); ?>">Registrati</a>
                </div>

             </div>
        </main>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/login.blade.php ENDPATH**/ ?>