<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    // Sesuaikan dengan nama tabel level di database kamu
    protected $table = 'm_level'; 
    
    // Sesuaikan dengan primary key di tabel level
    protected $primaryKey = 'level_id'; 

    // Kolom apa saja yang boleh diisi (sesuaikan dengan kolom di database)
    protected $fillable = ['level_kode', 'level_nama']; 

    // (Opsional) Relasi balik ke UserModel
    // Satu level bisa dimiliki oleh banyak user
    public function users(): HasMany
    {
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}