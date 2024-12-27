<?php

function delete(string $table, array $where){
    
    if (array_is_list($where)) {
        throw new Exception("O array tem que ser associativo no delete.");
    }

    $connect =  connect();

    $whereField =  array_keys($where);
    
    $sql = "delete from {$table} where {$whereField[0]} = :{$whereField[0]}";

    $prepare =  $connect->prepare($sql);
    $prepare->execute($where);

    return $prepare->rowCount();

}