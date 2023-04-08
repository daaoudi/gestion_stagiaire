<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'prenom',
        'cin',
        'filiere',
        'date_naissance',
        'user_id'


        ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
