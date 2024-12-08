<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 5a Q3</title>
</head>

<body>
    <?php
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    'number' => $i,
                    'multiplier' => $multiplier,
                    'answer' => $i * $multiplier
                ];
            }
            return $results;
        }
        $multiplier = isset($_POST['multiplier']) ? (int)$_POST['multiplier'] : 1;
        $results = multiplication($multiplier);
    ?>
    <form method="POST">
        <label for="multiplier">Insert a Multiplier:</label>
        <input type="number"  name="multiplier">
        <input type="submit" value="Submit">
    </form><br>
    <h2>Multiplication Table for number <?php echo $multiplier; ?></h2>
    <table border="1">
    <tr>
            <th>No.</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
            foreach ($results as $result) {
                echo "<tr>";
                echo "<td>{$result['number']}</td>";
                echo "<td>{$result['multiplier']}</td>";
                echo "<td>{$result['answer']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>

</html>