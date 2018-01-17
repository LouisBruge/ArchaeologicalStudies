<?php

/**
 *
 * abstract fieldform
 *
 * generate field form
 *
 * @author louis bruge <louis.bruge@gmail.com>
 *
 * @version 1.0.0
 */

namespace ArchaeologicalStudies\helper\form;

abstract class fieldform
{
    /** 
     *
     * @var string $_name
     *
     * @var string $_placeholder
     *
     * @var string $_form
     *
     * @var boolean $_autofocus
     *
     * @var boolean $_readonly
     *
     * @var int $_maxlength
     *
     * @var string $_value
     */

    public $_name,
        $_placeholder,
        $_form,
        $_autofocus = False,
        $_readonly = False,
        $_maxlength = 250,
        $_value = NULL;

    use \ArchaeologicalStudies\helper\hydrate;

    /**
     *
     * __construct
     *
     * @param array $data
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }


    /**
     *
     * setName
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name)
    {
        $this->_name = $name;
    }

    /**
     *
     * setPlaceholder
     *
     * @param string $placeholder
     *
     * @return void
     */
    public function setPlaceholder(string $placeholder)
    {
        $this->_placeholder = $placeholder;
    }

    /**
     *
     * setMaxlength
     *
     * @param int $maxlength
     *
     * @return void
     */
    public function setMaxlength(int $maxlength)
    {
        $this->_maxlength = $maxlength;
    }

    /**
     *
     * setValue
     *
     * @param string $value
     *
     * @return void
     */
    public function setValue($value)
    {
        $this->_value = $value;
    }


    /**
     *
     * spacer
     *  
     *  return string balise (<br />) to make the form easier to read
     * @return string 
     */
    protected static function spacer()
    {
        return "<br />";
    }

    /**
     *
     * Build
     *
     * write the formated field 
     */
    abstract public function build();
    
}
?>
