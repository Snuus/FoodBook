<?php


class Category extends Db_object
{


    protected static $db_table = "category";
    protected static  $db_table_fields = array('id','name');
    public $id;
    public $name;




}
