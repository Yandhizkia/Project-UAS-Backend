<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-900">
        <div class="bg-gray-800 text-white rounded-lg p-8 shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Create New Account</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Full Name"
                           class="w-full bg-transparent border-b border-gray-500 focus:outline-none focus:border-orange-500 placeholder-gray-400" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Your Email"
                           class="w-full bg-transparent border-b border-gray-500 focus:outline-none focus:border-orange-500 placeholder-gray-400" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password"
                           class="w-full bg-transparent border-b border-gray-500 focus:outline-none focus:border-orange-500 placeholder-gray-400" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                           class="w-full bg-transparent border-b border-gray-500 focus:outline-none focus:border-orange-500 placeholder-gray-400" required />
                </div>

                <!-- Register Button -->
                <button type="submit"
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded transition">
                    Register
                </button>

                <!-- Login redirect -->
                <div class="mt-6 text-center text-sm text-gray-400">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login here</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
