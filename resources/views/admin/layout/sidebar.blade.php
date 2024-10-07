<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{ route('home') }}"><img class="main-logo" src="<?= asset('assets/images/logo.png') ?>" alt="" style="width: 100px"; height="50px;" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li @if (Route::currentRouteName() == 'admin.dashboard' || Route::currentRouteName() == 'admin.product-list.index')
                        class="active"
                    @endif >
                        <a class="has-arrow" href="{{ route('admin.dashboard') }}">
                               <i class="icon nalika-home icon-wrap"></i>
                               <span class="mini-click-non">Ecommerce</span>
                            </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard" href="{{ route('admin.dashboard') }}"><span class="mini-sub-pro">Dashboard</span></a></li>
                            <li><a title="Product List" href="{{ route('admin.product-list.index') }}"><span class="mini-sub-pro">Product List</span></a></li>
                        </ul>
                    </li>
                    <li @if (Route::currentRouteName() == 'admin.mailbox.index' || Route::currentRouteName() == 'admin.mailbox-trash')
                        class="active"
                    @endif>
                        <a class="has-arrow" href="{{ route('admin.mailbox.index') }}" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="{{ route('admin.mailbox.index') }}"><span class="mini-sub-pro">Inbox</span></a></li>
                            <li><a title="Trash" href="{{ route('admin.mailbox-trash') }}"><span class="mini-sub-pro">Trash</span></a></li>
                        </ul>
                    </li>
                    <li @if (Route::currentRouteName() == 'admin.blog.index') class="active"
                    @endif>
                        <a class="has-arrow" href="{{ route('admin.blog.index') }}" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Blog</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Blog" href="{{ route('admin.blog.index') }}"><span class="mini-sub-pro">Posts</span></a></li>
                        </ul>
                    </li>
                    <li @if (Route::currentRouteName() == 'admin.settings.admins' || Route::currentRouteName() == 'admin.settings.home' || Route::currentRouteName() == 'admin.settings.blog' || Route::currentRouteName() == 'admin.settings.about-us' || Route::currentRouteName() == 'admin.settings.contact-us' || Route::currentRouteName() == 'admin.settings.products')
                        class="active"
                    @endif >
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="icon nalika-settings icon-wrap"></i>
                            <span class="mini-click-non">Settings</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">

                            <!-- Admins Submenu -->
                            <li><a title="Admins" href="{{ route('admin.admins.index') }}"><i class="icon nalika-user icon-wrap"></i><span class="mini-sub-pro">Admins</span></a></li>
                            
                            <!-- Site Content Submenu -->
                            <li @if (Route::currentRouteName() == 'admin.settings.home' || Route::currentRouteName() == 'admin.settings.blog' || Route::currentRouteName() == 'admin.settings.about-us' || Route::currentRouteName() == 'admin.settings.contact-us' || Route::currentRouteName() == 'admin.settings.products') 
                            class="active" @endif>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <span class="mini-sub-pro"><i class="icon nalika-table icon-wrap"></i>Site Content</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Home" href="{{ route('admin.settings.home') }}"><span class="mini-sub-pro">Home</span></a></li>
                                    <li><a title="Blog" href="{{ route('admin.settings.blog') }}"><span class="mini-sub-pro">Blog</span></a></li>
                                    <li><a title="About Us" href="{{ route('admin.settings.about-us') }}"><span class="mini-sub-pro">About Us</span></a></li>
                                    <li><a title="Contact Us" href="{{ route('admin.settings.contact-us') }}"><span class="mini-sub-pro">Contact Us</span></a></li>
                                    <li><a title="Products" href="{{ route('admin.settings.products') }}"><span class="mini-sub-pro">Products</span></a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>