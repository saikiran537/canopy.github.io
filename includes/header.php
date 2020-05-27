<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header" style="padding: 10px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php" style="font-size: 30px;padding-left: 80px;">Canopy</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li style="padding-top: 10px;"><a href = "cart.php" style="font-size: 19px;"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li style="padding-top: 10px;"><a href = "settings.php" style="font-size: 19px;"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li style="padding-top: 10px;"><a href = "logout_script.php" style="font-size: 19px;"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li style="padding-top: 10px;padding-right: 10px;"><a href="signup.php" style="font-size: 19px;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li style="padding-top: 10px;padding-left: 10px;"><a href="login.php" style="font-size: 19px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>