<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('./css/app.css') ?>">
</head>

<body>


    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-100 min-h-screen transition-all main">
        <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>
            <ul class="flex items-center text-sm ml-4">
                <li class="mr-2">
                    <a href="#" class="text-gray-400 hover:text-gray-600 font-medium">Admin</a>
                </li>
                <li class="text-gray-600 mr-2 font-medium">/</li>
                <li class="text-gray-600 mr-2 font-medium">Edit profile</li>
            </ul>

        </div>


        <!-- form  -->
        <div class="py-4 px-36 lg:py-14 flex justify-center">
            <div class="relative overflow-x-auto max-w-2xl shadow-md ">

                <form class="lg:bg-gray-200 max-w-4xl py-7 px-10" action="<?= base_url('update') ?>" method="post">
                    <div class="space-y-12">

                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                                <div class="mt-2 flex items-center gap-x-3">
                                    <svg class="h-16 w-16 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                                    </svg>
                                    <div class=" flex text-sm leading-6 text-gray-600">
                                        <label for="photo" class="relative cursor-pointer rounded-md  bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50  focus-within:outline-none focus-within:ring-2 focus-within:ring-primary focus-within:ring-offset-2 hover:text-primary">
                                            <span>Ubah</span>
                                            <input id="photo" value="<?= $profile['photo'] ;?>" name="photo" type="file" class="sr-only">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-full">
                                <label for="id" class="block text-sm font-medium leading-6 text-gray-900">Id</label>
                                <div class="mt-2">
                                    <input type="text" name="id" id="id" value="<?= $profile['id']; ?>" autocomplete="username" class="block w-full border-0 rounded-sm  py-1.5 pl-1 text-gray-900 sm:text-sm sm:leading-6 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary">
                                </div>
                            </div>
                            <div class="sm:col-span-full">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Pengguna</label>
                                <div class="mt-2">
                                    <input type="text" name="username" id="username" value="<?= $profile['username']; ?>" autocomplete="username" class="block w-full border-0 rounded-sm  py-1.5 pl-1 text-gray-900 sm:text-sm sm:leading-6 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary">
                                </div>
                            </div>
                            <div class="sm:col-span-full">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                <div class="mt-2">
                                    <input type="password" name="password" id="password" value="<?= $profile['password']; ?>" autocomplete="current-password" class="shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary block w-full border-0 rounded-sm  py-1.5 pl-1 text-gray-900 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-full">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                <div class="mt-2">
                                    <input type="email" name="email" id="email" value="<?= $profile['email']; ?>" autocomplete="current-password" class="shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary block w-full border-0 rounded-sm  py-1.5 pl-1 text-gray-900 sm:text-sm sm:leading-6">
                                </div>
                            </div>


                        </div>


                        <div class=" pb-5">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-full">
                                    <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                                    <div class="mt-2">
                                        <input type="alamat" name="alamat" id="alamat" value="<?= $profile['alamat']; ?>" class="shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary block w-full border-0 rounded-sm  py-1.5 pl-1 text-gray-900 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-2 sm:col-start-1">
                                    <label for="kota" class="block text-sm font-medium leading-6 text-gray-900">Kota</label>
                                    <div class="mt-2">
                                        <input type="text" value="<?= $profile['kota']; ?>" name="kota" id="kota" autocomplete="address-level2" class="block w-full rounded-sm border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="provinsi" class="block text-sm font-medium leading-6 text-gray-900">Provinsi</label>
                                    <div class="mt-2">
                                        <input type="text" value="<?= $profile['provinsi']; ?>" name="provinsi" id="provinsi" autocomplete="address-level1" class="block w-full rounded-sm border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="kode_pos" class="block text-sm font-medium leading-6 text-gray-900">Kode Pos</label>
                                    <div class="mt-2">
                                        <input type="text" value="<?= $profile['kode_pos']; ?>" name="kode_pos" id="kode_pos" autocomplete="postal-code" class="block w-full rounded-sm border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end gap-x-6">
                            <button type="reset" class="text-sm font-semibold leading-6 text-gray-900 hover:text-primary">Batal</button>
                            <button type="submit" class="rounded-md bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-opacity-90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Simpan</button>
                        </div>
                </form>

            </div>




        </div>
        <!-- end table -->


    </main>
    <!-- end: Main -->

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="<?= base_url('./js/script.js') ?>"></script>
</body>

</html>



<!-- file -->