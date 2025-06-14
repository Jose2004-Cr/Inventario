<!-- Sidebar Container -->
<div id="sidebar-container" class="fixed inset-0 pointer-events-none z-[9999]">
    <!-- Overlay para móvil -->
    <div id="sidebar-overlay" class="absolute inset-0 hidden transition-opacity duration-600 ease-in-out pointer-events-auto bg-black/50"></div>

    <!-- Sidebar -->
    <aside id="default-sidebar"
        class="fixed top-0 left-0 w-16 h-screen transition-all duration-600 ease-in-out transform pointer-events-auto sm:translate-x-0 overflow-hidden z-10"
        aria-label="Sidebar">
        <div class="flex flex-col h-full px-3 py-4 text-white shadow-lg bg-gradient-to-r from-indigo-900 via-purple-900 to-blue-900">
            <!-- Logo -->
            <div class="flex flex-col items-center mt-12 space-y-8">
                <div id="sidebar-logo" class="w-[50px] h-[50px] bg-white rounded-full transition-all duration-300"></div>
            </div>

            <!-- Menú -->
            <ul id="sidebar-menu" class="mt-12 space-y-4 font-medium">
                <li>
                    <a href="{{ url('/dashboard') }}" class="flex items-center p-2 transition-all duration-200 rounded-lg hover:bg-purple-800 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10..." />
                        </svg>
                        <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('productos.create') }}" class="flex items-center p-2 transition-all duration-200 rounded-lg hover:bg-purple-800 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6" />
                        </svg>
                        <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('historial.compras') }}" class="flex items-center p-2 transition-all duration-200 rounded-lg hover:bg-purple-800 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12..." />
                        </svg>
                        <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Purchase History</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user-management.index') }}" class="flex items-center p-2 transition-all duration-200 rounded-lg hover:bg-purple-800 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4..." />
                        </svg>
                        <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">User Management</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>

<!-- Toggle Button -->
<div class="fixed z-[10000] top-4 left-4">
    <button id="toggle-sidebar" class="flex items-center justify-center w-10 h-10 p-2 transition-colors duration-200 rounded-full shadow-lg bg-purple-700 hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
</div>

<!-- Animaciones -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    .float-animation {
        animation: float 3s ease-in-out infinite;
    }

    /* Mejora visual para pantallas más grandes */
    @media (min-width: 640px) {
        #default-sidebar:hover {
            width: 16rem !important;
        }

        #default-sidebar:hover #sidebar-menu span {
            opacity: 1 !important;
        }

        #default-sidebar:hover #sidebar-logo {
            width: 70px !important;
            height: 70px !important;
            animation: float 3s ease-in-out infinite;
        }
    }
</style>

<!-- Funcionalidad JS -->
<script>
    const sidebar = document.getElementById('default-sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const toggleButton = document.getElementById('toggle-sidebar');
    const menuItems = document.querySelectorAll('#sidebar-menu span');
    const sidebarLogo = document.getElementById('sidebar-logo');

    function expandSidebar() {
        sidebar.classList.remove('w-16');
        sidebar.classList.add('w-64');
        sidebarOverlay.classList.remove('hidden');
        menuItems.forEach(span => span.classList.replace('opacity-0', 'opacity-100'));
        sidebarLogo.classList.replace('w-[50px]', 'w-[70px]');
        sidebarLogo.classList.replace('h-[50px]', 'h-[70px]');
        sidebarLogo.classList.add('float-animation');
    }

    function collapseSidebar() {
        sidebar.classList.remove('w-64');
        sidebar.classList.add('w-16');
        sidebarOverlay.classList.add('hidden');
        menuItems.forEach(span => span.classList.replace('opacity-100', 'opacity-0'));
        sidebarLogo.classList.replace('w-[70px]', 'w-[50px]');
        sidebarLogo.classList.replace('h-[70px]', 'h-[50px]');
        sidebarLogo.classList.remove('float-animation');
    }

    function toggleSidebar() {
        sidebar.classList.contains('w-64') ? collapseSidebar() : expandSidebar();
    }

    toggleButton.addEventListener('click', toggleSidebar);
    sidebarOverlay.addEventListener('click', collapseSidebar);

    // Cierra el sidebar en móvil cuando se hace clic en un enlace
    menuItems.forEach(span => {
        const parentLink = span.closest('a');
        parentLink.addEventListener('click', () => {
            if (window.innerWidth < 640 && sidebar.classList.contains('w-64')) {
                collapseSidebar();
            }
        });
    });

    // Reset automático en resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 640) {
            collapseSidebar();
        }
    });
</script>
