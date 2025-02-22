<?php
namespace App;
class DbConnection {
    // Database credentials
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'e_governance';

    // Database connection object
    private $conn;

    // Constructor to establish the connection
    public function __construct() {
        $this->conn = $this->connect();
    }

    // Method to establish the database connection
    private function connect() {
        $conn = new \mysqli( $this->servername,$this->username, $this->password, $this->dbname);

        // Check for connection errors
        if ($conn->connect_error) {
            // Log the error (for debugging) and display a user-friendly message
            error_log("Database connection failed: " . $conn->connect_error);
            die("Internal server error. Please try again later.");
        }

        return $conn;
    }

    // Method to get the database connection
    public function getConnection() {
        return $this->conn;
    }
}

?>