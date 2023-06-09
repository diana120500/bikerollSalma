<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $table="races";
    protected $fillable=['title','description','unevenness','image','number_participants','km','date','promotion','start','state','price','sponsor_price'];

}
?>