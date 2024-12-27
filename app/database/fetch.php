<?php 

function all($table, $fields = '*'){
    try {
        
        $connect = connect();
        $query = $connect->query("select {$fields} from {$table}");
        
        return $query->fetchAll();


    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
}


function findBy($table,$field, $value, $fields='*'){
    try {
        
        $connect = connect();
        $prepare = $connect->prepare("select {$fields} from $table where {$field} = :{$field}");
        $prepare->execute([
            $field => $value
        ]);
        
        return $prepare->fetch();


    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
}

