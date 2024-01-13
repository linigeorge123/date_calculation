<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DeliveryTimeController extends Controller
{
    public function get_deliverytime($date,$days)
    {
        $data1=Carbon::parse($date);
        $total_numberdays=$data1->addDay($days);
        $final=$data1;
        for($i=0;$i<$days;$i++)
        {
            if($final->isSaturday()=="true"||$final->isSunday()=='true')
            {
                $final=$final->addDay(1);
                $days=$days+1;
            }
            else{
                $final=$final->addDay(1);
             
        }
        $delivery_date=date('d-m-Y  H:i:s', strtotime($final));
        return $delivery_date;

    }
}
}
