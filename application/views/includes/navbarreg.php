<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 8/28/15
 * Time: 1:08 PM
 */
?>


<div class="navbar navbar-blue  navbar-inverse navbar-static-top">
    <div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../../../index.php">VideoBay</a>
    </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../../../index.php" >Home</a></li>
                    <li><a href="../../../about.php" >About</a></li>
                    <li><a href="../../../about.php">Help</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign in</a>
                        <div class="dropdown-menu ddmenu" style="padding: 15px; padding-bottom:  0px;">
                            <div  id ="feedback2" class="error"></div>

                            <form  role="form" id="login_form" action="../../controllers/usermanagement/testlogin.php" method="post"  accept-charset="UTF-8">


                                <input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
                                <input style="margin-bottom: 15px;" type="password" placeholder="password" id="password" name="password">

                                <input style="float: left; margin-right: 10px;" type="checkbox" name="remember" id="remember" value="1">
                                <label class="string optional" for="user_remember_me">Remember me</label>
                                <input class="btn btn btn-success" onclick="testSubmit()" type="button" id="sign-in" value="Sign In">
                            </form>

                        </div>

                    </li>

                </ul>
            </div>

        </div>
    </div>








