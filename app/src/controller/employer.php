<?php

/**
 * Class employer
 *
 * generate employer class 
 *
 * @author louis bruge <louis.bruge@gmail.com>
 *
 * @version 1.0.0
 */

namespace ArchaeologicalStudies\controller;

class employer 
{
    /**
     * @var int $_id 
     * @var string $_name the name of the employer
     * @var string $_abrev
     * @var string $_status the juridic status of the employer
     * @var int $_siren the SIREN numero
     * @var int $_siret the SIRET numero
     */
    private $_id,
        $_name,
        $_abrev,
        $_status,
        $_siren,
        $_siret;

    /**
     * __construct
     *
     * function to construct the employer class
     *
     * @param array data
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    use \ArchaeologicalStudies\helper\hydrate;
    
    /*
     *  --- ACCESOR --- 
     *
     */

    /*
     * @return int $_id
     */
    public function id() {
        return $this->_id;
    }

    /*
     * @return string $_name
     */
    public function name() {
        return $this->_name;
    }

    /*
     * @return string $_abrev
     */
    public function abrev() {
        return $this->_abrev;
    }

    /*
     * @return string $_status
     */
    public function status() {
        return $this->_status;
    }

    /*
     * @return int $_SIREN
     */
    public function siren() {
        return $this->_siren;
    }

    /*
     * @return int $_SIRET
     */
    public function siret() {
        return $this->_siret;
    }

    /*
     *
     * --- MUTATORS ---
     *
     */

    /**
     * setId
     *
     * set id for employer class
     *
     * @param int $id
     *
     * @return void
     */
    public function setId(int $id) {
        $this->_id = $id;
    }

    /**
     * setName
     *
     * set name for employer class
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name) {
        $this->_name = $name;
    }

    /**
     * setAbrev
     *
     * set abrev for employer class
     *
     *  @param string $abrev
     *
     *  @return void
     */
    public function setAbrev(string $abrev) {
        $this->_abrev = $abrev;
    }

    /** 
     * setStatus
     *
     * set status for employer class
     *
     * @param string $status
     *
     *  @return void
     */
    public function setStatus(string $status) {
        $this->_status = $status;
    }

    /**
     * setSiren
     *
     * set SIREN for employer class
     *
     * @param int $siren
     *
     * @return void
     */
    public function setSiren(int $siren) {
        $this->_siren = $siren;
    }

    /**
     * setSiret
     *
     * set SIRET for employer class
     *
     * @param int $siret
     *
     * @return void
     */
    public function setSiret(int $siret) {
        $this->_siret = $siren;
    }


};
?>
