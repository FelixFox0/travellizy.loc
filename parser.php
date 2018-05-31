<?php

class parser
{
    public $url;
    public $count;
    public $time;
    public function index()
    {
        $start = microtime(true);
        $this->count = preg_match_all('/<img[^>]+>/i', file_get_contents($this->url));
        $this->time = round(microtime(true) - $start, 4);
    }
    
    function validate()
    {
        if (!$fp = curl_init($this->url)) return "Ошибка чтения сайта";
        return false;
    }
    
    public function createHtmlFiles()
    {
        
    }
    
    public function openHtmlFiles()
    {
        
    }
}
