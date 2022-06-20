<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // momi76 Password for all Users

        // Creating File For User  Table
        $userRecords = [
            [
                "id" => 1,
                "profile_for"=> "Self",
                "first_name"=> "Momi",
                "last_name"=> "Rana",
                "dob"=> "1999-05-05",
                "gender"=> "Male",
                "religion"=> "Islam",
                "community"=> "Marathi",
                "living_in"=> "PAKISTAN",
                "email"=> "rmomi786@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ],

            [
                "id" => 2,
                "profile_for"=> "Son",
                "first_name"=> "Ali",
                "last_name"=> "Amin",
                "dob"=> "1998-05-05",
                "gender"=> "Male",
                "religion"=> "Islam",
                "community"=> "Marathi",
                "living_in"=> "Canada",
                "email"=> "rmomi6@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ],

            [
                "id" => 3,
                "profile_for"=> "Daughter",
                "first_name"=> "Saira",
                "last_name"=> "Ali",
                "dob"=> "2000-05-05",
                "gender"=> "Female",
                "religion"=> "Hindu",
                "community"=> "Marathi",
                "living_in"=> "India",
                "email"=> "saira@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ],

            [
                "id" => 4,
                "profile_for"=> "Self",
                "first_name"=> "Danish",
                "last_name"=> "Nawaz",
                "dob"=> "1998-05-05",
                "gender"=> "Male",
                "religion"=> "Muslim",
                "community"=> "Marathi",
                "living_in"=> "Pakistan",
                "email"=> "danish@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ],

            [
                "id" => 5,
                "profile_for"=> "Self",
                "first_name"=> "Umar",
                "last_name"=> "Daraz",
                "dob"=> "1996-05-05",
                "gender"=> "Male",
                "religion"=> "Muslim",
                "community"=> "Marathi",
                "living_in"=> "Pakistan",
                "email"=> "umar@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ],

            [
                "id" => 6,
                "profile_for"=> "Relative",
                "first_name"=> "Ali",
                "last_name"=> "Amin",
                "dob"=> "1998-05-05",
                "gender"=> "Male",
                "religion"=> "Islam",
                "community"=> "Marathi",
                "living_in"=> "Canada",
                "email"=> "ali@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ]
            ,

            [
                "id" => 7,
                "profile_for"=> "Self",
                "first_name"=> "Momi",
                "last_name"=> "Rana",
                "dob"=> "1999-05-05",
                "gender"=> "Male",
                "religion"=> "Islam",
                "community"=> "Marathi",
                "living_in"=> "PAKISTAN",
                "email"=> "momi@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ]
            ,

            [
                "id" => 8,
                "profile_for"=> "Daughter",
                "first_name"=> "Alveena",
                "last_name"=> "Hafeez",
                "dob"=> "2002-05-05",
                "gender"=> "Female",
                "religion"=> "Islam",
                "community"=> "Mughal",
                "living_in"=> "PAKISTAN",
                "email"=> "alveena@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ]

            ,

            [
                "id" => 9,
                "profile_for"=> "Son",
                "first_name"=> "Adnan",
                "last_name"=> "Ali",
                "dob"=> "1994-05-05",
                "gender"=> "Male",
                "religion"=> "Islam",
                "community"=> "Mughal",
                "living_in"=> "PAKISTAN",
                "email"=> "adnan@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ]

            ,

            [
                "id" => 10,
                "profile_for"=> "Self",
                "first_name"=> "Adnan",
                "last_name"=> "Ali",
                "dob"=> "1996-05-05",
                "gender"=> "Male",
                "religion"=> "Islam",
                "community"=> "Mughal",
                "living_in"=> "PAKISTAN",
                "email"=> "adnanali@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ]

            ,

            [
                "id" => 11,
                "profile_for"=> "Self",
                "first_name"=> "Sunny",
                "last_name"=> "Ali",
                "dob"=> "1998-05-05",
                "gender"=> "Male",
                "religion"=> "Islam",
                "community"=> "Mughal",
                "living_in"=> "PAKISTAN",
                "email"=> "sunnyali@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ]
            ,

            [
                "id" => 12,
                "profile_for"=> "Self",
                "first_name"=> "Farhan",
                "last_name"=> "Ali",
                "dob"=> "1998-05-05",
                "gender"=> "Male",
                "religion"=> "Islam",
                "community"=> "Mughal",
                "living_in"=> "PAKISTAN",
                "email"=> "farhan@gmail.com",
                "email_verified_at"=> null,
                "password" => "fae6579e9c9c4b6bb5043024d7b0ece4",
            ]

        ];



        // Saving user
        DB::table('users')->insert($userRecords);

    }
}
