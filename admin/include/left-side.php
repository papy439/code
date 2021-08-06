<?php
    if ($_SESSION['quyen']=="1")
    { ?>
        <ul id="sidebarnav">
            <!-- User Profile-->
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="trangchu.php" aria-expanded="false"><i class="mdi me-2 mdi-home"></i><span
                        class="hide-menu">Trang chủ</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="pages-profile.php" aria-expanded="false">
                    <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Quản lý TK cá nhân</span></a>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="table-QLTTNHM.php" aria-expanded="false"><i class="mdi me-2 mdi-account-card-details"></i><span
                        class="hide-menu">Quản lý thông tin NHM</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="pages-DKHM.php" aria-expanded="false"><i
                        class="mdi me-2 mdi-needle"></i><span class="hide-menu">Quản lý hồ sơ HM</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="pages-QLCBYT.php" aria-expanded="false"><i
                        class="mdi me-2 mdi-stethoscope"></i><span class="hide-menu">Quản lý CBYT</span></a>
            </li>
            
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="pages-TTPH.php" aria-expanded="false"><i class="mdi me-2 mdi-message-alert"></i><span
                        class="hide-menu">Thông tin phản hồi</span></a>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="pages-thongke.php" aria-expanded="false"><i class="mdi me-2 mdi-poll"></i><span
                        class="hide-menu">Thống kê</span></a>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="map-google.php" aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span
                        class="hide-menu">Google Map</span></a>
            </li> 
            
        </ul>
<?php
    } else{ ?>
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="trangchu.php" aria-expanded="false"><i class="mdi me-2 mdi-home"></i><span
                            class="hide-menu">Trang chủ</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="pages-profile.php" aria-expanded="false">
                        <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Quản lý TK cá nhân</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="map-google.php" aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span
                        class="hide-menu">Google Map</span></a>
            </li> 
            
        </ul>
    <?php }
?>
