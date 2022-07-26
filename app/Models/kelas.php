<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'kelas';
    protected $fillable = ['namakelas', 'walikelas'];

    public function kelasagenda(){
        return $this->hasMany(Agenda::class);
    }

    public function kelasguru(){
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

}
