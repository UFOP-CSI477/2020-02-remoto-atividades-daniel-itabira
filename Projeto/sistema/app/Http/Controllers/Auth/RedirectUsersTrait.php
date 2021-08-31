<?php

namespace App\Http\Controllers\Auth;
 
trait RedirectUsersTrait
{
    public function redirectTo()
    {   
        $user = auth()->user()->tipo;

        if($user == "credor"){
            return '/credor';
        }else{
            return '/admin';
        }
        
    }
}

