<div class="container footer_image"></div>
<div class="container footer">

    <div class="row">
        <footer>
           <h6 style="margin-left:20px;">News Corner @ 2018</h6>
            <?php
            require_once 'components/db_functions.php';
            $stmt = $conn->query("SELECT * FROM categories");
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            ?>

            <div class="row ">
                <ul class="category_nav" id="sortable">
                    <?php foreach ($data as $value):?>
                        <a href="category.php?id=<?= $value['id']


                        ?>"><?= $value['title']?></a>
                    <?php endforeach;?>
                </ul>
                    </div>
        </footer>
    </div>
</div>

</div>

<script src="js/jquery.js"></script>
<script src="js/jquery_ui.js"></script>
<script src="js/script.js"></script>
<script src="js/admin_validation.js"></script>
<script src="js/sortable.js"></script>
</body>
</html>

