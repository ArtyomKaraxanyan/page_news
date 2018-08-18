
<?php
require_once 'components/db_functions.php';

require_once 'layouts/header.php';
?>


<?php
require_once 'layouts/left-sidebar.php';
?>
<?php
//$stmt = $conn->query("SELECT * FROM news");
//$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT categories.title, COUNT(category_id) FROM categories LEFT JOIN news ON categories.id = news.category_id 
GROUP BY categories.title";
$stmt = $conn->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

//$sum = "SELECT  category_id, COUNT(*) FROM news GROUP BY category_id    ";
//$stmt = $conn->query($sum);
//$issum = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


<div class="col-md-9 right">

    <div class="col-md-8">
        <h3 class="about_info">Information about  Category </h3>
        <h4>
            <?php foreach ($data as $item  ):?>
            <?php echo  $item['title']."(". $item ['COUNT(category_id)'] .")" ; ?>
              <?php endforeach; ?>
        </h4>


        <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable.
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
            as necessary, making this the first true generator on the Internet.
        </p>
    </div>
</div>


<?php  require_once 'layouts/footer.php'; ?>