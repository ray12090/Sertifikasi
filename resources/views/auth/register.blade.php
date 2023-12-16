<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-800 dark:hover:text-white-400">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-800 dark:hover:text-white-400">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-800 dark:hover:text-gray-400">Register</a>
                @endif
            @endauth
        </div>
        @csrf
        <!-- Name -->
        <div>
            <div class="font-bold text-xl" align="center">Daftar GoCamp</div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <span id="emailError" class="text-sm text-red-600"></span>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="no_hp" :value="__('Phone Number')" />
            <x-text-input id="no_hp" class="block mt-1 w-full" type="tel" name="no_hp" :value="old('no_hp')"
                required pattern="\d*" title="Phone number should only contain numbers." />
            <span id="phoneError" class="text-sm text-red-600"></span>
            <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
        </div>


        <!-- Province Dropdown -->
        <div class="mt-4">
            <x-label for="provinsi_id" :value="__('Province')" />
            <select id="provinsi_id" name="provinsi_id" class="block mt-1 w-full">
                <option value="">Select Province</option>
                @foreach ($provinces as $province)
                    <option value={{ $province->id }}>{{ $province->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>

        <!-- District Dropdown -->
        <div class="mt-4">
            <x-label for="kabupaten_id" :value="__('District')" />
            <select id="kabupaten_id" name="kabupaten_id" class="block mt-1 w-full">
                <option value="">Select District</option>
                @foreach ($districts as $district)
                    <option value={{ $district->id }}>{{ $district->nama_kabupaten }}</option>
                @endforeach
            </select>
        </div>

        <!-- Religion Dropdown -->
        <div class="mt-4">
            <x-label for="agama_id" :value="__('Religion')" />
            <select id="agama_id" name="agama_id" class="block mt-1 w-full">
                <option value="">Select Religion</option>
                @foreach ($religions as $religion)
                    <option value={{ $religion->id }}>{{ $religion->nama_agama }}</option>
                @endforeach
            </select>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4" href="{{ route('login') }}">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            const phoneInput = document.getElementById('no_hp');
            const emailError = document.getElementById('emailError');
            const phoneError = document.getElementById('phoneError');

            emailInput.addEventListener('input', function() {
                if (!validateEmail(this.value)) {
                    emailError.textContent = 'Please enter a valid email.';
                } else {
                    emailError.textContent = '';
                }
            });

            phoneInput.addEventListener('input', function() {
                if (!validatePhone(this.value)) {
                    phoneError.textContent = 'Phone number should only contain numbers.';
                } else {
                    phoneError.textContent = '';
                }
            });

            function validateEmail(email) {
                const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return re.test(String(email).toLowerCase());
            }

            function validatePhone(phone) {
                const re = /^\d+$/;
                return re.test(phone);
            }
        });
    </script>

</x-guest-layout>
