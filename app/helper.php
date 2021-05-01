<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// if (!function_exists('user_email')) {
//     function user_email()
//     {
//         $user = Auth::user();

//         return $user->email;
//     }
// }

function get_states()
{
    return DB::table('states')->get();
}

function get_lgas($id)
{
    return DB::table('government_areas')->where('state_id',$id)->get();
}
