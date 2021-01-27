<div>
    <div class="flex gap-3">
        <input class="w-full md:w-5/6 mb-3 px-2 py-1 rounded-lg border-2 border-gray-300" wire:model="pesan" type="text" placeholder="Broadcast" style="padding: 7px 20px">
        <input class="w-full md:w-1/6 mb-3 px-2 py-1 rounded-lg text-white" wire:click="kirim()" type="submit" value="Kirim ke Semua" id="kirim">
    </div>
</div>

<style media="screen">
  #kirim{
    background: #F6931E;
  }

  #kirim:hover{
    background: #FBAF41;
  }
</style>
