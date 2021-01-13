<?php

namespace App\Http\Livewire;

use App\Models\ListUser as ModelsListUser;
use App\Models\chat as ModelsChat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListUser extends Component
{
    public $dichat = 0;
    public $login = 0;
    public $body;
    protected $listeners = [
        'render' => '$refresh'
    ];

    public function render()
    {
        $id = $this -> login;
        $dichat = $this -> dichat;
        $this -> login = Auth::user()->id;
        $pengguna = ModelsListUser::get();
        $chats = ModelsChat::
        where('frm', '=', $id)
        ->where('to', '=', $dichat)
        ->orwhere('frm', '=', $dichat)
        ->where('to', '=', $id)
        ->orderBy('id', 'asc')
        ->get();
        return view('livewire.list-user', [
            'pengguna' => $pengguna,
            'chats' => $chats
        ]);
    }

    public function chats($postId)
    {
        $post = ModelsListUser::find($postId);
        $this -> dichat = $postId;
    }
    public function createPost($to)
    {
        ModelsChat::create([
            'frm' => Auth::id(),
            'to' => $to,
            'body' => $this -> body
        ]);
        $this -> body = '';
        $this -> emit('postCreated');
    }
}
