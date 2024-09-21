<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?= $_ENV['BASE_PATH'] ?>"><img class="main-logo" src="<?= assets('images/logo.png') ?>" alt="" style="width: 100px"; height="50px;" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="<?= url('dashboard') ?>">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Ecommerce</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard" href="<?= url('dashboard') ?>"><span class="mini-sub-pro">Dashboard</span></a></li>
                                <li><a title="Product List" href="<?= url('product-list') ?>"><span class="mini-sub-pro">Product List</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?= url('mailbox') ?>" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="<?= url('mailbox') ?>"><span class="mini-sub-pro">Inbox</span></a></li>
                                <!-- <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Blogs</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Blog" href="<?= url('blog') ?>"><span class="mini-sub-pro">Blog</span></a></li>
                                <!-- <li><a title="Blog Details" href="blog-details.html"><span class="mini-sub-pro">Blog Details</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?= url('settings') ?>" aria-expanded="false"><i class="icon nalika-settings icon-wrap"></i> <span class="mini-click-non">Settings</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="<?= url('settings') ?>"><span class="mini-sub-pro">Site Contents</span></a></li>
                                <li><a title="View Mail" href="Admins"><span class="mini-sub-pro">Admins</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>