<?php

    class App{
        protected $controller = "HomeController";
        protected $action = "index";
        protected $params = [];


        public function __construct(){
            $this->prepareURL();
            $this->render();
        }
    
        private function prepareURL(){
            $url = $_SERVER['QUERY_STRING'];


            if(!empty($url)){
                $url = rtrim($url,"/");
                $url = explode("/",$url);
                $this->controller = isset($url[0]) ? ucwords($url[0])."controller":"HomeController";
                $this->action = isset($url[1]) ? $url[1] : "index";
                unset($url[0],$url[1]);

                $this->params = !empty($url) ? array_values($url):[];
            }
            
        }


        private function render(){
            $this->controller = new $this->controller;
                

                if(method_exists($this->controller, $this->action)){
                    call_user_func_array([$this->controller,$this->action],$this->params);
                }
                else{
                    echo "Method not Exist";
                }
        }

    }
?>