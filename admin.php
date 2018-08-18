
<?php
require_once 'components/db_functions.php';

require_once 'layouts/header.php';
?>


<?php
require_once 'layouts/left-sidebar.php';
?>

<div class="col-md-9 right">

    <div class="col-md-12">
    <form action="admin_conn.php" method="post" enctype="multipart/form-data">
       <!-- <h3><a  class= "admin_info" href = welcome.php>For going back, just click here.</a></h3>-->
        <header><h2>Create News</h2></header>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <p><label for="title">Title</label></p>
                    <p><input type="text" id="title" class="form-control" placeholder="Title" name="title"></p>
                </div>
                <div class="col-md-12">
                    <p><label for="description">Description</label></p>
                    <p><textarea id="description" class="form-control" placeholder="Description" name="description"></textarea></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12">
                    <p><label for="content">Article</label></p>
                    <p><textarea id="content" class="form-control" placeholder="Content ... " name="article"></textarea>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <p><input type="file" id="image" class="form-control-file" value="Choose image" name="image"></p>
            <p><label for="category">Category</label></p>
            <select class="form-control sel_margin_bottom" name="select"  id="category">
                <?php
                $categories = ["", "Art", "Sport", "Government", "Environmental", "Politics", "Weather", "Universe"];
                foreach( $categories as $key => $val){
                    if ($key < 1) continue;

                    echo '<option value="'.$key.'">'.$val.'</option>';

                }
                echo '</select>';


                ?>

            </select>
        </div>




        <div class="col-md-4">
            <p>
                <button type="submit" id="button" class="btn btn-primary btn-md" value="Save" name="save">Save</button>
            </p>
        </div>
    </form>
</div>
</div>



</div>
</div>

<?php  require_once 'layouts/footer.php'; ?>
