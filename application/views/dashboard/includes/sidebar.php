<div class="sidebar-menu">

    <header class="logo-env">

        <!-- logo -->
        <div class="logo">
            <a href="<?php //admin_url(); ?>">
                <img src="<?php echo site_url(); ?>assets/img/logo.jpg" alt="" width="150" />
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon with-animation">
                <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
            </a>
        </div>


        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
            </a>
        </div>

    </header>
    <ul id="main-menu" class="">
        <li id="search">
            <form method="get" action="#">
                <input type="text" name="q" class="search-input" placeholder="Search something..." />
                <button type="submit"><i class="entypo-search"></i>
                </button>
            </form>
        </li>
        <li class="opened active">
            <a href="<?php echo admin_url() ?>"><i class="entypo-gauge"></i><span>Dashboard</span></a>
        </li>

        <li>
            <a href="<?php echo admin_url('products') ?>"><i class="entypo-bag"></i><span>Products</span></a>
        </li>
        <li>
            <a href="<?php echo admin_url('collections') ?>"><i class="entypo-database"></i><span>Collections</span></a>
        </li>
        <li>
            <a href="<?php echo admin_url('products') ?>"><i class="entypo-tag"></i><span>Offers / Deals</span></a>
        </li> 
        <li>
            <a href="<?php echo admin_url('products') ?>"><i class="entypo-chart-bar"></i><span>Reports</span></a>
        </li>
        <li>
            <a href="<?php echo admin_url('products') ?>"><i class="entypo-layout"></i><span>Settings</span></a>
        </li>
       
    </ul>


</div>
