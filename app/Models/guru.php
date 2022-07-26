<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'gurus';
    protected $fillable = ['namaguru', 'nikguru', 'matapelajaran', 'username', 'password'];

    public function guruagenda(){
        return $this->hasMany(Agenda::class);
    }

    public function gurukelas(){
        return $this->hasOne(Kelas::class);
    }

    public function guruuser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
