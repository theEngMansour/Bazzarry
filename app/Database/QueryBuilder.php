<?php

namespace App\Database;

class QueryBuilder 
{  
    private static $pdo;

    public static function make(\PDO $pdo)
    {
        self::$pdo = $pdo;
    }
    
    public static function get(string $table)
    {
        $query = self::$pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);   
    }
    
    /*
     * Select table and get data from database
     * $table : name table in databace is Ganaral
    */

    public static function show($table, $id)
    {
        $query = self::$pdo->prepare("SELECT * FROM {$table} WHERE (id = $id)");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);   
    }
    /*
     * Show data according $id in table
     * $id : Number of data in databace
    */

    public static function insert($table, $data)
    {
        $fields = array_keys($data);
        $fieldesStr = implode(',', $fields);
        $valueStr = str_repeat('?,', count($fields)-1) .'?';
        $query = "INSERT INTO {$table} ({$fieldesStr}) VALUES ({$valueStr})";
        $statement = self::$pdo->prepare($query);
        $statement->execute(array_values($data));
    }
    /*
     * insert data in the databace
    */

    public static function update($table, $id, $data)
    {
        $fields = implode('= ? ,', array_keys($data)) . ' = ? ';
        $values = array_values($data);
        $query = "UPDATE {$table} SET {$fields} WHERE id = {$id}";
        $statement = self::$pdo->prepare($query);
        $statement->execute($values);
    }
    /*
     * update data in the databace
    */

    public static function delete($table, $id, $column = 'id', $operator = '=')
    {
        $query = "DELETE FROM {$table} WHERE {$column} {$operator} {$id}";
        $statement = self::$pdo->prepare($query);
        $statement->execute();
    }
    /*
     * delete data in the databace
    */
}