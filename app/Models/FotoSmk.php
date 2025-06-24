<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoSmk extends Model
{
    use HasFactory;

    protected $fillable = ['smk_id', 'foto'];

    public function smk()
    {
        return $this->belongsTo(Smk::class);
    }
}
