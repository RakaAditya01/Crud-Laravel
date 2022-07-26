<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tabels';
    protected $fillable = ['namaguru', 'matapelajaran', 'materipelajaran', 'jampelajaran', 'absensi', 'namakelas', 'jenispembelajaran', 'linkpembelajaran', 'dokumentasi', 'keterangan'];

    public function mapelguru(){
        return $this->hasMany(guru::class);
    }

}
