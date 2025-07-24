<nav class="bg-amber-100 shadow-lg border-b border-amber-200">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo/Brand -->
            <div class="flex-shrink-0">
                <a href="index.php" class="text-2xl font-bold text-amber-800">
                    Testing-CoffeShop 
                </a>
            </div>
            
            <!-- Navigation Links -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="index.php" class="text-amber-800 hover:bg-amber-200 hover:text-amber-900 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">
                        Home
                    </a>
                    <a href="about.php" class="text-amber-800 hover:bg-amber-200 hover:text-amber-900 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">
                        About
                    </a>
                    <a href="shop.php" class="text-amber-800 hover:bg-amber-200 hover:text-amber-900 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">
                        Shop
                    </a>
                </div>
            </div>
            
            <!-- Right side buttons -->
            <div class="hidden md:block">
                <div class="ml-4 flex items-center space-x-3">
                    <a href="register.php" class="bg-amber-600 hover:bg-amber-700 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-amber-500/25 text-white px-4 py-2 rounded-md text-sm font-medium transition-all duration-300">
                        Registrierung
                    </a>
                    <a href="login.php" class="bg-stone-600 hover:bg-stone-700 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-stone-500/25 text-white px-4 py-2 rounded-md text-sm font-medium transition-all duration-300">
                        Login
                    </a>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="mobile-menu-button bg-amber-100 hover:bg-amber-200 hover:scale-105 inline-flex items-center justify-center p-2 rounded-md text-amber-700 hover:text-amber-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500 transition-all duration-300">
                    <span class="sr-only">Hauptmenü öffnen</span>
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="mobile-menu hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-amber-50">
            <a href="index.php" class="text-amber-800 hover:bg-amber-200 hover:text-amber-900 block px-3 py-2 rounded-md text-base font-medium transition-all duration-300">Home</a>
            <a href="about.php" class="text-amber-800 hover:bg-amber-200 hover:text-amber-900 block px-3 py-2 rounded-md text-base font-medium transition-all duration-300">About</a>
            <a href="shop.php" class="text-amber-800 hover:bg-amber-200 hover:text-amber-900 block px-3 py-2 rounded-md text-base font-medium transition-all duration-300">Shop</a>
            <div class="pt-3 space-y-2">
                <a href="register.php" class="bg-amber-600 hover:bg-amber-700 hover:shadow-lg text-white block px-3 py-2 rounded-md text-base font-medium transition-all duration-300">Registrierung</a>
                <a href="login.php" class="bg-stone-600 hover:bg-stone-700 hover:shadow-lg text-white block px-3 py-2 rounded-md text-base font-medium transition-all duration-300">Login</a>
            </div>
        </div>
    </div>
</nav>
