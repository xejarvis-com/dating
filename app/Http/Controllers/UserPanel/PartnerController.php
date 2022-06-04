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
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    //

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


}
