<?php 
/**
*
* class input
*
* generate input form
*
* @author louis bruge <louis.bruge@gmail.com>
*
* @version 1.0.0
 */

namespace ArchaeologicalStudies\helper\form;

class input
{
    /**
     *
     * @var string $_type
     *
     * @var string $_value
     *
     * @var string $_label
     *
     * @var string $_name
     *
     * @var int $_name
     *
     * @var bool $_required
     */
    protected $_type = "text",
        $_value = NULL,
        $_label = NULL,
        $_name = NULL,
        $_size = 50,
        $_required = False;

    /**
     *
     * __construct function
     *
     * @param array $data
     *
     * @return void
     */

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    use \ArchaeologicalStudies\helper\hydrate;

    /**
     *
     * --- MUTATOR --- 
     *
     */

    /**
     *
     * setType
     *
     * @param string $type
     *
     */
    public function set($type)
    {
        $this->_type = $type;
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
     * setLabel
     *
     * @param string $label
     *
     * @return void
     */
    public function setLabel($label)
    {
        $this->_label = $label;
    }

    /**
     *
     * setName
     *
     * @param string $name
     *
     * @return void
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     *
     * setSize
     *
     * @param int $size
     *
     * @return void
     */
    public function setSize($size)
    {
        $this->_size = $size;
    }

    /**
     *
     * setRequired
     *
     * @param bool $required
     *
     * @return void
     */

    public function setRequired($required)
    {
        $this->_required = $required;
    }


    /**
     *
     * field
     *
     * @return string form field
     */
    public function field()
    {
        return "<input type=\"{$this->_type}\" name=\"{$this->_name}\" label=\"{$this->_label}\" size=\"{$this->_size}\" value=\"{$this->_value}\">";
    }



}
?>
