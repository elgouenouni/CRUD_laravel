<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormateurGroupe extends Model
{
    use HasFactory;
    protected $table = 'formateur_groupe';
    protected  $fillable=['groupe_id',"formateur_id",'annee_formation'];
}
