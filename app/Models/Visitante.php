<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $table = 'visitante';
    protected $fillable = [
        'nome', 'telefone', 'data_hora',
    ];
	public $timestamps = true;
}
