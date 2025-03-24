<?php
require_once 'Model.php';
class AutoresModel extends Model{
    public function get($id=''){
        if($id==''){
            $query="SELECT * FROM Autores";
            return $this->get_query($query);
        }
        else{
            $query="SELECT * FROM Autores WHERE codigo_autor=:codigo";
            return $this->get_query($query,['codigo'=>$id]);

        }
    }
}