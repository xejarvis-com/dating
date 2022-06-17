<?php

namespace App\Helper;

class CoupleTupleHelper
{

    public function getBloodGroups()
    {
        return [

            'Dont Know','A+','A-','B+','B-','AB+','AB-','O+','O-'

        ];
    }
    public function getFathersstatus()
    {
        return [

            'Employed','Business','Retired','Not Employed','Passed Away'

        ];
    }
    public function getMothersstatus()
    {
        
        return [

            'Homemaker','Employed','Business','Retired','Passed Away'

        ];
    }
    
    public function getMoneyTypeList()
    {
        return ['Pakistani Rupee','Indian Rupee','Taka','USD','Euro'];
    }

    public function getMonthlySalaryInTaka()
    {
        return ['Under 25000','From 25000 to 50000','From 50000 to 100000','From 100000 to 200000','From 200000 to 500000','Above 500000'];
    }

    public function getMonthlySalaryInDollar()
    {
        return ['Under $50000','From $500000 to $100000','From $100000 to $500000','Above $500000'];
    }

    public function getMonthlySalaryInRupee()
    {
        return ['Under 5000','From 5000 to 10000','From 10000 to 15000','Above 15000'];
    }

}
