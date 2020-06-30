<?php
class Auth extends Controller{
    public function index(){
        $this->view('auth/index');
    }
    
    public function register(){
        var_dump($_POST);
    }

    // public function register(Request $request){
    //     $nama_depan = $request['nama_depan'];
    //     $nama_belakang = $request['nama_belakang'];
    //     return view('auth/welcome')
    // }
}