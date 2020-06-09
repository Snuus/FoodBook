<?php

require_once ('includes/header.php');
$recipes = Recipe::find_all();

?>
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Search Your Recipes</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>All Recipes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Recipe Without Sidebar Area Start Here -->
        <section class="recipe-without-sidebar-wrap padding-top-80 padding-bottom-22">
            <div class="container">
                <div class="adv-search-wrap">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Author Name or Recipe Search . . ." />
                        <div class="btn-group">
                            <div class="input-group-btn adv-search-fill-btn">
                                <button type="button" id="adv-serch" class="btn-adv-serch">
                                    <i class="icon-plus flaticon-add-plus-button"></i>
                                    <i class="icon-minus fas fa-minus"></i>
                                    Advanced Search
                                </button>
                            </div>
                            <div class="input-group-btn">
                                <button type="submit" class="btn-search"><i class="flaticon-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="advance-search-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="item-title">BY CATEGORIES</h3>
                                <ul class="search-items">
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox101" type="checkbox">
                                            <label for="checkbox101">Baking</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox102" type="checkbox">
                                            <label for="checkbox102">Dinner</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox103" type="checkbox">
                                            <label for="checkbox103">Lunch</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox104" type="checkbox">
                                            <label for="checkbox104">Sea Food</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox105" type="checkbox">
                                            <label for="checkbox105">Sweets</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="item-title">BY INGREDIENTS</h3>
                                <ul class="search-items">
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox106" type="checkbox">
                                            <label for="checkbox106">Oil</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox107" type="checkbox">
                                            <label for="checkbox107">Vegitables</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox108" type="checkbox">
                                            <label for="checkbox108">Fish</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox109" type="checkbox">
                                            <label for="checkbox109">White Salt</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox110" type="checkbox">
                                            <label for="checkbox110">Pizza

                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox111" type="checkbox">
                                            <label for="checkbox111">Meat</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox112" type="checkbox">
                                            <label for="checkbox112">Juice</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="item-title">BY CUISINE</h3>
                                <ul class="search-items">
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox113" type="checkbox">
                                            <label for="checkbox113">Indian</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox114" type="checkbox">
                                            <label for="checkbox114">Italian</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox115" type="checkbox">
                                            <label for="checkbox115">Maxican</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox116" type="checkbox">
                                            <label for="checkbox116">Bengali</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox117" type="checkbox">
                                            <label for="checkbox117">Franch</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="item-title">BY METHOD</h3>
                                <ul class="search-items">
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox118" type="checkbox">
                                            <label for="checkbox118">Baking</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox119" type="checkbox">
                                            <label for="checkbox119">Freezing</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox120" type="checkbox">
                                            <label for="checkbox120">Frying</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox121" type="checkbox">
                                            <label for="checkbox121">Grilling</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($recipes as $recipe):
                        $category = Category::find_by_id($recipe->category_id);
                        $user= User::find_by_id($recipe->user_id);
                    ?>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-box-layout1">
                            <figure class="item-figure"><a href="single-recipe1.php"><img src="img/product/product38.jpg"
                                                                                          alt="Product"></a></figure>
                            <div class="item-content">
                                <span class="sub-title"><?php echo $category->name ?></span>
                                <h3 class="item-title"> <a href="single-recipe1.php?id=<?php echo $recipe->id;?>"><?php echo $recipe->name ?></a></h3>
                                <ul class="item-rating">
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-empty"><i class="fas fa-star"></i></li>
                                    <li><span>9<span> / 10</span></span> </li>
                                </ul>
                                <p><?php echo $recipe->body?></p>
                                <ul class="entry-meta">
                                    <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                    <li><a href="#"><i class="fas fa-user"></i>by <span><?php echo $user->username?></span></a></li>
                                    <li><a href="#"><i class="fas fa-heart"></i><span>02</span> Likes</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
        </section>
        <!-- Recipe Without Sidebar Area End Here -->
        <!-- Footer Area Start Here -->
        <footer class="ranna-bg-dark">
            <div class="container">
                <div class="footer-logo">
                    <a href="index.html"><img src="img/logo-light.png" class="img-fluid" alt="footer-logo"></a>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">FACEBOOK</a></li>
                        <li><a href="#">TWITTER</a></li>
                        <li><a href="#">INSTAGRAM</a></li>
                        <li><a href="#">PINTEREST</a></li>
                        <li><a href="#">GOOGLEPLUS</a></li>
                        <li><a href="#">YOUTUBE</a></li>
                    </ul>
                </div>
                <div class="copyright">© All Right Reserved 2019</div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Search Box Start Here -->
    <div id="search" class="search-wrap">
        <button type="button" class="close">×</button>
        <form class="search-form">
            <input type="search" value="" placeholder="Type here........" />
            <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
        </form>
    </div>
    <!-- Search Box End Here -->
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title-default-bold mb-none">Login</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="login-form">
                        <input class="main-input-box" type="text" placeholder="User Name" />
                        <input class="main-input-box" type="password" placeholder="Password" />
                        <div class="inline-box mb-5 mt-4">
                            <div class="checkbox checkbox-primary">
                                <input id="modal-checkbox" type="checkbox">
                                <label for="modal-checkbox">Remember Me</label>
                            </div>
                            <label class="lost-password"><a href="#">Lost your password?</a></label>
                        </div>
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill" type="submit" value="Login">Login</button>
                            <a href="#" class="btn-register"><i class="fas fa-user"></i>Register Here!</a>
                        </div>
                    </form>
                    <label>Login connect with your Social Network</label>
                    <div class="login-box-social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    <!-- Jquery Js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins Js -->
    <script src="js/plugins.js"></script>
    <!-- Smoothscroll Js -->
    <script src="js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
</body>

</html>
