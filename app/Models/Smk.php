<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smk extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'rentang_biaya', 'sejarah'];

    public function fotos()
    {
        return $this->hasMany(FotoSmk::class);
    }
}