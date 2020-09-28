<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre','url','icono'];//solo insertar para esos campos
    protected $primaryKey = 'id_menu';
    protected $guarded = ['id_menu']; //campo que no se van a modificar en la vista
    public $timestamps = false; //decir si se usara el timestamps
}
