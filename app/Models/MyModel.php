<?php 
namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model
{
    protected $table = 'mykonten';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'desc', 'detail'];
}