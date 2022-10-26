<html>
    <head>
        <meta charset="UTF-8"/>
        <title>-auta-</title>
    </head>

    <body>
    

    <?php
        session_start();
        
        $database = mysqli_connect("localhost", "root", "", "auta");
        
        $marka = $_POST['marka'];
        $model = $_POST['model'];
        $rocznik = $_POST['rocznik'];
        $pojemność = $_POST['pojemność'];
        
        if($marka != NULL && $model != NULL && $rocznik != NULL && $pojemnosc != NULL) {
            $result = mysqli_query($database, "INSERT INTO spis`(id`, marka, model, rocznik, pojemnosc) VALUES (NULL, '$marka', '$model', '$rocznik', '$pojemność');");
        }
        else {
            
        }
        
        mysqli_close($database);
    ?>


        <h1>Witaj na stronie z autami, podaj dane auta:</h1><br/><br/>

        <form action="auta.php" method="post">

            Marka:<br/> <input type="text" name="marka"/><br/><br/>
            Model:<br/> <input type="text" name="model"/><br/><br/> 
            Pojemność(cm2):<br/> <input type="text" name="pojemność"/><br/><br/>
            Rocznik:<br/> <input type="value" name="rocznik"/><br/><br/>

            <input type="submit" value="Dodaj do bazy"/><br/><br/>
        </form>

        <table style="border: 1px solid black; margin-left: 43%;">
            <tr>
                <th>ID</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Pojemność</th>
                <th>Rocznik</th>
            </tr>

            <?php
                session_start();
                $database = mysqli_connect("localhost", "root", "", "auta");

                $result = mysqli_query($database, "SELECT * FROM spis;");

                while($row = mysqli_fetch_row($result)) {
                    printf("<tr><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th>%s</th></tr>", $row[0], $row[1], $row[3], $row[3], $row[4]);
                }

                mysqli_close($database);
            ?>
        </table>
    </body>
</html>
