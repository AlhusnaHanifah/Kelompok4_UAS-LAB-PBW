<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentars';
    protected $fillable = [
        'id_talk',
        'id_user',
        'komentar',
    ];
    public function talk()
    {
        return $this->belongsTo(Talk::class, 'id_talk');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
