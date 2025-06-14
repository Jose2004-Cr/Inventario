<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renacer - Categorías</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInFromLeft {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromRight {
            from {
                transform: translateX(50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }

        .animate-slideInLeft {
            animation: slideInFromLeft 0.5s ease-out;
        }

        .animate-slideInRight {
            animation: slideInFromRight 0.5s ease-out;
        }

        .animate-scaleIn {
            animation: scaleIn 0.5s ease-out;
        }

        .hover-grow {
            transition: transform 0.3s ease;
        }

        .hover-grow:hover {
            transform: scale(1.05);
        }

        .hover-shadow {
            transition: box-shadow 0.3s ease;
        }

        .hover-shadow:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-gradient-to-r from-indigo-900 via-purple-900 to-blue-900 shadow-md">
        <nav class="container mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo -->
            <div class="text-3xl font-semibold text-indigo-300 select-none">
                Renacer
            </div>

            <!-- Buscador -->
            <div class="flex-1 max-w-xl mx-6">
                <form class="flex">
                    <input
                        type="search"
                        placeholder="Buscar productos, marcas y más..."
                        class="w-full px-4 py-2 rounded-l-md border border-gray-700 bg-indigo-800 text-indigo-100 placeholder-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button
                        type="submit"
                        class="px-4 py-2 rounded-r-md bg-indigo-600 hover:bg-indigo-500 transition text-white font-medium">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <!-- Íconos -->
            <div class="flex items-center space-x-5 text-indigo-400">
                <a href="{{ route('login') }}" class="hover:text-indigo-200 transition text-lg" aria-label="Carrito">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <a href="{{ route('login') }}" class="hover:text-indigo-200 transition text-lg" aria-label="Notificaciones">
                    <i class="fas fa-bell"></i>
                </a>
                <a href="{{ route('login') }}" class="hover:text-indigo-200 transition text-lg" aria-label="Perfil">
                    <i class="fas fa-user"></i>
                </a>
            </div>

        </nav>
    </header>

    <nav class="bg-gray-800 text-white py-2 animate-fadeIn" style="animation-delay: 0.2s;">
        <div class="container mx-auto px-6 flex justify-between">
            <div class="flex space-x-4">
                <a href="/" class="hover:text-purple-400 transition duration-300">Inicio</a>
                <a href="{{ url('/ofertas') }}" class="hover:text-purple-400 transition duration-300">Ofertas</a>
                <a href="{{ url('/historial') }}" class="hover:text-purple-400 transition duration-300">Historial</a>
                <a href="{{ url('/vender') }}" class="hover:text-purple-400 transition duration-300">Vender</a>
            </div>
            <div>
                <a href="#" class="hover:text-red-400 transition duration-300">Ayuda</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 animate-slideInLeft">Explora Nuestras Categorías</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fadeIn" style="animation-delay: 0.4s;">

            <a href="/login" class="block bg-gray-100 rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg hover:shadow-gray-400 cursor-pointer animate-scaleIn" style="animation-delay: 0.2s;">
                <img src="/imagenes/Smartphones, laptops, tablets.webp" alt="Electrónicos" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Electrónicos</h2>
                    <p class="text-gray-600 mb-4">Smartphones, laptops, tablets y más</p>
                    <div class="inline-flex items-center text-gray-700 font-medium">
                        Explorar
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <a href="/login" class="block bg-gray-100 rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg hover:shadow-gray-400 cursor-pointer animate-scaleIn" style="animation-delay: 0.4s;">
                <img src="/imagenes/moda  ropa.jpg" alt="Moda" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Moda</h2>
                    <p class="text-gray-600 mb-4">Ropa, calzado y accesorios para todos</p>
                    <div class="inline-flex items-center text-gray-700 font-medium">
                        Explorar
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <a href="/login" class="block bg-gray-100 rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg hover:shadow-gray-400 cursor-pointer animate-scaleIn" style="animation-delay: 0.6s;">
                <img src="/imagenes/muebles patio.jpg" alt="Hogar y Jardín" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Hogar y Jardín</h2>
                    <p class="text-gray-600 mb-4">Muebles, decoración y herramientas</p>
                    <div class="inline-flex items-center text-gray-700 font-medium">
                        Explorar
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

        </div>
    </main>

    <footer class="bg-gray-800 text-white py-6 fixed bottom-0 w-full z-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <h3 class="text-lg font-bold mb-3">Acerca de Renacer</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Quiénes somos</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Términos y condiciones</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Privacidad</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-3">Comprar</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Cómo comprar</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Métodos de pago</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Garantías</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-3">Vender</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Cómo vender</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Comisiones</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Reglas de publicación</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-3">Ayuda</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Preguntas frecuentes</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Contacto</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition duration-300">Reportar un problema</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-6 border-t border-gray-700 pt-4 flex flex-col md:flex-row justify-between items-center text-sm">
                <p>&copy; 2025 Renacer. Todos los derechos reservados.</p>
                <div class="flex space-x-4 mt-3 md:mt-0">
                    <a href="#" class="text-2xl hover:text-purple-500 transition duration-300"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-2xl hover:text-purple-500 transition duration-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-2xl hover:text-purple-500 transition duration-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-2xl hover:text-purple-500 transition duration-300"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>


</html>