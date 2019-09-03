<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sql query join tabel -->

        <?php

        $role_id = $this->session->userdata('role_id');

        $queryMenu = "SELECT `user_menu`.`id`,`menu`,`icon_menu`
                      FROM `user_menu` JOIN `user_access_menu` 
                      ON   `user_menu`.`id` = `user_access_menu`.`menu_id`
                      WHERE `user_access_menu`.`role_id`= $role_id
                      ORDER BY  `user_access_menu`.`menu_id` ASC    
                ";

        $menu = $this->db->query($queryMenu)->result_array();

        // var_dump($menu);
        // die;


        ?>

        <!-- looping menu -->

        <ul class="sidebar-menu" data-widget="tree">
            <?php foreach ($menu as $m) : ?>
            <li class="treeview">
                <a href="#">
                    <i class="<?= $m['icon_menu']; ?>"></i><span><?= $m['menu']; ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    <ul class="treeview-menu">
                        <?php

                            $menuId = $m['id'];
                            $querySubMenu = "SELECT *
                                             FROM `user_sub_menu` JOIN `user_menu` 
                                             ON   `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                             WHERE `user_sub_menu`.`menu_id`= $menuId
                                             AND   `user_sub_menu`.`is_active` = 1    
                            ";

                            $subMenu = $this->db->query($querySubMenu)->result_array();

                            ?>

                        <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                        <li class="active"><a href="<?= base_url($sm['url']); ?>"><i class="<?= $sm['icon']; ?>"></i><?= $sm['title']; ?></a></li>
                        <?php else :    ?>
                        <li><a href="<?= base_url($sm['url']); ?>"><i class="<?= $sm['icon']; ?>"></i><?= $sm['title']; ?></a></li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">