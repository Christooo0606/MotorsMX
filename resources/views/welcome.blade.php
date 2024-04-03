<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda de Motos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
            font-family: Arial, sans-serif; /* Familia de fuente */
            color: #333333; /* Color del texto principal */
        }
        .header {
            background-color: #343a40; /* Fondo del encabezado */
            color: #ffffff; /* Color del texto del encabezado */
            padding: 20px 0; /* Espaciado interno */
            text-align: center; /* Alineación del texto */
        }
        .logo {
            font-size: 24px; /* Tamaño de fuente del logo */
            font-weight: bold; /* Texto en negrita */
        }
        .navbar-links {
            list-style: none; /* Quitar viñetas de la lista */
            margin: 0; /* Quitar margen */
            padding: 0; /* Quitar relleno */
        }
        .navbar-link {
            display: inline-block; /* Mostrar como bloque */
            margin: 0 10px; /* Espaciado entre enlaces */
            text-decoration: none; /* Quitar subrayado */
            color: #ffffff; /* Color del texto */
            transition: color 0.3s ease; /* Transición suave del color */
        }
        .navbar-link:hover {
            color: #cccccc; /* Color del texto al pasar el ratón */
        }
        .container {
            max-width: 800px; /* Ancho máximo del contenido */
            margin: 0 auto; /* Centrar el contenido en la página */
            padding: 20px; /* Espaciado interno */
            background-color: #ffffff; /* Fondo del contenedor */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
            margin-top: 30px; /* Espaciado superior */
            margin-bottom: 30px; /* Espaciado inferior */
        }
        .contact-info,
        .advertisement,
        .gallery {
            margin-bottom: 30px; /* Espaciado inferior */
        }
        .contact-info h2,
        .advertisement h2,
        .gallery h2 {
            margin-bottom: 20px; /* Espaciado inferior */
            font-size: 22px; /* Tamaño de fuente de los títulos */
            color: #333333; /* Color del texto de los títulos */
        }
        .lead {
            font-size: 16px; /* Tamaño de fuente de los párrafos */
            color: #666666; /* Color del texto de los párrafos */
            margin-bottom: 15px; /* Espaciado inferior */
        }
        .img-fluid {
            max-width: 100%; /* Ancho máximo de las imágenes */
            height: auto; /* Altura automática */
            display: block; /* Mostrar como bloque */
            margin-bottom: 20px; /* Espaciado inferior */
        }
        .footer {
            text-align: center; /* Centrar el texto */
            margin-top: 30px; /* Espaciado superior */
            padding-top: 20px; /* Espaciado interno superior */
            border-top: 1px solid #dee2e6; /* Borde superior */
            color: #666666; /* Color del texto del pie de página */
        }
        .btn-primary {
            background-color: #007bff; /* Color de fondo del botón primario */
            border-color: #007bff; /* Color del borde del botón primario */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Color de fondo del botón primario al pasar el ratón */
            border-color: #0056b3; /* Color del borde del botón primario al pasar el ratón */
        }
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); /* Sombra al enfocar el botón primario */
        }
        .btn-secondary {
            background-color: #6c757d; /* Color de fondo del botón secundario */
            border-color: #6c757d; /* Color del borde del botón secundario */
        }
        .btn-secondary:hover {
            background-color: #5a6268; /* Color de fondo del botón secundario al pasar el ratón */
            border-color: #545b62; /* Color del borde del botón secundario al pasar el ratón */
        }
        .btn-secondary:focus {
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); /* Sombra al enfocar el botón secundario */
        }
    </style>
</head>
<body>
<header class="header">
    <div class="logo">Tienda de Motos</div>
    <nav>
        <ul class="navbar-links">
            <li class="navbar-link"><a href="/google-auth/redirect" class="text-white">Login con Google</a></li>
            <li class="navbar-link"><a href="{{ route('login') }}" class="text-white">Login</a></li>
            <li class="navbar-link"><a href="{{ route('register') }}" class="text-white">Registro</a></li>
        </ul>
        
    </nav>
</header>
<div class="container">
    <div class="contact-info">
        <h2>Información de Contacto:</h2>
        <p class="lead">Dirección: 123 Calle Principal, Ciudad</p>
        <p class="lead">Teléfono: +1234567890</p>
        <p class="lead">Email: info@tiendademotos.com</p>
    </div>
    <div class="advertisement">
        <h2>Anuncio:</h2>
        <p class="lead">¡Descubre nuestras increíbles ofertas en motocicletas y accesorios!</p>
        <a href="#" class="btn btn-primary">Ver ofertas</a>
    </div>
    <div class="gallery">
        <h2>Galería de Fotos:</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Foto 1">
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Foto 2">
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Foto 3">
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <p>&copy; 2024 Tienda de Motos. Todos los derechos reservados.</p>
</footer>
<!-- Bootstrap JS y dependencias -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
