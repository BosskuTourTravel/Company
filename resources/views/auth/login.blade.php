<x-guest-layout>
    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg transition transform hover:scale-105 duration-300">
        @csrf

        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Welcome Back</h2>

        <!-- Session Status -->
        @if (session('status'))
            <p class="text-green-500 text-sm text-center mb-4">{{ session('status') }}</p>
        @endif

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 flex items-center">
            <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
            <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
        </div>

        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-800 transition duration-200">Forgot your password?</a>
            @endif
            <button type="submit" class="px-5 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 shadow-md hover:shadow-lg">
                Log in
            </button>
        </div>
    </form>
</x-guest-layout>
