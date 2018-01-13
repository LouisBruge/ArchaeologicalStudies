<?php
namespace app\src\controller\employer;

class employer 
{
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
    
    /*
     *  --- ACCESOR --- 
     *
     */

    /*
     * @return int id
     */
    public function id() {
        return $this->_id;
    }

    /*
     * @return name string
     */
    public function name() {
        return $this->_name;
    }

    /*
     * @return abrev string
     */
    public function abrev() {
        return $this->_abrev;
    }

    /*
     * @return status string
     */
    public function status() {
        return $this->_status;
    }

    /*
     * @return int SIREN
     */
    public function siren() {
        return $this->_siren;
    }

    /*
     * @return int SIRET
     */
    public function siret() {
        return $this->_siret;
    }

    /*
     *
     * GETTER
     *
     */

    /**
     * getId
     *
     * get id for employer class
     *
     * @param int id
     *
     * @return void
     */
    public function getId(int $id) {
        $this->_id = $id;
    }

    /**
     * getName
     *
     * get name for employer class
     *
     * @param string name
     *
     * @return void
     */
    public function getName(string $name) {
        $this->_name = $name;
    }

    /**
     * getAbrev
     *
     * get abrev for employer class
     *
     *  @param string abrev
     *
     *  @return void
     */
    public function getAbrev(string $abrev) {
        $this->_abrev = $abrev;
    }

    /** 
     * getStatus
     *
     * get status for employer class
     *
     * @param string status
     *
     *  @return void
     */
    public function getStatus(string $status) {
        $this->_status = $status;
    }

    /**
     * getSiren
     *
     * get SIREN for employer class
     *
     * @param int siren
     *
     * @return void
     */
    public function getSiren(int $siren) {
        $this->_siren = $siren;
    }

    /**
     * getSiret
     *
     * get SIRET for employer class
     *
     * @param int siret
     *
     * @return void
     */
    public function getSiret(int $siret) {
        $this->_siret = $siren;
    }


};
?>
