<?php
include("database.php");
?>
<style>
    * {
        font-family: 'Ubuntu', sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        background-color: steelblue;
        text-align: center;
        align-items: center;
    }

    .tablet {
        display: inline;
        background-color: red;
        width: 99%;
        height: 99%;
    }

    .title {
        background-color: wheat;
    }

    .title-holder {
        padding-right: 30%;
        padding-left: 30%;
    }

    .fila {
        display: flex;
    }

    .col {
        margin: 30px;
        width: 50%;
    }

    .miniatura {
        border-radius: 20px;
    }

    .youtube-title {
        font-size: 30px;
    }

    .departamento {
        font-size: 40px;
    }

    .musica {
        background-color: whitesmoke;
        padding: 20px;
        border-radius: 15px;
    }

    .biblioteca {
        background-color: whitesmoke;
        padding: 20px;
        border-radius: 15px;
    }

    .enlace {
        text-decoration: none;
        color: black;
        border: 3px solid black;
        padding: 10px;
        border-radius: 20px;
        font-size: 30px;
    }

    .libro {
        font-size: 30px;
        padding: 20px;
        width: 100%;
        border-radius: 15px;
    }

    .search {
        font-size: 30px;
        margin: 20px;
        background: none;
        text-decoration: none;
        color: black;
        border: 3px solid black;
        padding: 10px;
        border-radius: 20px;
        font-size: 30px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IES Francisco Asorey</title>
</head>
<html>

<body>

    <div class="tablet">
        <div class="title-holder">
            <div class="title">
                <h1>IES Asorey</h1>
            </div>
        </div>
        <div class="fila">
            <div class="col musica">
                <p class="departamento">Hilo Músical</p>
                <img width="100%" id="miniatura" class="miniatura" src="https://www.imascore.com/wp-content/plugins/borlabs-cookie/images/bct-no-thumbnail.png" alt="">
                <p class="youtube-title" id="youtube-title">Cargando...</p>
                <a class="enlace" href="https://musica.asorey.net">Proponer canción</a>
            </div>
            <div class="col biblioteca">
                <p class="departamento">Biblioteca</p>
                <form action="https://biblio.asorey.net" method="post">
                    <input type="text" name="libro" class="libro" id="" placeholder="Busca un libro na biblioteca...">
                    <br>
                    <button class="search">Buscar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    var miniatura = "1";
    var timeline = window.setInterval(function() {
        $.getJSON('https://musica.asorey.net/api?getplaydata=1', function(data) {
            document.getElementById("youtube-title").innerHTML = data["title"];
            var miniatura_completa = "https://musica.asorey.net/temp/" + data["miniatura"] + ".png";
            document.getElementById("miniatura").src = miniatura_completa;
        });
    }, 1000);
</script>