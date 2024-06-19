<?php

class EvaluationModel {

    private $dbserver = 'localhost';
    private $dbname = 'evaluation_form';
    private $dbusername = 'root';
    private $dbpassword = '';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->dbserver};dbname={$this->dbname}", $this->dbusername, $this->dbpassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function insertEvaluation($fname, $lname, $age, $impression, $rating, $improvement) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO evaluations (fname, lname, age, impression, rating, improvement) VALUES (:fname, :lname, :age, :impression, :rating, :improvement);");
            
            $stmt->bindParam(":fname", $fname);
            $stmt->bindParam(":lname", $lname);
            $stmt->bindParam(":age", $age);
            $stmt->bindParam(":impression", $impression);
            $stmt->bindParam(":rating", $rating);
            $stmt->bindParam(":improvement", $improvement);

            return $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Error inserting evaluation: " . $e->getMessage());
        }
    }
}
