<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
    <div class="flex">
    <div class="w-1/2" style="background: #F6931E">
        @foreach ($pengguna as $user)
            @if ($user -> id == Auth::user() -> id)
            @else
            <button
                id="user"
                wire:click="chats({{ $user -> id }})"
                class="p-3 block w-full text-left text-white"
                type="submit"
                >
                {{ $user -> name }}
            </button>
            @endif
        @endforeach
    </div>

    <div class="w-full px-2 h-80 overflow-auto" id="abcd{{ $dichat }}">
        <div class="block">
            @if ($dichat == 0)
                <div class="row">
                  <img src="{{ asset('img/Logo-2.png') }}" style="width: 17%; margin-left: auto; margin-right: auto; margin-top: 60px">
                </div>

                <div class="row mt-5 text-center">
                  <p style="color: #AFAFAF; font-size: 20px">Mulai obrolan dengan pengguna lain</p>
                </div>
            @else
                @foreach ($chats as $chat)
                    @if ($chat -> frm == Auth::user() -> id)
                        <div class="flex justify-end mb-2">
                            <div class="mr-1 bg-blue-500 text-right px-2 py-2 rounded-lg text-white">
                                {{ $chat -> body }}
                            </div>
                        </div>
                    @else
                        <div class="flex justify-start mb-2">
                            <div class="mr-1 bg-blue-500 text-right px-2 py-2 rounded-lg text-white">
                                {{ $chat -> body }}
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="flex mb-2">
                    <input
                    type="text"
                    wire:model="body"
                    placeholder="Tulis pesan.."
                    class="w-full border-2 border-gray-300 rounded-lg p-1"
                    style="padding: 7px 20px"
                    >
                    <div class="px-1 w-1/6">
                        <input
                        id="user"
                        wire:click="createPost({{ $dichat }})"
                        type="submit"
                        class="w-full h-full rounded-lg text-white"
                        value="Kirim"
                        >
                    </div>
                </div>

                <!-- <livewire:chat/> -->
            @endif
        </div>
        <div class="block">
        </div>
    </div>

    <script>
            var objDiv = document.getElementById("abcd{{ $dichat }}")
            objDiv.scrollTop = objDiv.scrollHeight
    </script>
    </div>
</div>

<style media="screen">
  #user{
    background: #F6931E;
  }

  #user:hover{
    background: #FBAF41;
  }
</style>
