<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('./css/app.css') ?>">
</head>

<body>

    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-100 min-h-screen transition-all main ">
        <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>
            <ul class="flex items-center text-sm ml-4">
                <li class="mr-2">
                    <a href="#" class="text-gray-400 hover:text-gray-600 font-medium">Admin</a>
                </li>
                <li class="text-gray-600 mr-2 font-medium">/</li>
                <li class="text-gray-600 mr-2 font-medium">Dashboard</li>
            </ul>

        </div>
        <!-- 3 card -->
        <div class="p-6 lg:mt-24  mx-56">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:mb-12">
                <!-- card jumlh transaksi -->
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="text-2xl font-semibold mb-1">Transaksi</div>
                            <div class="flex gap-5 items-center ">
                                <i class="ri-bank-card-fill  text-6xl"></i>
                                <div class="text-xl font-medium text-gray-400"><?= $countAllTransaksi; ?></div>
                            </div>
                        </div>
                        <div class="text-right mt-28">
                            <p class="text-sm font-medium text-gray-600 ml-4">Desember 2023</p>
                        </div>

                    </div>

                </div>

                <!-- card pendapatan -->
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="text-2xl font-semibold mb-1">Pendapatan</div>
                            <div class="flex gap-5 items-center ">
                                <i class="ri-money-dollar-circle-fill text-6xl"></i>
                                <div class="text-xl font-medium text-gray-400"><?= $totalTransaksi; ?></div>
                            </div>
                        </div>
                        <div class="text-right mt-28">
                            <p class="text-sm font-medium text-gray-600 ml-4">Desember 2023</p>
                        </div>

                    </div>

                </div>


            </div>
            <div class="grid lg:mx-auto grid-cols-1 lg:w-[85%]  gap-6 mb-6">

                <div class="bg-white  border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                    <div class="flex justify-between mb-4 items-start">
                        <div class="font-medium">Daftar Menu</div>

                    </div>
                    <form action="" class="flex items-center mb-4">
                        <div class="relative w-full mr-2">
                            <input type="text" name="cari" id="cari" class="pr-2 pl-10 block w-full border-0 rounded-md  py-2  text-gray-900 text-sm sm:leading-6 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary" placeholder="Cari...">
                            <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
                        </div>
                        <select class="pr-2 pl-10 border-0 rounded-md  py-2  text-gray-900 text-sm sm:leading-6 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary appearance-none bg-select-arrow bg-no-repeat bg-[length:16px_16px] bg-[right_16px_center]">
                            <option value="abjh">Urutkan</option>
                        </select>
                    </form>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[500px]">
                            <thead>
                                <tr>
                                    <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">Nama</th>
                                    <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Harga</th>
                                    <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Stok</th>
                                    <!-- <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md"></th> -->
                                </tr>
                            </thead>
                            <?php foreach ($menu as $m) : ?>
                                <tr>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <div class="flex items-center">
                                            <!-- Ganti URL gambar jika ada URL gambar yang sesuai -->
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover block">
                                            <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate"><?= $m['namaMenu']; ?></a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <span class="text-[13px] font-medium text-gray-400">Rp<?= number_format($m['harga'], 2, ',', '.'); ?></span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <span class="text-[13px] font-medium text-gray-400"><?= $m['stok']; ?></span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- end 3 card -->
    </main>
    <!-- end: Main -->

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="<?= base_url('./js/script.js') ?>"></script>
</body>

</html>