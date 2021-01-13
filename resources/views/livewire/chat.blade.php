<div class="flex">
    <input 
    type="text" 
    wire:model="body"
    placeholder="Tulis Pesan..."
    class="w-full border-2 border-gray-300 rounded-lg p-1"
    >
    <div class="px-1 w-1/6">
        <input 
        wire:click="createPost"
        type="submit"
        class="bg-green-500 hover:bg-green-600 w-full h-full rounded-lg text-white"
        >
    </div>
</div>
