<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'eval_model.inc.php';
require_once '../session.php';

class EvaluationControl {
    private $model;

    public function __construct() {
        $this->model = new EvaluationModel();
    }

    public function processForm() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fname = htmlspecialchars(trim($_POST["fname"]));
            $lname = htmlspecialchars(trim($_POST["lname"]));
            $age = intval($_POST["age"]);
            $impression = htmlspecialchars(trim($_POST["impression"]));
            $rating = intval($_POST["rating"]);
            $improvement = htmlspecialchars(trim($_POST["improvement"]));

            // Validate inputs
            if (empty($fname) || empty($lname) || empty($age) || empty($impression) || empty($rating) || empty($improvement)) {
                throw new Exception("All fields are required.");
            }

            if ($age <= 0 || $age > 120) {
                throw new Exception("Please enter a valid age.");
            }

            if ($rating < 1 || $rating > 5) {
                throw new Exception("Please enter a valid rating.");
            }

            if (strlen($impression) > 1000) {
                throw new Exception("Impression should not exceed 1000 characters.");
            }

            try {
                if ($this->model->insertEvaluation($fname, $lname, $age, $impression, $rating, $improvement)) {
                    echo "Thank you for submitting your evaluation";
                } else {
                    throw new Exception("Error: Unable to submit evaluation.");
                }
            } catch (Exception $e) {
                echo "An error occurred: " . $e->getMessage();
            }
        }
    }
}

$controller = new EvaluationControl();
$controller->processForm();
