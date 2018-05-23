<?php

class parser
{
    public $url;
    public function index()
    {
        if($file = file_get_contents($this->url)){
            
            var_dump(preg_match_all('<img([^>]*[^/])>', $file));
            //'<img([^>]*[^/])>'
            //return $file;
        }else{
            return "Ошибка чтения сайта";
        }
        
    }
    
    public function createHtmlFiles()
    {
        
    }
    
    public function openHtmlFiles()
    {
        
    }
}
