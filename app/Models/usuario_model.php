<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_model extends Model
{
    protected $table = 'usuarios';
    protected $primarykey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario','email', 'password','perfil_id', 
    'baja', 'created_at'];
}