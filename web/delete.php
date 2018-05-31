
        <?php
        
        require_once 'connecttoSQL.php';
        $db = connect();
        //Get user
        $username = $_SESSION['uname'];
        //Draw Data Base
        //$statement = $db->prepare("SELECT name, notes FROM my_notes");
        $statementU = $db->prepare("SELECT * FROM my_notes WHERE name = '$username'");
        $statementU->execute();
        $row = $statementU->fetch(PDO::FETCH_ASSOC);
        $id = $row['id'];
        $statementD = $db->prepare("DELETE FROM my_notes WHERE id = '$id'");
        
        session_destroy();
        $_SESSION = array();
       
        session_start();
        $_SESSION['message'] = 'Account deleted';
        header('location: ../register.php');
        ?>
