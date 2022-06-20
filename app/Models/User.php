<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Auth;
use Carbon\Carbon;
use DateTime;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'profile_for',
        'first_name',
        'last_name',
        'dob',
        'gender',
        'religion',
        'community',
        'living_in',
        'email',
        'password',
        'last_seen',
        'complete_year',
        'country_born',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserById($id)
    {
        return User::where('id' , $id)->first();
    }

    public function age() {

        return $this->dob->diffInYears(\Carbon::now());
    }

    public function getUserListByFilters($condition,$age_condition,$conditionArr)
    {
        $user = User::join('profiles','users.id' ,'profiles.user_id')
        ->select('profiles.id as profile_id','users.id as user_id','users.first_name','users.last_name','profiles.city_live','users.dob','profiles.marital_status','users.religion','users.community','profiles.sub_community')
        ->where('users.id','!=',Auth::user()->id);
        // ->where('profiles.height','>=',$conditionArr['min_height'])
        // ->where('profiles.height','<=',$conditionArr['max_height']);

        if(isset($condition['marital_status']))
        {
            $user->whereIn('profiles.marital_status',$condition['marital_status']);
        }
        if( isset($condition['religion']))
        {
            $user->whereIn('users.religion',$condition['religion']);
        }
        if( isset($condition['living_in']))
        {
            $user->whereIn('users.living_in',$condition['living_in']);
        }
        if( isset($condition['diet']))
        {
            $user->whereIn('profiles.diet',$condition['diet']);
        }
        if( isset($condition['sub_community']))
        {
            $user->whereIn('profiles.sub_community',$condition['sub_community']);
        }
        if( isset($condition['sub_community']))
        {
            $user->whereIn('profiles.sub_community',$condition['sub_community']);
        }
        if( isset($condition['qualification']))
        {
            $user->whereIn('profiles.high_education',$condition['qualification']);
        }
        if( isset($condition['work_with']))
        {
            $user->whereIn('profiles.work_with',$condition['work_with']);
        } 
        if( isset($condition['profession']))
        {
            $user->whereIn('profiles.designation',$condition['profession']);
        }
        $user_list = $user->get();
  
        $users =[];

        foreach($user_list as $key =>$rows)
        {

          $age = $this->getAge($rows->dob);

          if($age >= $age_condition['min_age'] && $age <= $age_condition['max_age'] )
          {
            $users[] = $rows;
          }

        }
     
        return $users;

    }

    public function getAge($date)
    {
        
        $dob = new DateTime($date);
        
        $now = new DateTime();
        $difference = $now->diff($dob);
        
        $age = $difference->y;
         
        return  $age;
    }

    public function getNewMatches($condition1,$condition2,$condition3,$condition4)
    {
// dd($condition);

        return User::join('profiles','users.id' ,'profiles.user_id')
        ->select('profiles.id as profile_id','users.id as user_id','users.first_name','users.last_name','profiles.city_live','users.dob','profiles.marital_status','users.religion','users.community','profiles.sub_community')
         ->where($condition1)
         ->where($condition2)
         ->where($condition3)
         ->where($condition4)
        ->where('users.id','!=',Auth::user()->id)
        ->get();

    }


    public function getUserProfiles()
    {
        return User::join('profiles','users.id' ,'profiles.user_id')
        ->select('profiles.id as profile_id','users.id as user_id','users.first_name','users.last_name','profiles.city_live','users.dob','profiles.marital_status','users.religion','users.community','profiles.sub_community')
        ->where('users.id' ,'!=', Auth::user()->id)
        ->get();
    }
    public function getUserImages($id)
    {
        return Image::where('user_id',$id)->orderby('id','desc')->first();
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function profileViews(){

        return $this->hasMany(ProfileView::class, 'profile_id');
    }
}
