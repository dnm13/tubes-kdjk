<x-guest-layout>
    <x-slot name="logo"></x-slot>

    <div class="row mt-1">
      <img src="{{ asset('img/Logo.png') }}" style="width: 20%; margin-left: auto; margin-right: auto">
    </div>

    <x-jet-validation-errors class="mb-4" style="width: 30%"/>

      <form method="POST" action="{{ route('register') }}" style="width: 30%; margin-left: auto; margin-right: auto" class="mb-5">
          @csrf

          <div>
              <x-jet-input id="name" class="block mt-1 form-control" style="width: 100%" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama lengkap" />
          </div>

          <div class="mt-4">
              <x-jet-input id="email" class="block mt-1 form-control" style="width: 100%" type="email" name="email" :value="old('email')" required placeholder="Email" />
          </div>

          <div class="mt-4">
              <x-jet-input id="password" class="block mt-1 form-control" style="width: 100%" type="password" name="password" required autocomplete="new-password" placeholder="Kata sandi" />
          </div>

          <div class="mt-4">
              <x-jet-input id="password_confirmation" class="block mt-1 form-control" style="width: 100%" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi kata sandi" />
          </div>

          <div class="row mt-5 text-center">
            <x-jet-button style="background: #F6931E; color: white">
                {{ __('Daftar') }}
            </x-jet-button>
          </div>

          <div class="row mt-4 text-center">
            Sudah memiliki akun? Masuk <a class="underline text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('disini!') }}
            </a>
          </div>
      </form>
</x-guest-layout>
