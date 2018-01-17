<?php

/**
 * Class textarea
 *
 * generate textarea field for form
 *
 * @author louis bruge <louis.bruge@gmail.com>
 *
 * @version 1.0.2
 */

namespace ArchaeologicalStudies\helper\form;

class textarea extends fieldform
{
    public $_cols = 50,
        $_rows = 3,
        $_wrap = "hard";

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
        return "<label for=\"{$this->_name}\"></label> <br /> <textarea name=\"{$this->_name}\" placeholder=\"{$this->_placeholder}\" maxlength=\"{$this->_maxlength}\" cols=\"{$this->_cols}\" rows=\"{$this->_rows}\" wrap=\"{$this->_wrap}\"> </textarea>";
    }
}
?>
