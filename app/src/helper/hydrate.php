<?php
namespace ArchaeologicalStudies\src\helper;

/**
 * trait hydrate
 *
 * @author louis bruge <louis.bruge@gmail.com>
 * @version 1.0.0
 */

trait hydrate
{
    /**
     * hydrate
     *
     * trait in order to hydrate class model
     *
     * recover the key's name of the data, in order to initialize the class with a loop
     * Inside the loop, the string key is used
     *
     * @param array $data
     *
     * @return void
     */
 
    function hydrate(array $data)
    {
        foreach($data as $key => $value) 
        {
            /* modified $key string into a method by add set and uppercase the first letter */
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }


}
?>
