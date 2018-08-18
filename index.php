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

$sql = "select n1.*, c1.id as c_id, c1.title as category_name from news as n1 left join categories as c1 ON n1.category_id=c1.id order by id desc";
$stmt = $conn->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo"<pre>";print_r($data);die;
?>

<div class="col-md-9 right">
    <div class="news_list ">
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $item): ?>
                <h4 class="title"><a href="view.php?id=<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a>
                </h4>
                <div class="image_container">
                    <img src="uploads/<?php echo $item['image_path']; ?>">
                </div>
                <div class="description"><?php echo $item['description']; ?></div>

                <?php
                //$stmt = $conn->query("SELECT * FROM categories where id =".$item['category_id']);
                //   $category = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <div class="category">Category: <?php
                    echo $item['category_name'];
                    //echo $category['title'];

                    ?> </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
</div>
</div>




<?php require_once 'layouts/footer.php'; ?>


