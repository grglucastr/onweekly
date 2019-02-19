<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requester extends Model
{
  protected $table = 'requesters';
  protected $fillable = ['name', 'email', 'tel'];
}