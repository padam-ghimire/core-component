<?php

namespace MehediIitdu\CoreComponentRepository;

class CoreComponentRepository
{
    public static function trigger() {
            $hospital= auth()->user()->id;
            $response= Hospital::where('id',$hospital)->first()->is_approved;
            
        if($response == "false"){
            return redirect(route('hospital.profile'))->with('error', "Your account is not verfied yet!!!")->send();
        }
    }

   
}
