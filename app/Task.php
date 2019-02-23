<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model 
{
  protected $table = 'tasks';

  protected $fillable = [
    'subject',
    'description',
    'remark',
    'start_date',
    'expected_end_date',
    'end_date',
    'active',
    'requester_id',
    'type_id',
    'status_id',
    'technician_id'
  ];

}