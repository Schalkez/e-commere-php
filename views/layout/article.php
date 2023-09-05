<?php
                if (isset($_GET['option'])) {
                    switch ($_GET['option']) {
                        case'home':
                            include"views/home.php";
                            break;

                        case'productdetail':
                            include"views/product-detail.php";
                            break;

                        case'show_products':
                            include"views/show-products.php";
                            break;

                        case'news':
                            echo"NEWS PAGE";
                            break;

                        case'feedback':
                            echo"FEEDBACK PAGE";
                            break;

                        case'cart':
                            echo"CART PAGE";
                            break;

                        case'signin':
                            include"views/signin.php";
                            break;

                        case'register':
                            include "views/register.php";
                            break;

                        case'logout':
                            unset($_SESSION['member']);
                            header("location: ?option=signin");
                            break;

                        default: 
                            include"views/home.php";
                            break;
                    }
                } else {
                    include"views/home.php";
                }
            ?>