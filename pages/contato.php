<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kenio Dev</title>

    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

</head>

<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <img src="../img/kd.png" alt="" width="55" height="28">
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu is-active">
                <div class="navbar-start">
                    <a class="navbar-item" href="../index.php">
                        Início
                    </a>

                    <a class="navbar-item" href="contato.php">
                        Contato
                    </a>


                </div>


            </div>

        </nav>

    </header>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="../img/homem.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">

                                <div class="media-content">
                                    <p class="title is-4">Kênio Farias</p>
                                    <!-- <p class="subtitle is-6">@farias</p> -->
                                    <span class="tag is-dark is-medium">Infraestrutura e Desenvolvimento</span>
                                </div>
                            </div>

                            <div class="content">
                                <p>(61)9 8336-1747</p>
                                <p>keniopf@gmail.com</p>
                                <p>Sobradinho/DF</p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Segunda Seção   -->
                <div class="column is-9">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Contato
                            </p>

                        </header>
                        <div class="card-content">
                            <div class="content">
                                <div class="field">
                                    <label class="label">Nome</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Insira seu Nome">
                                    </div>
                                </div>



                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input" type="email" placeholder="Email input"
                                            value="Insira um E-mail">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                    </div>
                                    <!-- <p class="help is-danger">This email is invalid</p> -->
                                </div>



                                <div class="field">
                                    <label class="label">Menssagem</label>
                                    <div class="control">
                                        <textarea class="textarea" placeholder="Escreva sua Mensagem"></textarea>
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button class="button is-primary is-outlined is-rounded">Enviar</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Desenvolvido</strong> by Kênio Farias.
            </p>
        </div>
    </footer>
</body>

</html>