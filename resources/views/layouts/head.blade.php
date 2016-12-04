{{-- Codificación del sitio --}}
<meta charset="utf-8">

{{-- Averiguar --}}
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- JQUERY insertado con Pingendo --}}
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

{{-- BOOTSTRAP insertado con Pingendo --}}
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

{{-- CSS insertado con Pingendo --}}
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

{{-- CSS insertado con Pingendo --}}
<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

{{-- Inserta dinámicamente el título de la página --}}
<title>Cúmulo - @yield('titulo')</title>

{{-- Permite que el logo de Cúmulo gire cuando haces Scroll --}}
<script>

    $(window).scroll(function() {

        // get how far we've scrolled from the top of our screen
        //var offset = $(window).scrollTop();

        // apply the offset as a css transform to our buttons
        //$('#sp-links').css({
        //    '-webkit-transform': 'rotate(' + offset + 'deg)'
        //});

    });

</script>
{{-- Le dá estilo al logo de Cúmulo --}}
<style>
        
        /* center our links */
        #sp-links       { text-align:center; }

        /* give our links basic styling and rounded corners */
        #sp-links a     { color:#FFF; display:inline-block; font-size:80px; height:120px; margin:0 30px; padding-top:20px; width:120px; 
            -webkit-border-radius:50%; /* make rounded */
        }

        /* colors */
        #sp-cumulo { background:#43609C; }

    </style>