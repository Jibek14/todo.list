<?php


namespace App\Models;


use ActiveRecord\Model;

class Todo extends Model
{
    public static $table_name = "items";
    public static $primary_key = "id";
}