
<?php
$db = new SQLite3("database.db");
$results = $db->query("SELECT * FROM reports ORDER BY date DESC");
echo "<h2>Submitted Reports</h2>";
echo "<table border='1'><tr><th>Name</th><th>Phone</th><th>Sub County</th><th>Location</th><th>Sublocation</th><th>Complaint</th><th>Date</th></tr>";
while ($row = $results->fetchArray()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['subcounty']}</td>
            <td>{$row['location']}</td>
            <td>{$row['sublocation']}</td>
            <td>{$row['complaint']}</td>
            <td>{$row['date']}</td>
          </tr>";
}
echo "</table>";
?>
