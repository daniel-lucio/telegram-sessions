<?php

namespace okayinc;
use okayinc;

class telegram_session{
        public static function start($name){
                session_id($name);
                session_name($name);
                session_start();
        }

    /**
    *    Stores datas in the session.
    *    Example: $instance->('name', $value);
    *   
    *    @param    name    Name of the datas.
    *    @param    value    Your datas.
    *    @return    void
    **/
   
        public function set( $name , $value ){
                $_SESSION[$name] = $value;
        }
   
   
    /**
    *    Gets datas from the session.
    *    Example: echo $instance->get('name');
    *   
    *    @param    name    Name of the datas to get.
    *    @return    mixed    Datas stored in session.
    **/
   
        public function get( $name ){
                if ( isset($_SESSION[$name])){
                        return $_SESSION[$name];
                }
                return null;
    }

        public function isset( $name ){
                return isset($_SESSION[$name]);
        }

        public function unset( $name ){
                unset( $_SESSION[$name] );
        }

        public function json_encode(){
                return json_encode($_SESSION);
        }

        public function reset(){
                return ($_SESSION = array());
        }
}
