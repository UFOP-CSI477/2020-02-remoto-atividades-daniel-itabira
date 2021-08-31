<?php

namespace App\Http\Controllers\Auth;
 
trait RedirectUsersTrait
{
    public function redirectTo()
    {   
        $user = auth()->user()->type;

    
        if($user == 1){
            return '/menuAdm';
        }else{
            return '/menuProf';
        }
        
    }
}

