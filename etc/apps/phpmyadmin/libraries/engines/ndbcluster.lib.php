<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * @package PhpMyAdmin-Engines
 */

/**
 *
 * @package PhpMyAdmin-Engines
 */
class PMA_StorageEngine_Ndbcluster extends PMA_StorageEngine
{
    /**
     * @return  array
     */
    public function getVariables()
    {
        return array(
            'ndb_connectstring' => array(
            ),
         );
    }

    /**
     * @return  string  SQL query LIKE pattern
     */
    public function getVariablesLikePattern()
    {
        return 'ndb\\_%';
    }

    /**
     * returns string with filename for the MySQL helppage
     * about this storage engne
     *
     * @return  string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'ndbcluster';
    }
}

?>
