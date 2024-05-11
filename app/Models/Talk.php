<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    use HasFactory;
    protected $table = 'talks';
    protected $fillable = [
        'id_user',
        'talk',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
