<?php include "sections/header.php"?>

<div class="container">
    <div class="row">
        <div class='col-md-12 text-center mb-2 mt-3' id='top5'>Top 5 blogs</div>
    </div>
    <div class="row">
        <?php
        $iter = 0;
        foreach($blogs as $blog) {
            if ($iter < 5) {
                $username = $blog['Username'];
                $bio = $blog['Bio'];
                $rating = $blog['Rating'];
                echo "<div class='col-5 p-3 m-3 bg-light'>";
                    echo "<div><a href='viewblog/$username' title='Click to view their blog'>$username</a></div>";
                    echo "<div>" . "Bio: " . $blog['Bio'] . "</div>";
                    echo "<div>" . "Blog rating: " . $blog['Rating'] . "</div>";
                echo "</div>";
                $iter = $iter + 1;
            }
        }
        ?>
    </div>
</div>


<?php include "sections/footer.php"?>