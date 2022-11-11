<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner' ;

    protected $fillable = [
        'kategori','judul','slug','file','url','published','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

}
