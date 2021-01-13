<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
    <div class="flex">
    <div class="w-1/2 bg-blue-500">
        @foreach ($pengguna as $user)
            @if ($user -> id == Auth::user() -> id)
            @else    
            <button
                wire:click="chats({{ $user -> id }})"
                class="bg-blue-500 hover:bg-blue-600 p-3 block w-full text-left"
                type="submit"
                >
                {{ $user -> name }}
            </button>
            <hr>
            @endif
        @endforeach
    </div>
    
    <div class="w-full px-2 h-80 overflow-auto" id="abcd{{ $dichat }}">
        <div class="block">
            @if ($dichat == 0)
                kosong
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
                    placeholder="Tulis Pesan..."
                    class="w-full border-2 border-gray-300 rounded-lg p-1"
                    >
                    <div class="px-1 w-1/6">
                        <input 
                        wire:click="createPost({{ $dichat }})"
                        type="submit"
                        class="bg-green-500 hover:bg-green-600 w-full h-full rounded-lg text-white"
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
