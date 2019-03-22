<?php

class Session {

    function __construct() {
       session_start();
    }
    
    function getSessionVar($key) {
          return $_SESSION[$key];
    }

    function getSession() {
        return $_SESSION;
    }

    public function setSession($data, $value = NULL) {
        if (is_array($data)) {
            foreach ($data as $key => &$value) {
                $_SESSION[$key] = $value;
            }

            return;
        }

        $_SESSION[$data] = $value;
    }

    public function unsetSession($key) {
        if (is_array($key)) {
            foreach ($key as $k) {
                unset($_SESSION[$k]);
            }

            return;
        }

        unset($_SESSION[$key]);
    }

    public function hasSession($key) {
        return isset($_SESSION[$key]);
    }

    function rmSession() {
        session_destroy();
    }
    
    function __distructor(){
        $this->unsetSession($_SESSION);
        $this->reSession();
    }
}
