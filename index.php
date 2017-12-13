<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Rede Social</title>
        <link rel="stylesheet" href="_css/estilos.css">
        <link rel="shortcut icon" href="_favicon/logo.png" type="image/x-icon">
    </head>
    
    <body>
        <div class="cabecalho">
            <header id="logo">
                <h1>Rede Social</h1>
            </header>

            <header id="login">
                <h2>LOGIN</h2>

                <?php include("/_php/get_post.php"); ?>
            </header>
        </div>

        <div class="principal">
            <section id="corpo">
                <h2>Entra em contacto com os teus Amigos!</h2>
                <p>...entre outras funcionalidades!</p>

                <h2>Partilha fotos, vídeos e experiências!</h2>
                <p>... e muito mais!</p>

                <img id="mundo" src="_images/world.png" alt="the_world">
            </section>

            <aside id="lateral">
                <h2>Não tens conta?<br/> Regista-te!</h2>

                <?php include("/_php/get_post2.php"); ?>
            </aside>

            <footer id="rodape">
                Rede Social &copy; 2017
            </footer>
        </div>
    </body>
</html>