<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    protected $table = "admin";
    protected $primaryKey = "id_user";
    public $timestamp = false;

    public function getAll(){
        return $this->paginate(10);
    }

    

    public function updateStatus($id){
        $idStatus = DB::table('admin')
                    ->select(DB::raw('id_type_user_status'))
                    ->where('id_user', '=', $id)
                    ->get();
        if($idStatus == '1'){
            return DB::table('admin')
                    ->where('id_user', $id)
                    ->update(['id_type_user_status' => 0]);
            
        }else{
            return DB::table('admin')
                    ->where('id_user', $id)
                    ->update(['id_type_user_status' => 1]);
        }
    }
}
