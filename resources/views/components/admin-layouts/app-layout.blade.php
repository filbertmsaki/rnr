<!DOCTYPE html>
<html lang="en">
<x-admin-layouts.head-component />

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <x-admin-layouts.horizonatal-navbar-component />
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <x-admin-layouts.aside-component />
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{ $slot }}
        </div>
        <!-- /.content-wrapper -->
        <x-admin-layouts.footer-component />
    </div>
    <!-- ./wrapper -->
    <x-admin-layouts.scripts-component />

</body>

</html>
