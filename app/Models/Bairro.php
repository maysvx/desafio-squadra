<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    use HasFactory;
    protected $primaryKey = "codigo_bairro";
    protected  $fillable = [ "nome", "status", "codigo_municipio"];
}
