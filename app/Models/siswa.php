<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable = ['nama', 'nis', 'gender', 'alamat', 'kontak', 'email', 'status_pkl'];

    public function pkl()
    {
        return $this->hasMany(pkl::class);
    }
}
