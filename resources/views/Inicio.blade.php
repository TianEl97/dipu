<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dipu</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"> <!-- Importación de la fuente Inter -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <div class="green-rectangle"></div> <!-- Rectángulo verde al fondo -->
        <div class="rectangle"></div> <!-- Rectángulo de gradiente -->

        <!-- Barra de navegación -->        
        @include('partials.nav')
        
        <img src="{{ asset('images/foto2.jpg') }}" alt="foto 1" class="image">
        <img src="{{ asset('images/image1.png') }}" alt="image 1" class="imagenHead">
    </div>
</body>
</html>
