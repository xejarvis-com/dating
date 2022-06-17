<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\ConnectionRequest;
use App\Models\NotificationPusher;
use App\Models\Profile;
use App\Models\ProfileView;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
    public function __construct()
    {
        $this->user = new User;
    }

    // visitors

    public function profile(User $user)
    {
       $user_profile_list = $user->getUserProfiles();
       $notifications = new NotificationPusher;

        // $user->profileViews()->updateOrCreate([ 'visitor_id' => Auth::user()->id ]);
        $requests =    $notifications->getUserRequests();

        return view('user_panel.profileVisitors.view_profiles', [

            'user_profile_list'     =>    $user_profile_list,
            'requests'          =>    $requests,

            
        ]);
    }
    public function visitUserProfile(Request $request)
    {
        try{
            $form_collect = $request->input();
            $form_collect['profile_id'] = decrypt($request->profile_id);
            $profile_view = new ProfileView;
            $profile_view = $profile_view->storeProfileView($form_collect);

            if(isset($profile_view->id))
            {
                $user_profile = $this->user->getUserProfiles()->where('profile_id',$profile_view->profile_id)->first();


                return view('user_panel.profileVisitors.visit_profile',[
                    'user'          => $user_profile,

                ]);
            }
  
        }
        catch(DecryptException $e)
        {

        }

    }

    public function viewRecentVisitors(Request $request)
    {
        try{
            $user_id = decrypt($request->id);

            $profile_view = new ProfileView;
            $profile = new Profile;
            $notifications = new NotificationPusher;
           
            
            $user = $this->user->getUserById($user_id);

            if(isset($user->id))
            {
                $profile = $user->profile;

                $visitors_list = $profile_view->getVisitorsListByUserId($profile->id);

                $visitor_ids = $visitors_list->pluck('visitor_id')->toArray();

                $visitor_profiles = $user->getUserProfiles()->whereIn('user_id',$visitor_ids);
                $requests =    $notifications->getUserRequests();

                $title = 'Visitors Profiles';

                
            return view('user_panel.profileVisitors.view_profiles', [

                'user_profile_list'     =>    $visitor_profiles,
                'title'                 =>    $title,
                'requests'              =>    $requests,
                
            ]);
            }

        }
        catch(DecryptException)
        {

        }
    }

    public function sendRequest($id)
    {
        try{
            $data = [];
            $user_id = $id;
            $user = new User;
            $connection_request = new ConnectionRequest;
          

            $curr_user = $user->getUserById($user_id);

            if(isset($curr_user->id))
            {
                $data['to_user']  = $curr_user->id;
                $data['from_user']   = Auth::user()->id;
                
                $request = $connection_request->storeRequest($data);

                $user_ids = $curr_user->id;
                event(new \App\Events\NotificationPusher(\Auth::user()->id,$user_ids,'Connection Request','connectionrequests',$request->id,'Connection Request From ('.\Auth::user()->first_name.')'));               
    
            }

            return redirect()->back();
        }
        catch(DecryptException $e)
        {
        
                  
        }
  
    }
}
