<?php include('includes/header.php');
?>
<?php ob_start();?>
<?php
$the_message = 'fff';
if($session->is_signed_in()){
    redirect("index.php");


}
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user_found = User::verify_user($username, $password);

    if($user_found){
        $session->login($user_found);
        redirect("index.php");
    }else{
        $the_message = "your password or username is not found";
    }

}else{
    $username = "";
    $password = "";
}






?>
        <!-- Header Area End Here -->
        <!-- Inne Page Banner Area Start Here -->
<h2 class="bg-danger"><?php echo $the_message; ?></h2>
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>User Login Page</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Login Area Start Here -->
        <section class="login-page-wrap padding-top-80 padding-bottom-50">
            <div class="container">
                <div class="row gutters-60">
                    <div class="col-lg-8">
                        <div class="login-box-layout1">
                            <div class="section-heading heading-dark">

                                <h2 class="item-heading">LOGIN FORM</h2>
                            </div>
                            <form class="login-form" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label  class="mb-3">Username or Email Address</label>
                                        <input name="username" class="main-input-box" type="text" placeholder="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-3">Password</label>
                                        <input name="password" class="main-input-box" type="password" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="lost-password"><a href="#">Lost your password?</a></label>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="btn-fill btn-primary" name="submit" type="submit" value="Login">Login<i class="flaticon-next"></i></button>
                                    <button class="btn-fill btn-dark" type="submit" value="Login">Creat an Accont<i class="flaticon-next"></i></button>
                                </div>
                            </form>
                            <label>Or Connect With Social Networks</label>
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
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">ABOUT ME</h3>
                            </div>
                            <div class="widget-about">
                                <figure class="author-figure"><img src="img/figure/about.jpg" alt="about"></figure>
                                <figure class="author-signature"><img src="img/figure/signature.png" alt="about"></figure>
                                <p>Fusce mauris auctor ollicituder teary iner hendrerit risusey aeenean rauctor pibus
                                    doloer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login Area End Here -->
<?php include('includes/footer.php')?>
