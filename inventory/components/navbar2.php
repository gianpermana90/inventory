<div class="container">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Lab IF </a>
    <div class="nav-collapse collapse navbar-inverse-collapse">
        <ul class="nav nav-icons">
            <li><a href="#"><i class="icon-home"></i></a></li>
            <li><a href="#"><i class="icon-user"></i></a></li>
            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
        </ul>
        <ul class="nav pull-right">
            <li><a href="#"><?php echo "$_SESSION[username]";?> </a></li>
            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="images/user.png" class="nav-avatar" />
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Your Profile</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Account Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="components/logout_proses.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.nav-collapse -->
</div>