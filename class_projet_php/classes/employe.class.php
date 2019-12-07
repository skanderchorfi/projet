<?php

    require 'dbconnect.class.php';

    class employer
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function readAllemployer()
        {
            try {
                $req = 'SELECT * FROM employer';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneemployer($id)
        {
            try {
                $req = 'SELECT * FROM employer WHERE eid= :emp_id';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':emp_id', $eid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewEmployer($eid, $name, $phone, $email, $mdp)
        {
            try {
                $sql = "INSERT INTO employer(eid, name, phone, email,mdp) VALUES (:emp_id,:emp_name,:emp_phone,:emp_adresse,:emp_mdp)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":clt_nom", $eid);
            $result->bindparam(":clt_prenom", $name);
            $result->bindparam(":clt_dateN", $phone);
            $result->bindparam(":clt_adr", $email);
            $result->bindparam(":clt_tel", $mdp);
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateClient($id, $nom, $prenom, $dateBirth, $adr, $tel)
        {
            try {
                $sql = 'UPDATE clients
                        SET nom = :clt_nom,
                            prenom = :clt_prenom,
                            datenaissance = :clt_dateN,
                            adresse = :clt_adr,
                            tel = :clt_tel
                        WHERE id = :clt_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id", $id);
                $result->bindparam(":clt_nom", $nom);
                $result->bindparam(":clt_prenom", $prenom);
                $result->bindparam(":clt_dateN", $dateBirth);
                $result->bindparam(":clt_adr", $adr);
                $result->bindparam(":clt_tel", $tel);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteClient($id)
        {
            try {
                $sql = 'DELETE FROM clients WHERE id = :clt_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id", $id);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }