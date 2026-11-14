<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CiviLinkon</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="min-h-screen w-full flex items-center justify-center bg-[radial-gradient(ellipse_at_75%_15%,#ffd0b0_0%,#ff985c_48%,#ff4b0b_100%)] px-4 py-8 sm:px-6 sm:py-10 font-poppins">


    <main class="w-full max-w-115 mx-auto">


        <!-- logo -->
        <div class="auth-logo flex items-center justify-center gap-1.5 mb-5 sm:mb-6 text-white">
            <img src="." alt="">
            <span class="font-lequire text-[24px] font-normal tracking-wide">Civilinkon</span>
        </div>


        <!-- login Card -->
        <section class="auth-card w-full bg-white rounded-xl sm:rounded-[15px] px-5 py-8 sm:px-8 sm:py-10 md:px-[30px] md:pt-[58px] md:pb-[54px]">


            <!-- heading -->
            <div class="text-center mb-6">
                <h1 class="text-xl sm:text-2xl font-bold text-black">Welcome Back</h1>
                <p class="text-[11px] sm:text-xs text-gray-400 mt-1">
                    Log in to continue making an impact.
                </p>
            </div>


            <!-- navigation tabs -->
            <div class="flex items-center bg-black rounded-full p-1 mb-7 sm:mb-8">
                <a href="{{ route('login') }}"
                   class="auth-active-tab flex-1 text-center py-2.5 text-xs text-white rounded-full bg-gradient-to-r from-[#ff4b20] to-[#ff985c]">
                    Login
                </a>


                <a href="{{ route('register') }}"
                   class="flex-1 text-center py-2.5 text-xs text-white rounded-full">
                    Sign Up
                </a>
            </div>


            <!-- success message -->
            @if (session('success'))
                <div class="mb-4 rounded-lg bg-green-50 p-3 text-sm text-green-700">
                    {{ session('success') }}
                </div>
            @endif


            <!-- validation errors -->
            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-50 p-3 text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif


            <!-- login form -->
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf


                <!-- email -->
                <div class="mb-4 sm:mb-5">
                    <label class="block text-xs font-medium text-black mb-2">
                        Email
                    </label>


                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="you@example.com"
                        required
                        autocomplete="email"
                        class="w-full h-11 sm:h-[54px] rounded-full border border-[#dddddd] px-4 text-xs outline-none focus:border-[#ff7040] transition"
                    >
                </div>


                <!-- password -->
                <div class="mb-5 sm:mb-6">
                    <label class="block text-xs font-medium text-black mb-2">
                        Password
                    </label>


                    <input
                        type="password"
                        name="password"
                        placeholder="Your password"
                        required
                        autocomplete="current-password"
                        class="w-full h-11 sm:h-[54px] rounded-full border border-[#dddddd] px-4 text-xs outline-none focus:border-[#ff7040] transition"
                    >
                </div>


                <!-- login button -->
                <button
                    type="submit"
                    class="w-full h-11 sm:h-[52px] rounded-full text-white text-sm font-medium bg-linear-to-r from-[#ff4b20] to-[#ff985c] hover:brightness-105 active:scale-[0.99] transition duration-200">
                    Login
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
                Don't have an account?


                <a href="{{ route('register') }}"
                   class="text-[#ff572b] font-medium hover:underline">
                    Sign Up
                </a>
            </p>


        </section>
    </main>


</body>
</html>