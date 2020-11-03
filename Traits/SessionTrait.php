<?php

namespace nlib\Session\Traits;

trait SessionTrait {

    public function sessionStart() : self {
        if(empty(session_id())) SESSION_START();
        if(empty($this->getCurrentSession())) $_SESSION[$this->_i()] = [];
        return $this;
    }

    #region Getter

    public function getFlash($key) { return array_key_exists($key, $cs = $this->getCurrentSession()) ? $cs[$key] : null ; }
    
    public function getCurrentSession() { return array_key_exists($this->_i(), $_SESSION) ? $_SESSION[$this->_i()] : []; }

    #endregion

    #region Setter
    
    public function addflash($key, $value) : self { $_SESSION[$this->_i()][$key] = $value; return $this; }

    #endregion
}