<?php


class Recipe extends Db_object
{

    protected static $db_table = "recipe";
    protected static  $db_table_fields = array('name', 'user_id', 'category_id', 'public');
    public $id;
    public $name;
    public $user_id;
    public $category_id;
    public $public;





}
