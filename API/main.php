<?php


/**** Default values ***/
define('DEFAULT_TITTLE', 'default title');


/*** Title to pages ***/
define('ADMIN_SITES', 'Admin sites');
define('HOME_USER', 'Home User');
define('EDIT_WEB', 'Edit WebPage');
define('LIST_WEB', 'List WebPage');


/**
 * *@author Johans Caicedo
 * **/
class API{

    public $title;    
    public $header;
    public $footer;
    public $article;
    public $date;

    protected $words;

    function __construct(){
        $this->title = DEFAULT_TITTLE;
    }

    /***
     * * @param
     * * @return 
    */
    public function getTitle(){
        return $this->title;
    }

    /***
     * 
     * 
    */
    public function getLengthWords(){
        return $this->words;
    }

    /***
     * 
     * 
    */
    public function getCurrentDate(){
        return $this->date;
    }



}



?>