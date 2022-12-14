<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';
    protected $dates = ['tpt'];
    protected $date = ['tst'];

    protected $fillable = [
        'atasan_id', 'pegawai_id','judul','isi','file','status','tpt','tst'
    ];

    public function atasan()
    {
        return $this->belongsTo(User::class, 'atasan_id');
    }

    public function pegawai()
    {
        return $this->belongsTo(User::class, 'pegawai_id');
    }

}
