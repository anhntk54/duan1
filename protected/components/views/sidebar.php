<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      <!-- search form -->
      <form action="<?php echo Yii::app()->createUrl('/DoiTac/timKiem'); ?>" method="POST" class="sidebar-form">
          <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Tìm kiếm..."/>
              <span class="input-group-btn">
                  <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
          </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
          <li class="active">
              <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">
                  <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
              </a>
          </li>
          <li class="treeview active">
              <a href="#">
                  <i class="fa fa-bar-chart-o"></i>
                  <span>Quản lý thành viên</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo Yii::app()->createUrl('/KhachHang/default/create'); ?>"><i class="fa fa-angle-double-right"></i> Thêm mới thành viên</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('/KhachHang/default/admin'); ?>"><i class="fa fa-angle-double-right"></i> Quản lý thành viên</a></li>
              </ul>
          </li>
          <li class="treeview active">
              <a href="#">
                  <i class="fa fa-bar-chart-o"></i>
                  <span>Quản lý đối tác</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo Yii::app()->createUrl('/DoiTac/default/create'); ?>"><i class="fa fa-angle-double-right"></i> Thêm mới đối tác</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('/DoiTac/default/admin'); ?>"><i class="fa fa-angle-double-right"></i> Quản lý đối tác</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('/DoiTac/doitacKhachhang/nhaphoadon'); ?>"><i class="fa fa-angle-double-right"></i> Thêm hóa đơn</a></li>
              </ul>
          </li>
          <li class="treeview active">
              <a href="#">
                  <i class="fa fa-user"></i>
                  <span>Người dùng</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo Yii::app()->createUrl('/TaiKhoan/default/create'); ?>"><i class="fa fa-angle-double-right"></i> Thêm người dùng</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('/TaiKhoan/default/admin'); ?>"><i class="fa fa-angle-double-right"></i> Quản lý người dùng</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('/TaiKhoan/default/ThayDoiMatKhau'); ?>"><i class="fa fa-angle-double-right"></i> Thay đổi mật khẩu</a></li>
              </ul>
          </li>
          <li class="active">
              <a href="<?php echo Yii::app()->createUrl('/backup/default/index'); ?>">
                  <i class="fa fa-archive"></i> <span>Quản lý dữ liệu backup</span>
              </a>
          </li>
      </ul>
  </section>
  <!-- /.sidebar -->
</aside>