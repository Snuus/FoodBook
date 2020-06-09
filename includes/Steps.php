<?php


class Steps extends Db_object
{

    protected static $db_table = "steps";
    protected static  $db_table_fields = array('stepnumber', 'text' , 'recipepart_id' );
    public $id;
    public $stepnumber;
    public $text;
    public $recipepart_id;


}
