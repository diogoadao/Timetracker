<!--Start HTML document-->
<!--HTML-->
<html lang="en">
<!--Head-->
<?php 
require 'template/Head.html';
?>

<head>
    <title>Dashboard - Visual Thinking</title>
</head>
<!--body-->

<body onload="">
    <!--Page wrapper-->
    <div class="page-wrapper">
        <!--Control page-->
        <div id="control-body" class="fixed-sidebar medium-sidebar fixed-nav collapsed-sidebar">
            <?php 
            require 'template/Preloader.html';
            require 'template/Nav-A.html';
            ?>
            <!--Page Body-->
            <main class="page-body">
            </main>
            <!--End page body-->
            <?php 
                require 'template/Footer.html';
                require 'template/Scripts-A.html';
                
            ?>
        </div>
        <!--End page control-->
    </div>
    <!--End page wrapper-->
    <?php ?>
</body>
<!--End body-->

</html>
<!--End HTML-->