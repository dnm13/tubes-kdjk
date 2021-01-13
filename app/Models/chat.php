<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;
    protected $table = 'chats';

    protected $fillable = [
        'frm',
        'to',
        'body'
    ];

    public function user()
    {
        return $this -> belongsTo(User::class);
    }
}
