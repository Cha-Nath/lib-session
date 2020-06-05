<?php

namespace nlib\Session\Traits;

trait SessionTrait {

    public function sessionStart(string $i = 'i') : void {
        if(empty(session_id())) SESSION_START();
        if(empty($_SESSION[$i])) $_SESSION[$i] = [];
    }

}