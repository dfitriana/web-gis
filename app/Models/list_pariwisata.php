<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_pariwisata extends Model
{
    use HasFactory;
    protected $table = 'list_pariwisatas';
    protected $guarded = [];
    protected $primarykey = 'id';
}
