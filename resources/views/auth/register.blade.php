<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Image -->
        <div class="mt-4">
            <x-input-label for="image" :value="__('Image')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autocomplete="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        {{-- <!-- Type -->
        <div class="mt-4">v
            <x-input-label for="type" :value="__('Type')" />
            <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autocomplete="type" />
            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div> --}}

        {{-- Type --}}
        <div class="mt-4">
            <x-input-label for="type" :value="__('Type')" />
            <select id="type" name="type" class="block mt-1 w-full" required autocomplete="type">
                <option value="ADMIN">ADMIN</option>
                <option value="CLIENTE">CLIENTE</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>
            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div>

        {{-- <!-- Status -->
        <div class="mt-4">
            <x-input-label for="status" :value="__('Status')" />
            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required autocomplete="status" />
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div> --}}

        <!-- Status -->
        <div class="mt-4">
            <x-input-label for="status" :value="__('Status')" />
            <select id="status" name="status" class="block mt-1 w-full" required autocomplete="status">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>



        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
