<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing-CoffeShop | Login</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind CSS Custom Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out',
                        'pulse-slow': 'pulse 2s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        html {
            scroll-behavior: smooth;
        }
        
        /* Schöne Input-Effekte */
        .input-group {
            position: relative;
        }
        
        .input-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            transition: all 0.3s ease;
            pointer-events: none;
            color: #78716c;
        }
        
        .input-field:focus + .input-label,
        .input-field:not(:placeholder-shown) + .input-label {
            top: -0.5rem;
            left: 0.75rem;
            font-size: 0.875rem;
            color: #d97706;
            background: white;
            padding: 0 0.25rem;
        }
        
        /* Kaffee-Animation für den Hintergrund */
        .coffee-bg {
            background: linear-gradient(135deg, #fef3c7 0%, #f3e8d2 100%);
        }
    </style>
</head>

<body class="coffee-bg min-h-screen">
    <!-- Navigation -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Main Content -->
    <main class="flex-1">
        <!-- Login Section -->
        <section class="py-16 px-4">
            <div class="max-w-md mx-auto">
                <!-- Login Card -->
                <div class="bg-white rounded-2xl shadow-2xl p-8 animate-fade-in-up">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <div class="mb-4">
                            <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <h1 class="text-3xl font-bold text-stone-800 mb-2">Willkommen zurück!</h1>
                        <p class="text-stone-600">Melden Sie sich in Ihrem Konto an</p>
                    </div>

                    <!-- Login Form -->
                    <form class="space-y-6" method="POST" action="login.php">
                        <!-- Benutzername Feld -->
                        <div class="input-group">
                            <input
                                type="text"
                                id="username"
                                name="username"
                                class="input-field w-full px-4 py-3 border-2 border-stone-200 rounded-lg focus:border-amber-500 focus:outline-none transition-all duration-300 text-stone-800"
                                placeholder=" "
                                required
                            >
                            <label for="username" class="input-label">Benutzername</label>
                        </div>

                        <!-- Passwort Feld -->
                        <div class="input-group">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="input-field w-full px-4 py-3 border-2 border-stone-200 rounded-lg focus:border-amber-500 focus:outline-none transition-all duration-300 text-stone-800"
                                placeholder=" "
                                required
                            >
                            <label for="password" class="input-label">Passwort</label>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between text-sm">
                            <label class="flex items-center">
                                <input type="checkbox" name="remember" class="w-4 h-4 text-amber-600 border-stone-300 rounded focus:ring-amber-500">
                                <span class="ml-2 text-stone-600">Angemeldet bleiben</span>
                            </label>
                            <a href="#" class="text-amber-600 hover:text-amber-700 hover:underline transition-colors duration-300">
                                Passwort vergessen?
                            </a>
                        </div>

                        <!-- Login Button -->
                        <button
                            type="submit"
                            class="w-full bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg hover:shadow-amber-500/25 focus:outline-none focus:ring-4 focus:ring-amber-500/50"
                        >
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                                Anmelden
                            </span>
                        </button>

                        <!-- Divider -->
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-stone-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-stone-500">oder</span>
                            </div>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center">
                            <p class="text-stone-600">
                                Noch kein Konto?
                                <a href="register.php" class="text-amber-600 hover:text-amber-700 font-semibold hover:underline transition-colors duration-300">
                                    Jetzt registrieren
                                </a>
                            </p>
                        </div>
                    </form>

                    <?php
                    // Einfache Login-Verarbeitung (für Demo-Zwecke)
                    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                        $username = $_POST['username'] ?? '';
                        $password = $_POST['password'] ?? '';
                        
                        // Hier würden Sie normalerweise die Datenbank überprüfen
                        // Für Demo-Zwecke zeigen wir nur eine Nachricht
                        if (!empty($username) && !empty($password)) {
                            echo '<div class="mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">';
                            echo '<p class="text-center">Login-Versuch für Benutzer: <strong>' . htmlspecialchars($username) . '</strong></p>';
                            echo '<p class="text-center text-sm mt-2">In einer echten Anwendung würde hier die Datenbank-Authentifizierung stattfinden.</p>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript für Mobile Menu (falls benötigt) -->
    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Schöner Fokus-Effekt für Inputs
            const inputs = document.querySelectorAll('.input-field');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('input-focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('input-focused');
                });
            });
        });
    </script>
</body>
</html>
