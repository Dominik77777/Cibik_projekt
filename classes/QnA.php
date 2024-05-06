<?php
namespace formular;
error_reporting(E_ALL); //zapnutie chybových hlásení
ini_set("display_errors","On");
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/classes/Database.php');
use formular\Database;
use PDO;
use Exception;
class QnA extends Database{
    protected $connection;
    public function __construct() {
        $this->connect();
        //Použitie gettera na získanie spojenia
        $this->connection = $this->getConnection();
    }
    public function getQnA(){
        try {
            // vykonanie SQL dotazu na výber otázok a odpovedí
            $query = $this->connection->query("SELECT * FROM qna");
            $qna = $query->fetchAll(PDO::FETCH_ASSOC);

            // zobrazenie otázok a odpovedí
            foreach ($qna as $item) {
                echo "<p><strong>Otázka:</strong> {$item['otazka']}</p>";
                echo "<p><strong>Odpoveď:</strong> {$item['odpoved']}</p>";
            }
        } catch (\Exception $e) {

            // Zobrazenie správy v prípade chyby
            echo "Chyba pri načítavaní otázok a odpovedí: " . $e->getMessage();
        }
    }
    public function insertQnA(){
        try {
            // Načítanie JSON súboru
            $data = json_decode(file_get_contents
            (__ROOT__.'/data/datas.json'), true);
            $otazky = $data["otazky"];
            $odpovede = $data["odpovede"];

            // Vloženie otázok a odpovedí v rámci transakcie
            $this->connection->beginTransaction();

            $sql = "INSERT IGNORE INTO qna (otazka, odpoved) VALUES (:otazka, :odpoved)";
            $statement = $this->connection->prepare($sql);

            for ($i = 0; $i < count($otazky); $i++) {
                $statement->bindParam(':otazka', $otazky[$i]);
                $statement->bindParam(':odpoved', $odpovede[$i]);
                $statement->execute();
            }
            $this->connection->commit();
            echo "Dáta boli vložené";
        } catch (Exception $e) {
            // Zobrazenie chybového hlásenia
            echo "Chyba pri vkladaní dát do databázy: " . $e->getMessage();
            $this->connection->rollback(); // Vrátenie späť zmien v prípade chyby
        } finally {
            // Uzatvorenie spojenia
            $this->connection = null;
        }
    }
}