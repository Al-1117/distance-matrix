<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Title -->
        <title>Distance Matrix</title>
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <!-- Script -->
        <script src="{{asset('js/app.js')}}"></script>
        
        <!-- Styles -->
         {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script> 

    </head>

    <body>
        <button class="test btn-primary">CALCOLA DISTANZA</button>
        <div id="template" class="app_container ">
                               
        </div>

        {{-- TEMPLATE HANDLEBARS PER LO STAMPA DEI RISULTATI PROVENIENTI DALLA CHIAMATA AJAX --}}
        <script id="source_app_template" type="text/x-handlebars-template">
            <ul class="single_app col-lg-4 col-md-6">
                <li class="origins">
                    Luogo di partenza: <strong>@{{origins}}</strong>
                 </li>
                 <br>

                 <li class="distance">
                    Luogo di arrivo: <strong>@{{destinations}}</strong>
                 </li>
                 <br>

                <li class="distance">
                   Distanza: <strong>@{{distance}}</strong>
                </li>
                <br>

                <li class="duration">
                   Tempo impiegato: <strong>@{{duration}}</strong>
                </li>
            </ul>
        </script>

    </body>

</html>