<?php

/**
 * Description of FDNS
 *
 * @author rimsan
 */
class FDNS {

    private $id;
    private $ip;
    private $region;
    private $status;
    private $dbConn;

    function getId() {
        return $this->id;
    }

    function getIp() {
        return $this->ip;
    }

    function getRegion() {
        return $this->region;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIp($ip) {
        $this->ip = $ip;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function getDbConn() {
        return $this->dbConn;
    }

    function setDbConn($dbConn) {
        $this->dbConn = $dbConn;
    }

    public function __construct() {
        require_once 'DB.php';
        $db = new DB();
        $this->dbConn = $db->connect();
    }

    public function saveIpAndRegion() {

        if (!is_array($this->getIpByIp())) {

            $sql = "INSERT INTO site_users (ip, region) VALUES (:ip,:region)";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(":ip", $this->ip);
            $stmt->bindParam(":region", $this->region);

            try {
                if ($stmt->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }

    public function updateRegion() {

        $stmt = $this->dbConn->prepare('UPDATE site_users SET region=:region WHERE ip=:ip');
        $stmt->bindParam(':region', $this->region);
        $stmt->bindParam(':ip', $this->ip);

        try {
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getIpByIp() {

        $stmt = $this->dbConn->prepare('SELECT * FROM site_users where ip=:ip limit 1');
        $stmt->bindParam(':ip', $this->ip);

        try {

            if ($stmt->execute()) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $user;
    }

    public function updateStatusByIp() {

        $stmt = $this->dbConn->prepare('UPDATE site_users SET status=:status WHERE ip=:ip');
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':ip', $this->ip);

        try {
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

}
