<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-900">
        <div class="bg-gray-800 text-white rounded-lg p-8 shadow-lg w-full max-w-md">

        <!-- Gambar Logo -->
            <div class="flex justify-center mb-6">
            <img src="{{ asset('IMG/logo-new.png') }}" alt="TiketApaSaja Logo" class="w-32 h-auto">
            </div>
            
            <h2 class="text-2xl font-bold mb-6 flex justify-center">Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Your Email"
                           class="w-full bg-transparent border-b border-gray-500 focus:outline-none focus:border-orange-500 placeholder-gray-400" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-6 relative">
                    <input type="password" name="password" placeholder="Password"
                           class="w-full bg-transparent border-b border-gray-500 focus:outline-none focus:border-orange-500 placeholder-gray-400" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Login Button -->
                <x-primary-button type="submit"
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded transition flex justify-center">
                    Login
                </x-primary-button>

                <!-- Forgot password -->
                <div class="flex justify-between items-center text-sm mt-4">
                    <span class="text-gray-300">Forgot your password?</span>
                    <a href="{{ route('password.request') }}"
                       class="text-orange-500 border border-orange-500 px-2 py-1 rounded hover:bg-orange-500 hover:text-white transition">
                        Click here
                    </a>
                </div>

                <!-- Register link -->
                <div class="mt-6 flex justify-center">
                    <a href="{{ route('register') }}"
                       class="text-orange-500 border border-orange-500 px-3 py-1 rounded hover:bg-orange-500 hover:text-white transition">
                        Register Here
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
