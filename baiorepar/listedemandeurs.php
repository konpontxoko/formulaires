<?php 
require_once("../head.php"); 
?>
<h2>Liste des demandeurs</h2>
<?php 
require_once("./menubaiorepar.php");
require_once("./dbconfig.php");

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>
<?php
# tentative de connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


$sql = 'SELECT nom, email, mobile
        FROM demandeurs
        ORDER BY nom';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>

 <div id="container">
	<H3>Liste des demandeurs</H3>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>telephone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['nom']) ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['mobile']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
	    </table>


<?php require_once("../tail.php"); ?>
