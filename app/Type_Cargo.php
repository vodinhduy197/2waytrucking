<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Type_Cargo extends Model
{
    protected $table = "type_cargo";
    protected $primaryKey = "id_type_cargo";
    public $timestamp = false;

    public function getTypecargo(){
        return $this->all();
    }

    public function addTypecargo($name, $description){
        return DB::table('type_cargo')->insert(
            ['name' => $name, 'description' => $description]
        );
    }

    public function updateTypecargo($id, $name, $description){
        return DB::table('type_cargo')
                ->where('id_type_cargo', $id)
                ->update(['name' => $name, 'description' => $description]);
    }

    public function deleteTypecargo($id){
        return DB::table('type_cargo')->where('id_type_cargo', '=', $id)->delete();
    }
}
