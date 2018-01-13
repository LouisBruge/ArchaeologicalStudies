<?php
namespace app\src\helper;
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
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }


}
?>
