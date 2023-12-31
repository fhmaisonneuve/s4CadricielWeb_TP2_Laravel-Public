<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'email', 'adresse', 'date_de_naissance', 'phone', 'ville_id'];


    public function etudiantHasVille()
    {
        return $this->hasOne('App\Models\Ville', 'id', 'ville_id');
    }

    /**
     * Get the user associated with the etudiant.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}