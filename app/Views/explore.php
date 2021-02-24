<?php include "sections/header.php"?>

<?php
   session_start();
   // Page was not reloaded via a button press
   if (!isset($_POST['add'])) {
       $_SESSION['attnum'] = 1; // Reset counter
   }
?>
<div class="container">
    <div class="row">
        <div class='col-md-12 text-center mb-2 mt-3' id='top5'>Explore all blogs</div>
    </div>
    <div class="row text-center">
        <?php
        $rows = sizeof($blogs);
        $bpp = 99; // stands for blogs per page. should be at 2 but i just didnt't get it working
        $pages = ceil($rows/$bpp);
        $iter = 0;
        foreach($blogs as $blog) {
            if ($iter < $bpp) {
                $username = $blog['Username'];
                $bio = $blog['Bio'];
                $rating = $blog['Rating'];
                echo "<div class='col-md-5 p-3 m-3 bg-light'>";
                    echo "<div><a href='viewblog/$username' title='Click to view their blog'>$username</a></div>";
                    echo "<div>" . "Bio: " . $blog['Bio'] . "</div>";
                    echo "<div>" . "Blog rating: " . $blog['Rating'] . "</div>";
                echo "</div>";
                $iter = $iter + 1;
            }
        }
        ?>
    </div>
    <div><center>
        <button id='min' type="button">-</button>
        <button id='add' type="button">+</button>
        <h3><em>page:<span id='val'>1</span></em></h3>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('add').addEventListener('click', function() {
                document.getElementById('val').innerHTML++;
            });
            document.getElementById('min').addEventListener('click', function() {
                document.getElementById('val').innerHTML--;
            });
        });
        </script>
    </center></div>
        
</div>

<?php include "sections/footer.php"?>