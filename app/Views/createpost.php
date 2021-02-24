<?php include "sections/header.php"?>

<div class="container">
    <div class="row">
        <div class='col-md-12 text-center mb-2 mt-3' id='top5'>Make a post here</div>
    </div>
    <div class="row">
        <form method="post">
            <div class="col">
                <div>Enter your username: </div>
                <div><input type="text" name="username"></div>
            </div>
            <div class="col">
                <div>Title: </div>
                <div><input type="text" name="title"></div>
            </div>
            <div class="col">
                <div>Description: </div>
                <div><textarea type="text" name="description" style="height:200px; width:400px;"></textarea></div>
            </div>
            <div class="col">
                <div>Tags: </div>
                <div><input type="text" name="tags"></div>
            </div>
            <div class="col mt-2">
                <div><input type="submit" name="save" value="Post it"></div>
            </div>
        </form>
    </div>
    <?php
    ?>


<?php include "sections/footer.php"?>