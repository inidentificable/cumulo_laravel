{{-- Se crea la estructura básica de una página html --}}
<html>
<head>
    {{-- Esta sección crea el header en el html --}}
    @include('layouts.head')
</head>
<body>
{{-- Inserta el menú en la parte superior del código html, el menú incluye algunas funciones dinámicas asociadas al usuario --}}
@include('layouts.menu')
{{-- Inserta el contenido en el centro del código html, esta sección es súper dinámica --}}
@include('layouts.contenido')
{{-- Inserta el pié de página en la parte inferior del código html, contenido bastante estático --}}
@include('layouts.footer')
</body>
</html>