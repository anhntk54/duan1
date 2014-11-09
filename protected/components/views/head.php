<header class="header">
            <a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Hệ thống
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="<?php echo Yii::app()->createUrl('site/logout'); ?>" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Đăng xuất </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>