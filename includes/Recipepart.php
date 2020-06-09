<?php


class Recipepart extends Db_object

{
    protected static $db_table = "recipepart";
    protected static  $db_table_fields = array('name', 'duration');
    public $id;
    public $name;
    public $duration;



}
