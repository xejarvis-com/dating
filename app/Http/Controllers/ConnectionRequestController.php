<?php

namespace App\Http\Controllers;

use App\Models\ConnectionRequest;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ConnectionRequestController extends Controller
{
 
    public function __construct()
    {
        $this->connection_request = new ConnectionRequest;
        $this->user = new User;

    }
    
    public function viewConnectionRequests($id)
    {
        try{
            $request_id  = decrypt($id);

            $request = $this->connection_request->getConnectionRequestById($request_id);


            if(isset($request->id))
            {

            $request_user = $this->user->getUserById($request->from_user_id);

                return view('notifications.view_connection_requests',[

                    'user'          =>  $request_user,
                    'request'       =>    $request
                ]);
            }

        }
        catch(DecryptException $e)
        {

        }

    }

    public function acceptRequest(Request $request)
    {
        try{
            $data = ['status' => false];
            $request = $this->connection_request->getConnectionRequestById($request->request_id);
            if(isset($request->id))
            {
              $curr_request =  $request->update(['status' => 'Accepted']);
               
                $data['status'] = true;

               
            }
        }
         catch(DecryptException $e)
         {

         }
         return $data;
    }

}
