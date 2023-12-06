<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('./css/app.css') ?>">
</head>

<body>
<!-- start: Sidebar -->
<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
        <a href="laporan" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="/img/logo.png" alt="" class="w-14 h-14 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">kasirmakan</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group "> <!-- tambahkan active jika ingin melihat menu yg sedang aktif -->
                <a href="dashboard" class="flex items-center py-2 px-4 text-gray-300 hover:bg-yellow-600 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-home-4-fill mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="transaksi" class="flex items-center py-2 px-4 hover:bg-yellow-600 text-gray-300  hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                    <i class="ri-currency-fill mr-3 text-lg"></i>
                    <span class="text-sm">Transaksi</span>
                </a>
               
            </li>
            <li class="mb-1 group">
                <a href="laporan" class="flex items-center py-2 px-4 hover:bg-yellow-600 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 ">
                    <i class="ri-file-chart-fill mr-3 text-lg"></i>
                    <span class="text-sm">Menu</span>
                </a>
                
            </li>
            <li class="mb-1 group">
                <a href="profile" class="flex items-center py-2 px-4 hover:bg-yellow-600 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-user-3-fill mr-3 text-lg"></i>
                    <span class="text-sm">Profile</span>
                </a>
            </li>
           
        </ul>
        <div class="mt-6">


            <div class="flex mx-4 items-center justify-between mt-[650px]  text-gray-300">
                <div class="flex items-center gap-x-2">
                    <img class="object-cover rounded-full h-7 w-7" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&h=634&q=80" alt="avatar" />
                    
                    <?php if (!empty($profile) && isset($profile['username'])) : ?>
                    <span class="text-sm font-medium "><?= esc($profile['username']);?></span>
                <?php else : ?>
                    <span class="text-sm font-medium">Nama Pengguna</span>
                    <?php endif;?>
                </div>
                <?php if (logged_in()) : ?>
                <a href="/logout">
                    <i class="ri-logout-box-r-fill text-lg"></i>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end: Sidebar -->
    
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="<?= base_url('./js/script.js') ?>"></script>
</body>

</html>