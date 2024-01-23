<?php
class Crud {
    public function crud_create($dado) {
        $file    = file_get_contents(DATA_LOCATION);
        $dados   = json_decode($file);
        $dados[] = $dado;
        file_put_contents(DATA_LOCATION, json_encode($dados));
    } 
}
?>