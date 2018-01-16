<?php

/**
 * Class textarea
 *
 * generate textarea field for form
 *
 * @author louis bruge <louis.bruge@gmail.com>
 *
 * @version 1.0.1
 */

namespace ArchaeologicalStudies\helper\form;

class textarea extends fieldform
{
    public $_cols = 40,
        $_rows = 40,
        $_wrap = "soft";

    /**
     *
     * --- Mutators ---
     *
     */

    /**
     * setCols
     *
     * @param int $cols
     *
     * @return void
     */
    public function setCols(int $cols)
    {
        $this->_cols = $cols;
    }

    /**
     * setRows
     *
     * @param int $rows
     *
     * @return void
     */
    public function setRows(int $rows)
    {
        $this->_rows = $rows;
    }

    /**
     * setWrap
     *
     * @param string $wrap
     *
     * @return void
     */
    public function setWrap(string $wrap)
    {
        $this->_wrap = $wrap;
    }

    public function build()
    {
        return "<textarea name=\"{$this->_name}\" placeholder=\"{$this->_placeholder}\" maxlength=\"{$this->_maxlength}\"> </textarea>";
    }
}
?>
