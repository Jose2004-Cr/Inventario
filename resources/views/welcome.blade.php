<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renacer online</title>
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


    <nav class="py-2 text-white bg-gray-800 animate-fadeIn" style="animation-delay: 0.2s;">
        <div class="container flex justify-between px-6 mx-auto">
            <div class="flex space-x-4">
                <a href="{{ url('/categorias') }}" class="transition duration-300 hover:text-purple-400">Categorías</a>
                <a href="{{ url('/ofertas') }}" class="transition duration-300 hover:text-purple-400">Ofertas</a>
                <a href="{{ url('/historial') }}" class="transition duration-300 hover:text-purple-400">Historial</a>
                <a href="{{ url('/vender') }}" class="transition duration-300 hover:text-purple-400">Vender</a>
            </div>
            <div>
                <a href="#" class="transition duration-300 hover:text-red-400">Ayuda</a>
            </div>
        </div>
    </nav>



    <main class="container px-6 py-8 mx-auto">
        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.4s;">
            <div class="overflow-hidden max-w-7xl mx-auto rounded-xl">
                <div class="relative h-64 md:h-80 lg:h-96 overflow-hidden group">
                    <img
                        src="/imagenes/banerrenacer.jpg"
                        alt="Banner promocional"
                        class="w-full h-full object-cover [object-position:top_15%] transform transition-transform duration-[3000ms] ease-in-out group-hover:scale-105 group-hover:-translate-y-2">
                </div>
            </div>
        </section>



        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.6s;">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Categorías populares</h2>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-6">
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-blue-500 fas fa-tshirt"></i>
                    <p>Ropa</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-green-500 fas fa-shoe-prints"></i>
                    <p>Zapatos</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-red-500 fas fa-tools"></i>
                    <p>Herramientas</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-purple-500 fas fa-mobile-alt"></i>
                    <p>Electrónicos</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-yellow-500 fas fa-couch"></i>
                    <p>Hogar</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-indigo-500 fas fa-futbol"></i>
                    <p>Deportes</p>
                </a>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.8s;">
            <h2 class="mb-6 text-3xl font-extrabold text-indigo-900">Ofertas del día</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">

                <a href="{{ route('login') }}" aria-label="Ir a login para Smartphone XYZ" class="block overflow-hidden bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer">
                    <img src="/imagenes/Smartphone XYZ.jpg" alt="Smartphone XYZ" class="object-cover w-full h-48">
                    <div class="p-5">
                        <h3 class="mb-1 text-xl font-semibold text-indigo-800">Smartphone XYZ</h3>
                        <p class="mb-3 text-gray-600">Último modelo, 128GB</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$599.99</span>
                            <span class="text-sm text-gray-400 line-through">$799.99</span>
                        </div>
                    </div>
                </a>

                <a href="{{ route('login') }}" aria-label="Ir a login para Laptop Ultradelgada" class="block overflow-hidden bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer" style="animation-delay: 0.2s;">
                    <img src="/imagenes/Laptop Ultradelgada.webp" alt="Laptop Ultradelgada" class="object-cover w-full h-48">
                    <div class="p-5">
                        <h3 class="mb-1 text-xl font-semibold text-indigo-800">Laptop Ultradelgada</h3>
                        <p class="mb-3 text-gray-600">Core i7, 16GB RAM, SSD 512GB</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$1099.99</span>
                            <span class="text-sm text-gray-400 line-through">$1399.99</span>
                        </div>
                    </div>
                </a>

                <a href="{{ route('login') }}" aria-label="Ir a login para Set de Herramientas" class="block overflow-hidden bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer" style="animation-delay: 0.4s;">
                    <img src="/imagenes/Set de Herramientas.webp" alt="Set de Herramientas" class="object-cover w-full h-48">
                    <div class="p-5">
                        <h3 class="mb-1 text-xl font-semibold text-indigo-800">Set de Herramientas</h3>
                        <p class="mb-3 text-gray-600">200 piezas, maleta incluida</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$149.99</span>
                            <span class="text-sm text-gray-400 line-through">$249.99</span>
                        </div>
                    </div>
                </a>

                <a href="{{ route('login') }}" aria-label="Ir a login para Zapatillas Running" class="block overflow-hidden bg-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer" style="animation-delay: 0.6s;">
                    <img src="/imagenes/Zapatillas Running.avif" alt="Zapatillas Running" class="object-cover w-full h-48">
                    <div class="p-5">
                        <h3 class="mb-1 text-xl font-semibold text-indigo-800">Zapatillas Running</h3>
                        <p class="mb-3 text-gray-600">Ultra ligeras, todas las tallas</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$79.99</span>
                            <span class="text-sm text-gray-400 line-through">$129.99</span>
                        </div>
                    </div>
                </a>

            </div>
        </section>

        <section class="mb-12 animate-fadeIn" style="animation-delay: 1s;">
            <h2 class="mb-6 text-3xl font-extrabold text-indigo-900">Lo más vendido</h2>
            <div class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-6">

                <a href="{{ route('login') }}" aria-label="Ir a login para Auriculares Bluetooth" class="block p-4 text-center bg-white rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer">
                    <img src="/imagenes/Auriculares Bluetooth.webp" alt="Auriculares Bluetooth" class="mx-auto mb-3 h-32 w-auto rounded">
                    <p class="font-semibold text-indigo-800">Auriculares Bluetooth</p>
                    <p class="text-green-600 font-bold">$49.99</p>
                </a>

                <a href="{{ route('login') }}" aria-label="Ir a login para Smartwatch" class="block p-4 text-center bg-white rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer">
                    <img src="/imagenes/Smartwatch.webp" alt="Smartwatch" class="mx-auto mb-3 h-32 w-auto rounded">
                    <p class="font-semibold text-indigo-800">Smartwatch</p>
                    <p class="text-green-600 font-bold">$89.99</p>
                </a>

                <a href="{{ route('login') }}" aria-label="Ir a login para Cámara Action" class="block p-4 text-center bg-white rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer">
                    <img src="/imagenes/Cámara Action.webp" alt="Cámara Action" class="mx-auto mb-3 h-32 w-auto rounded">
                    <p class="font-semibold text-indigo-800">Cámara Action</p>
                    <p class="text-green-600 font-bold">$129.99</p>
                </a>

                <a href="{{ route('login') }}" aria-label="Ir a login para Teclado Gaming" class="block p-4 text-center bg-white rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer">
                    <img src="/imagenes/Teclado Gaming.webp" alt="Teclado Gaming" class="mx-auto mb-3 h-32 w-auto rounded">
                    <p class="font-semibold text-indigo-800">Teclado Gaming</p>
                    <p class="text-green-600 font-bold">$69.99</p>
                </a>

                <a href="{{ route('login') }}" aria-label="Ir a login para Drone con Cámara" class="block p-4 text-center bg-white rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer">
                    <img src="/imagenes/Drone con Cámara.webp" alt="Drone con Cámara" class="mx-auto mb-3 h-32 w-auto rounded">
                    <p class="font-semibold text-indigo-800">Drone con Cámara</p>
                    <p class="text-green-600 font-bold">$199.99</p>
                </a>

                <a href="{{ route('login') }}" aria-label="Ir a login para Altavoz Portátil" class="block p-4 text-center bg-white rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-xl cursor-pointer">
                    <img src="/imagenes/Altavoz Portátil.png" alt="Altavoz Portátil" class="mx-auto mb-3 h-32 w-auto rounded">
                    <p class="font-semibold text-indigo-800">Altavoz Portátil</p>
                    <p class="text-green-600 font-bold">$39.99</p>
                </a>

            </div>
        </section>

    </main>

    <!-- <footer class="bg-gray-800 text-white py-6 fixed bottom-0 w-full z-50">
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
    </footer> -->