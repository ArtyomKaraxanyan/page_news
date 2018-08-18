
<?php
$id = $_GET['id'];

if(!$id){
    header('location:'.$_SERVER['HTTP_REFERER']);
}

require_once 'components/db_functions.php';

require_once 'layouts/header.php';
?>


<?php
require_once 'layouts/left-sidebar.php';
?>
<?php

$sql = "select n1.*, c1.id as c_id, c1.title as category_name from news as n1 inner join categories as c1 ON n1.category_id=c1.id where c1.id = '$id' order by id desc ";
$stmt = $conn-> query($sql);
$data = $stmt->fetchAll();
?>
<div class="col-md-9 right">
    <?php if(!empty($data)) : ?>
        <div class="news_list ">
            <?php foreach($data as $item):?>
                <h4 class="title"><a href="view.php?id=<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a>
                </h4>
                <div class="image_container">
                    <img src="uploads/<?php echo $item['image_path']; ?>">
                </div>
                <div class="description"><?php echo $item['description']; ?></div>

                <div class="category">Category: <?php
                    echo $item['category_name'];

                    ?> </div>
            <?php endforeach;  ?>
        </div>

<!--   categoriayi mej left join@ petq che, 2 hat sql grel aystex, vor stanam  category name   -->
    <?php endif;?>
</div>

</div>
</div>
<?php  require_once 'layouts/footer.php'; ?>
