<?php

class Set implements Cookies {

    function __construct() {
        if (empty($this->getCookies())) {
            session_start();
        }
    }

    function init() {
        if (!empty($this->getCookies())) {
            //	session_start();
            return true;
        } else {
            return false;
        }
    }

    function setCookies($cookies, $expirary = '', $path = '/', $domain = '', $security = 0) {
        if ($expirary == '') {
            $expirary = (time() + (10 * 365 * 24 * 60 * 60));
        }
        foreach ($cookies as $key => $value) {
            setcookie($key, $value, $expirary, $path, $domain, $security);
        }
    }

    function getCookies() {
        foreach ($_COOKIE as $key => $value) {
            $res[$key] = $value;
        }
        return @$res;
    }

    function delCookies() {
        foreach ($_COOKIE as $key => $value) {
            $this->setCookies([$key => ''], time() - 3600);
        }
        print_r($_COOKIE);
    }

    function loggedin() {
        if (!empty($this->getCookies())) {
            return true;
        } else {
            return false;
        }
    }

    function setSession($variable) {
        //	session_start();
        foreach ($variable as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    function destroySession() {
        if ($this->init()) {
            session_start();
            session_destroy();
            $this->delCookies();
            return true;
        } else
            return false;
    }

    function getSession() {
        if ($this->init())
            foreach ($_SESSION as $key => $value) {
                $res[$key] = $value;
            }
        return @$res;
    }

    function checkSession() {
        if (!empty($this->getSession())) {
            return true;
        } else
            return false;
    }

}
