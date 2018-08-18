

<?php
require_once 'layouts/header.php';
require_once 'cookies_sessions/session_on.php';
//var_dump($_SESSION['name']);
$id = $_SESSION['id'];

$sql="select r.*, c.id as country_id, c.title as country_name from registr_s as r left join countries as c on r.country_id = c.id where r.id = '$id'";
$stmt = $conn->query($sql);
$data =$stmt->fetch(PDO::FETCH_ASSOC);
//var_dump($data);
$f_name =$data['f_name'];
$l_name = $data['l_name'];
$email = $data['email'];
$country = $data['country_name'];
$img = $data['profile_path']
?>


<?php
require_once 'layouts/left-sidebar.php';
?>
    <div class="col-md-9 right">

        <div class="container">
            <h2 class="about_info">Welcome <?= $f_name ;?></h2>
            <img src ="uploads/profiles/<?=$img;?>"  class="profile_img_size">
            <ul>

                <li>Last Name: <?= $l_name ; ?></li>
                <li>Email address:  <?= $email ; ?> </li>
                <li>Country: <?= $country ; ?> </li>

            </ul>
            <a href ="admin.php" class="admin">Please just enter here if you want to add news.</a>

        </div>
    </div>

    </div>
    </div>
<?php require_once 'layouts/footer.php'; ?>