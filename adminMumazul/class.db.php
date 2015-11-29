<?php
class Db {

    static $con = false;

    function __construct() {
    }

    /**
     * getCon()
     *
     * Inicializa uma conexão com o banco (Singleton)
     *
     * @example
     * PostgreSQL pgsql:host=localhost;dbname=intranetanalise
     * Oracle     OCI:dbname=intranetanalise
     * MySQL      mysql:host=localhost;dbname=intranetanalise
     * @version 1.0 16/02/2009 13:32
     * @return PDO
     */
    public static function getCon() {
        if (!self::$con) {
            try {

                $db_type       = 'mysql';
                $db_port       = '3306';                
                $db_host       = 'app.alexjonas.com.br';
                $db_database   = 'asgard';
                $db_username   = 'server';
                $db_password   = '';
                $db_persistent = false;

                $dsn = $db_type.':';
                $dsn .= 'dbname='.$db_database.'';
                $dsn .= $db_host ? ';host='.$db_host : '';
                $dsn .= $db_port ? ';port='.$db_port : '';

                self::$con = new PDO($dsn, $db_username, $db_password);
                self::$con->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
                self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$con->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
                if($db_persistent){                
                    self::$con->setAttribute(PDO::ATTR_PERSISTENT, true);
                }
            } catch (PDOException $oException) {
                echo 'Erro de coneccao';
                die();
            }
        }
        return self::$con;
    }

    /**
     * query()
     *
     * Executa uma query SELECT recebendo ou não bind variables
     *
     * @link http://br.php.net/manual/pt_BR/class.pdostatement.php
     * @param string $sql
     * @param array $aBindVar
     * @version 1.0 16/02/2009 13:32
     * @return PDOStatement
     */
    public static function query($sql, $aBindVar=null) {

        $stm = null;
        if(self::getCon()){
            $con = self::getCon();
            try {
                if ($aBindVar == null) {
                    $stm = $con->query($sql);
                    $con = false;
                } else {
                    $stm = $con->prepare($sql);
                    $stm->execute($aBindVar);
                    $con = false;
                }
                $stm->setFetchMode(PDO::FETCH_ASSOC);
            } catch (PDOException $oException) {
                echo 'Erro ao executar sql';
                die();
            }
        }
        return $stm;
    }

    /**
     * exec()
     *
     * Executa uma query DELETE, UPDATE ou INSERT
     *
     * @link http://br.php.net/manual/pt_BR/pdo.exec.php
     * @param string $sql
     * @version 1.0 16/02/2009 13:32
     * @return integer
     */
    public static function exec($sql, $aBindVar=null) {
        $iNrows = 0;
        if(self::getCon()){
            $con = self::getCon();
            try {
                if($aBindVar == null){
                    $iNrows = $con->exec($sql);
                    $con = false;
                }
                else {
                    $stm = $con->prepare($sql);
                    $stm->execute($aBindVar);
                    $iNrows = $stm->rowCount();
                    $stm = NULL;
                }            
            } catch (PDOException $oException) {
                $con = false;
                echo 'Erro ao executar comando';
                die();
            }
        }
        return $iNrows;
    }

    /**
     * gravaLogErro
     *
     * Grava o erro resultante de um select, insert, update ou delete
     *
     * @param string $sql
     * @param string $bind
     * @param object $oErro
     * @version 1.0 12/08/2013 14:15
     * @return integer
     */
    // public static function gravaLogErro($sql, $bind, $oErro){
    
    function gravaLogErro($sql, $bind, $oErro){

        $aSql['sql'] = '
            INSERT INTO log_erro (
                  loge_code
                , loge_mens
                , loge_tudo
                , loge_sql
                , loge_bind
            ) VALUES (
                  :p_code
                , :p_mens
                , :p_tudo
                , :p_sql
                , :p_bind
            )';
        
        $aSql['bind'][':p_code'] = $oErro->getCode();
        $aSql['bind'][':p_mens'] = $oErro->getMessage();
        $aSql['bind'][':p_tudo'] = json_encode($oErro);
        $aSql['bind'][':p_sql'] = $sql;
        $aSql['bind'][':p_bind'] = json_encode($bind);

        self::exec($aSql['sql'], $aSql['bind']);

    }

    private function __clone() {
    }    
}
?>