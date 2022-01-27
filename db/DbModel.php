<?php
/**
 * User: LaMarca_Creative
 * Date: 1/24/2022
 * Time: 8:48 PM
 */

 namespace app\core\db;

 use app\core\Application;
 use app\core\Model;


 /**
 * Class DbModel
 * 
 * @author Keith Barreras <keith.barreras@gmail.com>
 * @package app\core
 */
abstract class DbModel extends Model
{
    abstract public static function tableName(): string;
    
    abstract public function attributes(): array;

    abstract public function primaryKey(): string;
   
    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(function($attr) {return ":$attr";}, $attributes);
        $statement = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).") 
                 VALUES(".implode(',', $params).")");
       foreach ($attributes as $attribute) {
           $statement->bindValue(":$attribute", $this->{$attribute});
       }

       $statement->execute();
       return true;
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }

    public static function findOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(function($attr) {return "$attr = :$attr";}, $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }

   
}