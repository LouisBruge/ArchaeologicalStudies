<?php

/**
 * EmployerManager Class 
 *
 * class to manager connexion between the Database and the objet Employer
 *
 * @author louis Bruge <louis.bruge@gmail.com>
 *
 * @version 1.0.0
 */

namespace ArchaeologicalStudies\src\modele;

use \PDO;

use ArchaeologicalStudies\src\controller\employer;

class employerManager
{
    /**
     * @var $_db identification for the DATABASE PDO module
     */
    private $_db;

    /**
     *
     * __construct
     *
     * @param PDO $db identification for the PDO module
     *
     * @return void
     */

    public function __construct(PDO $db)
    {
        $this->_db = $db;
    }

    /**
     * 
     * db
     *
     * @return mixed $_db
     */

    private function db()
    {
        return $this->_db;
    }

    /**
     *
     * Create function
     *
     * insert a employer objet to the DATABASE with bindParam
     *
     * @param employer $employer objet
     *
     * @return void
     */
    public function create(employer $employer)
    {
        $q = $this->db()->prepare("INSERT INTO employer (name, abrev, status, siren, siret) VALUES (:name, :abrev, :status, :siren, :siret)");

        /* Use binParam to avoid exploit! */
        $q->bindParam(':name', $name, PDO::PARAM_STR);
        $q->bindParam(':abrev', $abrev, PDO::PARAM_STR);
        $q->bindParam(':status', $status, PDO::PARAM_STR);
        $q->bindParam(':siren', $siren, PDO::PARAM_INT);
        $q->bindParam(':siret', $siret, PDO::PARAM_INT);

        $q->execute();


    }

    /** 
     * 
     * Update function
     *
     * update the record
     *
     * @param int $id which is the id of the record
     *
     * @param employer $employer objet with new parameters
     *
     * @return void
     *
     */
    public function update(int $id, employer $employer)
    {
        $q = $this->db()->prepare("UPDATE employer SET name = :name, abrev = :abrev, status = :status, siren = :siren, siret = :siret WHERE id = :id");

        /* Use binParam to avoid exploit! */
        $q->bindParam(':id', $id, PDO::PARAM_INT);
        $q->bindParam(':name', $name, PDO::PARAM_STR);
        $q->bindParam(':abrev', $abrev, PDO::PARAM_STR);
        $q->bindParam(':status', $status, PDO::PARAM_STR);
        $q->bindParam(':siren', $siren, PDO::PARAM_INT);
        $q->bindParam(':siret', $siret, PDO::PARAM_INT);

        $q->execute();
    }

    /**
     *
     * Get function
     *
     * get a record
     *
     * @param int $id
     *
     * @return employer $employer objet
     *
     */
    public function get(int $id)
    {
        $q = $this->db()->prepare("SELECT id, name, abrev, status, siren, siret FROM employer WHERE id = :id");

        $q->bindParam(':id', $id, PDO::PARAM_INT);

        $q->execute();

        return new employer($q->fetch(PDO::FETCH_ASSOC));
    }

    /**
     *
     * getAll function
     *
     * get all records
     *
     * @return array $employers array of employer objects
     *
     */

    public function getAll()
    {
        $q = $this->db()->prepare("SELECT id, name, abrev, status, siren, siret FROM employer");

        $q->execute();

        while($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $employers = new employer($data);
        }

        return $employers;
    }

    /**
     *
     * destroy function
     *
     * @param int $id of the record to destroy
     *
     * @return void
     *
     */

    public function destroy(int $id)
    {
        $q = $this->db()->prepare("DELETE FROM employer WHERE id = :id");

        $q->bindParam(":id", $id, PDO::PARAM_INT );

        $q->execute();
    }



}
?>
