<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\Education;
use App\Models\LivingIn;
use App\Models\MaterialStatus;
use App\Models\Profession;
use App\Models\Religion;
use App\Models\Salary;
use App\Models\SubCommunity;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    //

    public function __construct()
    {
        $this->user = new User;
    }

    public function partner()
    {
        $material = MaterialStatus::all();
        $religion = Religion::all();
        $community = Community::all();
        $subcommunity = SubCommunity::all();
        $country = DB::table('country')->get();
        $education = Education::all();
        $work = Work::all();
        $profession = Profession::all();
        $salary = Salary::all();
        return view('user_panel.partner-prefrence.partner-profile-matches',get_defined_vars());
    }

    public function partnerPreferences(Request $request)
    {
        try{
            $condition = ['status' => false , 'view' => ''];
       
            $form_collect = $request->input();
                       
            $count = 0;
            if(isset($form_collect['marital_status']))
            {
                foreach($form_collect['marital_status'] as $key => $value)
                {
                $condition['marital_status'][$count] = $form_collect['marital_status'][$count];
                $count++;

                }

            }
      
            $count = 0;
            if(isset($form_collect['religion']))
            {
                foreach($form_collect['religion'] as $key => $value)
                {
                    $condition['religion'][$count] = $form_collect['religion'][$count];

                    $count++;

                }

            }
            $count = 0;
        
            if(isset($form_collect['salary']))
            {

                foreach($form_collect['salary'] as $key => $value)
                {
                    $condition['salary'][$count] = $form_collect['salary'][$count];

                    $count++;

                }

            }
            $count = 0;

            if(isset($form_collect['profession']))
            {
                foreach($form_collect['profession'] as $key => $value)
                {
                    $condition['designation'][$count] = $form_collect['profession'][$count];

                    $count++;

                }
            }
            $count = 0;

            if(isset($form_collect['work_with']))
            {
                foreach($form_collect['work_with'] as $key => $value)
                {
                    $condition['work_with'][$count] = $form_collect['work_with'][$count];

                    $count++;

                }

            }
            $count = 0;

            if(isset($form_collect['sub_community']))
            {

                foreach($form_collect['sub_community'] as $key => $value)
                {
                    $condition['sub_community'][$count] = $form_collect['sub_community'][$count];

                    $count++;

                }

            }
            $count = 0;

            if(isset($form_collect['qualification']))
            {

                foreach($form_collect['qualification'] as $key => $value)
                {
                    $condition['qualification'][$count] = $form_collect['qualification'][$count];

                    $count++;

                }

            }
            if(isset($form_collect['min_height']) && isset($form_collect['max_height'])){

                $height_condition['min_height'] =   $form_collect['min_height'];
                $height_condition['max_height'] =   $form_collect['max_height'];

            }
            $count = 0;

            if(isset($form_collect['country_living']))
            {
                foreach($form_collect['country_living'] as $key => $value)
                {
                    $condition['country_living'][$count] = $form_collect['country_living'][$count];

                    $count++;

                }
    
            }
            // if(isset($form_collect['relationship']))
            // {
            //     $condition = ['users.profile_for' => $form_collect['relationship']];

            // }
            if(isset($form_collect['diet']))
            {
                foreach($form_collect['diet'] as $key => $value)
                {
                    $condition['diet'][$count] = $form_collect['diet'][$count];

                    $count++;

                }
            }
            if(isset($form_collect['min_age']) && isset($form_collect['max_age'])){

                $age_condition['min_age'] =   $form_collect['min_age'];
                $age_condition['max_age'] =   $form_collect['max_age'];

            }         
        //   dd($condition);

            $users_list = $this->user->getUserListByFilters($condition,$age_condition,$height_condition);

               return view('user_panel.partner-prefrence.view_partner_preferences',[
                    'users_list'         =>  $users_list

                ])->render();

                // return $data;
        }
    
        catch(DecryptException $e)
        {

        }
    }


}
