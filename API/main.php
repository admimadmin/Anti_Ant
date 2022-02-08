<?php
/****
 *      Standar code use undercore case.
 *      The version php don't support sign methods, to use sign types.    
 * **/

/**** Default values ***/
define('DEFAULT_TITTLE', 'default title');


/*** Title to pages ***/

define('LOGIN_WEB', 'Login page');
define('ADMIN_SITES', 'Admin Sites');
define('HOME_WEB', 'Home User');
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
        $this->words = 0;
    }    

    /***
     * * @param $str An string with name to select a title pre-config or define, to increase secure valid lalbel's
     * * @return 
    */
    public function get_title($str){
        
        switch($str){

            case 'login':
                $this->title = LOGIN_WEB;
                break;
            case 'list':
                $this->title = LIST_WEB;
                break;
            case 'home':
                $this->title = HOME_WEB;    
                break;
            case 'edit':
                $this->title = EDIT_WEB;
                break;    
            default :
                $this->title = DEFAULT_TITTLE;
                break;    
        }

        return $this->title;
    }

    /***
     * @return Check the number of words on page that is render
     * 
    */
    public function get_length_words(){
        return $this->words;
    }

    /***
     * @return Current date
     * 
    */
    public function get_Current_Date(){
        return $this->date;
    }

    /***
     * * @see This function initialize the session to use User's functionalitys
     * ***/
    public static function session_init(){
        session_start();
    }

    public static function handle_permission_denied(){
        header("location: permission_denied.php");
    }

    public static function check_session_on($user_session){
        $flag = false;

        if(!isset($user_session)){
            $flag = true;
        }
        return $flag;
    }

  

}



?>