<?php


class Recipe extends Db_object
{

    protected static $db_table = "recipe";
    protected static  $db_table_fields = array('name', 'body' , 'user_id' , 'category_id');
    public $id;
    public $name;
    public $body;
    public $user_id;
    public $category_id;
    public $public;



/*
public static function create_recipe($name,$body,$category_id){
    global $database;
    $sql = "INSERT INTO recipe('name','body','category_id') VALUES ('$name','$body', '$category_id')";
    $query= mysqli_query($database,$sql);
}
*/

}
