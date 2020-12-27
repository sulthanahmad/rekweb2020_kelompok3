<ul class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user/index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-utensils"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Le Pesto </div>
    </a>


    <?php if (in_groups('admin')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
        </div>


        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-users"></i>
                <span>User List</span></a>
        </li>
    <?php endif; ?>




    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>


    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="/myProfile">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="/editProfile">
            <i class="fas fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>




    <?php if (in_groups('admin')) : ?>
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Lokasi
        </div>


        <!-- Nav Item - daerah -->
        <li class="nav-item">
            <a class="nav-link" href="/daerahView">
                <i class="fas fa-user"></i>
                <span>Daerah List</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/daerah">
                <i class="fas fa-user"></i>
                <span>Daerah</span></a>
        </li>
    <?php endif; ?>










    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>