<?php
require_once 'Model.php';
class UsuariosModel extends Model{

    public function validateUser($user, $password){
        $query="SELECT id_tipo_usuario FROM usuarios WHERE usuario=:user AND password=SHA2(:pass,256)";
        return $this->get_query($query, ['user'=>$user, 'pass'=>$password]);
    }

}