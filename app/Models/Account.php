<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table ='accounts';
    protected $primaryKey = 'id';
    protected $fillable = ['email','created_at','updated_at','uniqueID','uuid','password','status'];
}
