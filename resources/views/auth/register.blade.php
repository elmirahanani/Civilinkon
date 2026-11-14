<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - CiviLinkon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen w-full flex items-center justify-center bg-[radial-gradient(ellipse_at_75%_15%,#ffd0b0_0%,#ff985c_48%,#ff4b0b_100%)] px-4 py-8 sm:px-6 sm:py-10 font-poppins">

    <main class="w-full max-w-115 mx-auto">

        <!-- logo -->
        <div class="auth-logo flex items-center justify-center gap-1.5 mb-5 sm:mb-6 text-white">
            <img src="" alt="">
            <span class="text-sm sm:text-[15px] font-bold tracking-wide font-lequire">CIVILINKON</span>
        </div>

        <!-- register card -->
        <section class="auth-card w-full bg-white rounded-xl sm:rounded-[15px] px-5 py-8 sm:px-8 sm:py-10 md:px-[30px] md:pt-[58px] md:pb-[54px]">

            <!-- heading -->
            <div class="text-center mb-6">
                <h1 class="text-xl sm:text-2xl font-bold text-black">Create your account</h1>
                <p class="text-[11px] sm:text-xs text-gray-400 mt-1">Sign up and start improving your neighborhood.</p>
            </div>

            <!-- navigation tabs -->
            <div class="flex items-center bg-black rounded-full p-1 mb-6 sm:mb-7">
                <a href="/login" class="flex-1 text-center py-2.5 text-xs text-white rounded-full">
                    Login
                </a>
                <a href="/register" class="auth-active-tab flex-1 text-center py-2.5 text-xs text-white rounded-full bg-linear-to-r from-[#ff4b20] to-[#ff985c]">
                    Sign Up
                </a>
            </div>

            <!-- register form -->
            <form action="#" method="POST">

                <!-- full name -->
                <div class="mb-4 sm:mb-5">
                    <label class="block text-xs font-medium text-black mb-2">
                        Full name
                    </label>
                    <input type="text" name="name" placeholder="Your full name" class="w-full h-11 sm:h-[54px] rounded-full border border-[#dddddd] px-4 text-xs outline-none focus:border-[#ff7040] transition">
                </div>

                <!-- email -->
                <div class="mb-4 sm:mb-5">
                    <label class="block text-xs font-medium text-black mb-2">
                        Email
                    </label>
                    <input type="email" name="email" placeholder="you@example.com" class="w-full h-11 sm:h-[54px] rounded-full border border-[#dddddd] px-4 text-xs outline-none focus:border-[#ff7040] transition">
                </div>

                <!-- password -->
                <div class="mb-5 sm:mb-6">
                    <label class="block text-xs font-medium text-black mb-2">
                        Password
                    </label>
                    <input type="password" name="password" placeholder="At least 8 characters" class="w-full h-11 sm:h-[54px] rounded-full border border-[#dddddd] px-4 text-xs outline-none focus:border-[#ff7040] transition">
                </div>

                <!-- create account btn -->
                <button type="submit" class="w-full h-11 sm:h-[52px] rounded-full text-white text-sm font-medium bg-linear-to-r from-[#ff4b20] to-[#ff985c] hover:brightness-105 active:scale-[0.99] transition duration-200">
                    Create Account
                </button>

            </form>

            <!-- divider -->
            <div class="flex items-center gap-4 my-6 sm:my-8">
                <div class="flex-1 h-px bg-gray-200"></div>
                <span class="text-[11px] text-gray-400">OR</span>
                <div class="flex-1 h-px bg-gray-200"></div>
            </div>

            <!-- footer -->
            <p class="text-center text-[11px] sm:text-xs text-black">
                Already have an account?
                <a href="/login" class="text-[#ff572b] font-medium hover:underline">
                    Login
                </a>
            </p>

        </section>
    </main>

</body>
</html>
