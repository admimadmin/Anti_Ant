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


    public function get_current_year(){
        $interval = date("Y") - 5; //TODO format render
        $year = date("Y");    
        return $year;
    }

    /***
     * @return Current date
     * 
    */
    public function get_Current_Date(){

        $this->date = date("Y/m/d");
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

    public function get_current_user(){
        return $_SESSION['user'];
    }

    protected function get_word_cnt($file_fullpath) {
        $file = @fopen($file_fullpath, "r");
        if ($file === FALSE) {
          // error_log("Failed to open file $file_fullpath .");
          return -1;
        }
        $cnt = 0;
        while (!feof($file)) {
          $line = fgets($file, 8192);
          $cnt += str_word_count($line);
        }
        fclose($file);
        return $cnt;
    }


    public function verify_secure_lenth_page($path){
        if( $this->get_word_cnt($path) < 1000 ){
            echo "Secure performance render";
        }
    }
}

$api = new API();

echo $api->verify_secure_lenth_page('C:\Users\IEUser\Documents\php_test\script.php');

?>