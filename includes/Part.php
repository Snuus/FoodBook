<?php


class Part extends Db_object
{

    protected static $db_table = "part";
    protected static  $db_table_fields = array('stepnumber', 'text' , 'recipepart_id' );
    public $id;
    public $stepnumber;
    public $text;
    public $recipepart_id;


}
