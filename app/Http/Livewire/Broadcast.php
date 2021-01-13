<?php

namespace App\Http\Livewire;

use App\Models\chat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Broadcast extends Component
{
    public $pesan;

    public function render()
    {

        return view('livewire.broadcast');
    }

    public function kirim()
    {
        $data0 = User::select('id')
        ->where('id', '!=', Auth::user()->id)
        ->get();
        foreach ($data0 as $item) {
            chat::create([
                'frm' => Auth::id(),
                'to' => $item->id,
                'body' => $this -> pesan
            ]);
        };
        $this -> pesan = '';
        $this -> emit('postCreated');
    }
}
