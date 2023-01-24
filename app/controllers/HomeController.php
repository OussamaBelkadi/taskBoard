<?php

class HomeController{
    public function index(){    
        $data['title'] = "Home Page";
        $data['content'] = "Content Of home page";
        View::load('home',$data);
    }
}
?>