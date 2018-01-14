<?php

namespace ArchaeologicalStudies\src\controller;

class address
{
    private $_id,
        $_street,
        $_complement_street,
        $_postal_code,
        $_city,
        $_cedex,
        $_employer;

    /**
     * Construct
     *
     * function to hydrate address class
     *
     * @param array data
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    use ArchaeologicalStudies\src\helper\hydrate;

    /* 
     * --- ACCESORS ---
     */

    /**
     * id
     *
     * @return int id
     */
    public function id()
    {
        return $this->_id;
    }

    /**
     * street
     *
     * @return string street
     */
    public function street()
    {
        return $this->_street;
    }

    /**
     * complement_street
     *
     * @return string complement_street
     */
    public function complement_street()
    {
        return $this->_complement_street;
    }

    /**
     * postal_code
     *
     * @return int postal_code
     */

    public function postal_code()
    {
        return $this->_postal_code;
    }

    /**
     * city
     *
     * @return string city
     */

    public function city()
    {
        return $this->_city;
    }

    /**
     * cedex
     *
     * @return int cedex
     */

    public function cedex()
    {
        return $this->_cedex;
    }

    /**
     * employer
     *
     * @return int employer
     */

    public function employer()
    {
        return $this->_employer;
    }

    /**
     *
     * --- MUTATOR ---
     *
     */

    /**
     *
     * setId
     *
     * @param int id
     *
     * @return void
     */

    public function setId(int $id)
    {
        $this->_id = $id;
    }

    /**
     * setStreet
     *
     * @param string street
     *
     * @return void
     */

    public function setStreet(string $street)
    {
        $this->_street = $street;
    }

    /**
     *
     * setComplement_street
     *
     * @param string complement_street
     *
     * @return void
     */

    public function setComplement_street(string $complement_street)
    {
        $this->_complement_street = $complement_street;
    }

    /**
     * setPostal_code
     *
     * @param int postal_code
     *
     * @return void
     */

    public function setPostal_code(int $postal_code)
    {
        $this->_postal_code = $postal_code;
    }

    /**
     * setCity
     *
     * @param string city
     *
     * @return void
     */

    public function setCity(string $city)
    {
        $this->_city = $city;
    }

    /**
     * setCedex
     *
     * @param int cedex
     *
     * @return void
     */

    public function setCedex(int $cedex)
    {
        $this->_cedex = $cedex;
    }

    /**
     *
     * setEmployer
     *
     * @param int employer
     *  @return void
     */

    public function setEmployer(int $employer)
    {
        $this->_employer = $employer;
    }

}

?>
