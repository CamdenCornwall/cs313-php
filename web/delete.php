
        <?php
        session_destroy();
        $_SESSION = array();
        session_start();
        $_SESSION['message'] = 'Account deleted';
        header('location: ../register.php');
        ?>
