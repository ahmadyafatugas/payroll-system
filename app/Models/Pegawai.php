<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
    protected $guarded = ["id"];
    public $timestamps = false;

    public function absenPegawai()
    {
        return $this->hasMany(AbsenPegawai::class, 'pegawai_id', 'id');
    }
}
