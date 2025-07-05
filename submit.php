
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new SQLite3("database.db");
    $stmt = $db->prepare("INSERT INTO reports (name, phone, subcounty, location, sublocation, complaint, date) VALUES (?, ?, ?, ?, ?, ?, datetime('now'))");
    $stmt->bindValue(1, $_POST['name']);
    $stmt->bindValue(2, $_POST['phone']);
    $stmt->bindValue(3, $_POST['subcounty']);
    $stmt->bindValue(4, $_POST['location']);
    $stmt->bindValue(5, $_POST['sublocation']);
    $stmt->bindValue(6, $_POST['complaint']);
    $stmt->execute();
    echo "Report submitted successfully.";
} else {
    echo "Invalid access.";
}
?>
