<?php

namespace App\Http\Livewire;

use App\Models\chat as ModelsChat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public $body;

    public function render()
    {
        return view('livewire.chat');
    }
    public function createPost()
    {
        ModelsChat::create([
            'frm' => Auth::id(),
            'to' => 2,
            'body' => $this -> body
        ]);
        $this -> body = '';
        $this -> emit('postCreated');
    }
}
