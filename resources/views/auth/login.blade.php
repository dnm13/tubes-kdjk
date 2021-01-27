<x-guest-layout>
    <x-slot name="logo"></x-slot>

    <div class="row" style="margin-top: 45px">
      <img src="{{ asset('img/Logo.png') }}" style="width: 23%; margin-left: auto; margin-right: auto">
    </div>

    <x-jet-validation-errors class="mb-4" style="width: 30%"/>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600" style="width: 30%">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" style="width: 30%; margin-left: auto; margin-right: auto">
        @csrf

        <div>
            <x-jet-input id="email" class="block mt-1 form-control" type="email" name="email" :value="old('email')" required autofocus style="width: 100%" placeholder="Email" />
        </div>

        <div class="mt-4">
            <x-jet-input id="password" class="block mt-1 form-control" type="password" name="password" required autocomplete="current-password" style="width: 100%" placeholder="Kata sandi" />
        </div>

        <div class="row mt-5 text-center">
          <x-jet-button style="background: #F6931E; color: white">
              {{ __('Masuk') }}
          </x-jet-button>
        </div>

        <div class="row mt-4 text-center">
          Belum memiliki akun? Daftar <a class="underline text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
              {{ __('disini!') }}
          </a>
        </div>
    </form>
</x-guest-layout>
