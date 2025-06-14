<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas - Renacer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-fadeIn { animation: fadeIn 0.5s ease-out; }
        .hover-grow { transition: transform 0.3s ease; }
        .hover-grow:hover { transform: scale(1.05); }
        .hover-shadow { transition: box-shadow 0.3s ease; }
        .hover-shadow:hover { box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); }
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

    <nav class="bg-gray-800 text-white py-2 animate-fadeIn">
        <div class="container mx-auto px-6 flex justify-between">
            <div class="flex space-x-4">
                <a href="{{ url('/') }}" class="hover:text-purple-400 transition duration-300">Inicio</a>
                <a href="{{ url('/categorias') }}" class="hover:text-purple-400 transition duration-300">Categorías</a>
                <a href="{{ url('/historial') }}" class="hover:text-purple-400 transition duration-300">Historial</a>
                <a href="{{ url('/vender') }}" class="hover:text-purple-400 transition duration-300">Vender</a>
            </div>
            <div>
                <a href="#" class="hover:text-red-400 transition duration-300">Ayuda</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 animate-slideInLeft">Vender un Producto</h1>
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden animate-fadeIn" style="animation-delay: 0.4s;">
            <form class="p-6">
                <div class="mb-4">
                    <label for="product-name" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Producto</label>
                    <input type="text" id="product-name" name="product-name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="product-description" class="block text-gray-700 text-sm font-bold mb-2">Descripción</label>
                    <textarea id="product-description" name="product-description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="product-price" class="block text-gray-700 text-sm font-bold mb-2">Precio</label>
                    <input type="number" id="product-price" name="product-price" step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text