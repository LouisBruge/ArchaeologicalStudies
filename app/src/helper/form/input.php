<?php 
/**
*
* class input
*
* generate input form
*
* @author louis bruge <louis.bruge@gmail.com>
*
* @version 1.4.0
 */

namespace ArchaeologicalStudies\helper\form;

class input extends fieldform
{
    /**
     *
     * @var string $_type
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
        $_label = NULL,
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
    public function setType($type)
    {
        $this->_type = $type;
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
    public function build()
    {
        return "<label for=\"{$this->_name}\"> </label> " . self::spacer() . " <input type=\"{$this->_type}\" id=\"{$this->_name}\" name=\"{$this->_name}\" placeholder=\"{$this->_placeholder}\" label=\"{$this->_label}\" size=\"{$this->_size}\" value=\"{$this->_value}\">" . self::spacer();
    }
}
?>
