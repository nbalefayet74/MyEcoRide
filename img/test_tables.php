<?php
require_once 'config.php';

try {
    $query = $pdo->query("SHOW TABLES");
    $tables = $query->fetchAll(PDO::FETCH_COLUMN);

    echo "<h2>📋 Tables dans la base de données :</h2><ul>";
    foreach ($tables as $table) {
        echo "<li>" . htmlspecialchars($table) . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "<p>❌ Erreur lors de la récupération des tables : " . $e->getMessage() . "</p>";
}
?>