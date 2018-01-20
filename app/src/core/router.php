<?php
/**
 *
 * Router class
 *
 * @version 0.0.1
 */

namespace ArchaeologicalStudies\core;
class router
{
    /**
     *
     * @var string $_uri
     *
     * @var string $_method
     *
     * @var string $_name Name of the web server
     *
     * @var int $_port Number of the port
     */
    public $_uri,
        $_method,
        $_acton,
        $_name,
        $_port;

    /**
     *
     * function __construct
     *
     * @param string $uri
     *
     * @param string $method
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
     * function setUri
     *
     * @param string $uri
     *
     * @return void
     */
    public function setUri(string $uri)
    {
        $this->_uri = trim($uri, '/');
    }

    /**
     *
     * function setMethod
     *
     * @param string $method
     *
     * @return void
     */
    public function setMethod(string $method)
    {
        $this->_method = $method;
    }

    /**
     *
     * function setName
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
     * function setPort
     *
     * @param int $port
     *
     * @return void
     */
    public function setPort(string $port)
    {
        $this->_port = $port;
    }

    /**
     *
     * function setAction
     *
     * @param string $action 
     *
     * @return void
     */
    private function setAction(string $action)
    {
        $this->_action = $action;
    }

    /**
     *
     * function NotFound
     *
     * @return string 
     */
    private function NotFound()
    {
        //return '<p> Your try to access to ' . $this->_uri . ' and yet, it is not inplmente to the project. Sorry! </p>';
        return header("HTTP/1.0 404 NOT Found");
    }

    /**
     *
     * function redirect 
     *
     * @return new page
     */
    public function redirect()
    {
        if ($this->_uri == "home" or $this->_uri == "index")
        {
            return header('Location: home.php');
        }
        else
        {
            return $this->NotFound();
        }
    }
}
?>
