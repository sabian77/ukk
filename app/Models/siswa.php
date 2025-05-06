<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class siswa extends Model
{
    use HasRoles;
    protected $fillable = ['nama', 'nis', 'gender', 'alamat', 'kontak', 'email', 'status_pkl'];

    public function pkl()
    {
        return $this->hasMany(pkl::class);
    }
}
