<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ConnectionRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
       
    ];

public function getConnectionRequestsByUserId($id)
    {
        return ConnectionRequest::where('to_user_id',$id)->orderby('id','desc')->get();
    }
    public function getConnectionRequestById($id)
    {
        return ConnectionRequest::where('id',$id)->first();
    }
    public function storeRequest($object)
    {
        return DB::transaction(function() use ($object){

            $request = new ConnectionRequest;

            $request->to_user_id = $object['to_user'];
            $request->from_user_id = $object['from_user'];
            $request->status = "Sent";
            
            $request->save();

            return with($request);
        });
    }

}
