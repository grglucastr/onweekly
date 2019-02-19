<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;


class Technician extends Model
{
    protected $table = 'technicians';
    protected $fillable = ['name', 'email', 'active'];
}