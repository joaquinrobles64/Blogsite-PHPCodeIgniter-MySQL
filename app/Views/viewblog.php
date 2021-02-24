<?php include "sections/header.php"?>
<div class="container">
    <div class="row">
    <div class='col-md-12 text-center mb-2 mt-3' id='top5'>
        <div>Welcome to <?php echo $user;?>'s blog!</div>
    </div>
    <?php
    foreach ($posts as $post) {
        $username = $post['Username'];
        $title = $post['Title'];
        $description = $post['Description'];
        $tags = $post['Tag'];
    ?>
    <div class="row">
        <div class="col m-3">
            <div class="card bg-light mb-3" style="max-width: 50rem;">
                <div class="card-header"><?php echo $username; ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <p class="card-text"><?php echo $description; ?></p>
                    <p class="card-text">#<?php echo $tags; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php include "sections/footer.php"?>