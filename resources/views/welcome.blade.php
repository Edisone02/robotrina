<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chatbot Ingenieria artificial </title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
        <link href="css/chatbot.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="logo">
                    <img src="https://media.giphy.com/media/S60CrN9iMxFlyp7uM8/giphy.gif" alt="Chatbot icon">
                </div>
            </div>
        </div>

        <script>
            var botmanWidget = {
                frameEndpoint: '/botman/chat',
                title: 'Chatbot - Smart TV Troubleshooting',
                introMessage: 'Hola, bienvenido a Chat-man soluciones para tu Smart TV. Para mas informacion escribe <b>opciones</b>. Hecho con el corazón por Edison Mancebo (20-0778)',
                mainColor: '#ffffff',
                bubbleBackground: '#2E2456'
            };
        </script>

        <!-- <script src="{{asset('js/jquery.min.js')}}"></script> -->
        <!-- <script src="{{asset('js/widget.js')}}"></script> -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
        </script>

        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        <script src="{{'js/chatbot.js'}}"></script>
    </body>
</html>