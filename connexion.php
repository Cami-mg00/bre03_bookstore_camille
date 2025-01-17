<?php


class Database
{
    private string $host = "db.3wa.io";
    private string $port = "3306";
    private string $dbname = "camillemounier_bookstore";
    private string $user = "camillemounier";
    private string $password = "922b2543764177289574eb62d821c069";
    private ?PDO $pdo = null;

   public function getConnection(): PDO
{
    if ($this->pdo === null) {
        try {
            $connexionString = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8";
            $this->pdo = new PDO($connexionString, $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
    return $this->pdo;
}

}

?>
