<?php


 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
 
 class User extends Model{
    public $timestamps = false;
 protected $table = 'students';
 // column sa table
 protected $fillable = [
 'student_last_name', 'student_first_name', 'id'
 ];
 }