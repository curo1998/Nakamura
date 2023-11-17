<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function signup(){
        return view('/signup');
    }

    public function signup_conf(){
        return view('/signup_conf');
    }

    public function signup_comp(){
        return view('/signup_comp');
    }

    public function pwd_reset(){
        return view('/pwd_reset');
    }

    public function pwd_form(){
        return view('/pwd_form');
    }
    
    public function pwd_comp(){
        return view('/pwd_comp');
    }

    public function main(){
        return view('/main');
    }

    public function forum(){
        return view('/forum');
    }

    public function user_profile(){
        return view('/user_profile');
    }

    public function user_edit(){
        return view('/user_edit');
    }

    public function user_edit_conf(){
        return view('/user_edit_conf');
    }

    public function user_delete_conf(){
        return view('/user_delete_conf');
    }

}


