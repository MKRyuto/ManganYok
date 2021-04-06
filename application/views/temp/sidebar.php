<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success bg-gradient-edit sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-id-badge"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ManganYok</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- QUARY MENU -->

    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id` , `menu`
                    FROM `user_menu` JOIN `user_access_menu` 
                      ON `user_menu`.`id` = `user_access_menu` .`menu_id`
                   WHERE `user_access_menu` .`role_id` = $role_id
                   AND   `user_menu`.`menu` != 'User'
                ORDER BY `user_access_menu` .`menu_id` ASC
                    ";
    $menu = $this->db->query($queryMenu)->result_array();
    ?>



    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?php if ($m['menu'] !== 'User') : ?>
                <?= $m['menu']; ?>
            <?php endif; ?>
        </div>

        <!-- Sub Menu Sesuai Menu -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                        FROM `user_sub_menu`
                        WHERE `menu_id` = $menuId
                        AND `is_active` = 1
                    ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>

        <!--  Sesuai Menu -->
        <?php
        $queryRreport = "SELECT *
                        FROM `report`
                        WHERE `status` = 0
                    ";
        $report = $this->db->query($queryRreport)->result_array();
        ?>

        <?php $i = 0; ?>
        <?php foreach ($report as $r) : ?>
            <?php $i++ ?>
        <?php endforeach; ?>

        <?php foreach ($subMenu as $mn) : ?>
            <?php if ($title == $mn['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0" href="<?= base_url($mn['url']); ?>">
                    <i class="<?= $mn['icon']; ?>"></i>
                    <span><?= $mn['title']; ?></span>
                    <?php if ($mn['title'] == 'Report') : ?>
                        <?php if ($i > 0) : ?>
                            <span class="badge badge-pill badge-danger" style="padding:unset; padding-left:0.4em; padding-right:0.4em;"><?= $i ?></span>
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </li>
        <?php endforeach; ?>

        <hr class="sidebar-divider mt-3">
    <?php endforeach; ?>

    <!-- Divider -->

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->