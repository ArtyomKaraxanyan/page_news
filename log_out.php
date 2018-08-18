<?php
require_once 'components/db_functions.php';

require_once 'layouts/header.php';
require_once 'cookies_sessions/session_on.php';

?>

<?php
require_once 'layouts/left-sidebar.php';
?>
<div class="col-md-9 right">

    <div class="container">
        <form method="get">
            <h2 class="m_top about_info"><?= $_SESSION['name'] ?> are you sure , you want to log out?</h2>


            <div  class="col-md-4"> <button  type ="submit" name="yes" class="form-control logout_bt_margin input-md red_button">Yes</button></div>
            <div class="col-md-4"><button type ="submit" name="no" class="form-control logout_bt_margin input-md green_button">No</button></div>

            <?php
            if (isset($_GET['yes'])) {
                session_destroy();
                header("location:index.php");
            }
            else{
                echo "<br>";



                echo "Thank you for Cooperation!";

            }

            ?>


        </form>
    </div>
</div>

    </div>
    </div>
<?php require_once 'layouts/footer.php'; ?>