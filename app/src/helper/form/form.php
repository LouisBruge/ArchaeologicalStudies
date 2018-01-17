<?php

/**
 * form class
 *
 * @author louis bruge <louis.bruge@gmail.com>
 *
 * @version 1.0.1
 */

namespace ArchaeologicalStudies\helper\form;

class form
{

    /**
     *
     * @var string $_action for url_path 
     *  @example  default "#" 
     *
     *  @var string $_target for method
     *      @example "_self" to the current page
     *      @example "_parent"
     *      @example "_top"
     *
     * @var string $_method must be set to "POST" or "GET"
     *
     */
    protected $_action = "#",
        $_target = "_self",
        $_method = "POST";

    /**
     * __construct function
     *
     * @param string $action
     *
     * @param string $target
     *
     * @param string $method
     *
     * @return void
     */
    public function __construct(string $action = "#", string $target = "_self", string $method = "POST")
    {
        $this->_action = $action;
        $this->_target = $target;
        $this->_method = $method;
    }

    /**
     *
     * initForm function
     *
     * @return string a html balise to initialize form
     *
     */
    public function initForm()
    {
        return "<form action=\"{$this->_action}\" method=\"{$this->_method}\" target=\"{$this->_target}\">";
    }

    /**
     *
     * closeForm function 
     *
     * @return string a html balise to close the form
     */
    public static function closeForm()
    {
        return "</form>";
    }

    /**
     *
     * generateForm
     *
     * @param array $fields gathering fieldform objects as textarea or input
     * 
     * @return void
     */
    public function generateForm(array $fields)
    {
        echo $this->initForm();

        foreach ($fields as $field)
        {
            echo $field->build();
        }

        echo self::closeForm();


    }

}

?>
