<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    use HasFactory;
    protected $primaryKey = "codigo_uf";
    protected  $fillable = [ "sigla", "nome", "status"];
}
