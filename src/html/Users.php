<?php
include '../../assets/php/db.php';
?>
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
                    <!--page title box-->
                    <!--start section-->
                    <section class="section">
                        <!--start row-->
                        <div class="row">
                            <!--start column-->
                            <div class="col s12">
                                <!--start card-->
                                <div class="card">
                                    <div class="card-content bluer">
                                        <ul class="collapsible rounder">
                                            <li class="active">
                                                <div class="collapsible-header active">
                                                    <i class="material-icons">supervisor_account</i>Utilizadores</div>
                                                <div class="collapsible-body">
                                                    <div class="card">
                                                        <!-- custom filter length Table -->
                                                        <?php
                                    require 'template/Admin/UserTable.php';
                                ?>
                                                            <!-- End custom filter length Table -->
                                                    </div>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons">supervisor_account</i>Clientes</div>
                                                <div class="collapsible-body">
                                                    <div class="card">
                                                        <!-- custom filter length Table -->
                                                        <?php
                                    require 'template/Admin/ClientTable.php';
                                ?>
                                                            <!-- End custom filter length Table -->
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <!--end card-->
                            </div>
                            <!--end column-->
                        </div>
                        <!--end row-->
                    </section>
                    <!--end section-->
                </main>
                <!--End page body-->
                <?php 
                require 'template/Footer.html';
                require 'template/Scripts-A.html';
                require 'template/Admin/UserTable-scripts.html';
                require 'template/Admin/ClientTable-scripts.html';
            ?>
            </div>
            <!--End page control-->
        </div>
        <!--End page wrapper-->
    </body>
    <!--End body-->

    </html>
    <!--End HTML-->