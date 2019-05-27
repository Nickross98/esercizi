<!DOCTYPE HTTP>
<html>
    <head>
        <title>People Results</title>
    </head>
    <body>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "asdasd123";
            $db = "esercizio1";
            $dbconnect = mysqli_connect ($hostname, $username, $password, $db);

            if ($dbconnect -> connect_error)
            {
                die("Database connection failed: " . $dbconnect -> connect_error);
            }
        ?>
        <table border="1" align="center">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Surname</td>
                <td>Birth Date</td>
            </tr>
            <?php
                $query = mysqli_query($dbconnect, "SELECT * people")
                    or die (mysqli_error ($dbconnect));

                while ($row = mysqli_fetch_array($query))
                {
                    echo
                        "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['surname']}</td>
                            <td>{$row['birthdate']}</td>
                        </tr>;"

                }
            ?>
        </table>
    </body>
</html>

