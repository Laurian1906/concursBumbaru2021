
        <?php
        session_start();

        require 'conectare.php';

        $data = $_SESSION['data'];
        $coda = $_SESSION['coda'];

        $sql = "DELETE FROM rezervarile WHERE data = '$data' AND coda = '$coda'";
        $interogare = mysqli_query($conectare, $sql);

        header("Location: loggedin.php");
