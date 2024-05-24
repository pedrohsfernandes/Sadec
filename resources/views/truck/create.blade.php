<x-guest-layout>
        <form action="{{route ('truck.store')}}" method="post">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="placa" :value="__('placa')" />
            <x-text-input id="placa" class="block mt-1 w-full" type="text" name="placa" :value="old('placa')" required autofocus autocomplete="placa" />
            <x-input-error :messages="$errors->get('placa')" class="mt-2" />
        </div>

        <!--id-->
            <?php 
            $user_id = auth()->id();
            ?>
        <input type="hidden" name="user_id" value="{{$user_id}}">
       

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="modelo" :value="__('modelo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="modelo" :value="old('modelo')" required autocomplete="modelo" />
            <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="ano" :value="__('ano')" />

            <x-text-input id="ano" class="block mt-1 w-full"
                            type="text"
                            name="ano"
                            required autocomplete="ano" />

            <x-input-error :messages="$errors->get('ano')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>