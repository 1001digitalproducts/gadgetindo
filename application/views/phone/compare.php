<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Informasi seluruh Gadget" />
    <!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
    <meta name="theme-color" content="11325B" />
    <!-- Mendeklarasikan ikon untuk iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="GadgetIndo" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/image/icon/icon.png" />
    <!-- Mendeklarasikan ikon untuk Windows -->
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/image/icon/icon.png" />
    <meta name="msapplication-TileColor" content="#000000" />
    <title>GadgetIndo - Detail Phone</title>
    <link rel="manifest" href="<?= base_url() ?>assets/manifest.json">
    <link href="<?= base_url() ?>assets/css/ouput.min.css" type="text/css" rel="stylesheet" />
    <style>
        ::-webkit-scrollbar {
            width: 16px;
            height: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            border-radius: 100vh;
            background: transparent;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #cbd5e0;
            border-radius: 100vh;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #a0aec0;
        }

        .list-custom {
            list-style: none;
        }

        ul.list-custom li::before {
            list-style-position: inside;
            content: "o";
            color: #FF9E01;
            display: inline-block; 
            width: 1em;
        }

        ul.list-custom li.active::before {
            font-weight: bold;
            content: "•";
            font-size: 20px;
            text-shadow: 2px 2px 15px #FF9E01;
            margin: auto;
        }
    </style>
    <script>
        var base_url = "<?= base_url() ?>"
    </script>
    <script src="<?= base_url() ?>assets/js/darkmode.js"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300">
    <div class="flex flex-col h-screen">
        <!-- Start Header -->
        <header class="bg-dark-primary dark:bg-gray-900 px-12 py-8 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 uppercase text-orange font-bold ">
                <div class="w-full text-base md:text-2xl text-center md:text-left">
                    GadgetIndo
                </div>
                <div class="w-full mt-8 md:mt-0 text-xs md:text-sm flex items-center justify-center md:justify-end gap-16">
                    <a href="home.html">Home</a>
                    <a href="javascript:;">Contact</a>
                    <a href="javascript:;">About</a>
                </div>
            </div>
        </header>
        <!-- End Header -->
        
        <!-- Start Content -->
        <!-- <main class="px-8 md:px-52 h-full py-6 flex">
            <div class="flex overflow-x-auto items-center">
                <div class="flex-none w-full md:w-1/3 border-2 border-l-0 border-t-0 border-orange px-6 py-4">
                    <div class="text-center">
                      <div class="font-bold text-xl mb-2">Step 1</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                </div>
                <div class="flex-none w-full md:w-1/3 overflow-hidden border-2 border-b-0 border-l-0 border-orange px-6 py-4">
                    <div class="text-center">
                      <div class="font-bold text-xl mb-2">Step 2</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                </div>
                <div class="flex-none w-full md:w-1/3 border-2 border-l-0 border-t-0 border-gray-300 px-6 py-4">
                    <div class="text-center">
                      <div class="font-bold text-xl mb-2">Step 3</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                </div>
            </div>
        </main> -->
        <!-- End Content -->

        <!-- Start Content -->
        <main class="flex px-4 md:px-24 py-6 w-full md:h-full md:items-center md:justify-center">
            <div class="w-full relative overflow-hidden pl-10">
                <div class="font-bold text-xl uppercase py-10">roadmap <span class="text-xs font-normal lowercase">(di update: 4 December 2021)</span></div>
                <div class="border-2-2 absolute border-opacity-20 border-orange h-full md:w-full md:h-0 border"></div>
                <div class="grid grid-cols-1 md:grid-cols-4 px-4 gap-x-8">
                    <div class="relative">
                        <div class="absolute mt-8 -ml-8 md:block md:-mt-4 md:ml-0 z-20 bg-orange shadow-xl w-8 h-8 rounded-full"></div>
                        <div class="mt-4 py-4 px-4 md:px-0">
                            <h3 class="mb-3 font-bold text-gray-800 dark:text-gray-300 text-xl">Desember 2021</h3>
                            <ul class="text-sm text-gray-900 dark:text-gray-300 list-custom">
                                <li class="active">Phone List</li>
                                <li class="active">Phone Detail</li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute mt-8 -ml-8 md:block md:-mt-4 md:ml-0 z-20 bg-gray-100 dark:bg-gray-800 border border-orange shadow-xl w-8 h-8 rounded-full"></div>
                        <div class="mt-4 py-4 px-4 md:px-0">
                            <h3 class="mb-3 font-bold text-gray-800 dark:text-gray-300 text-xl">Januari 2022</h3>
                            <ul class="text-sm text-gray-900 dark:text-gray-300 list-custom">
                                <li>Search, Filter & Share Phone</li>
                                <li>All Phone</li>
                                <li>Phone Compare</li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute mt-8 -ml-8 md:block md:-mt-4 md:ml-0 z-20 bg-gray-100 dark:bg-gray-800 border border-orange shadow-xl w-8 h-8 rounded-full"></div>
                        <div class="mt-4 py-4 px-4 md:px-0">
                            <h3 class="mb-3 font-bold text-gray-800 dark:text-gray-300 text-xl">Maret 2022</h3>
                            <ul class="text-sm text-gray-900 dark:text-gray-300 list-custom">
                                <li>360 image phone</li>
                                <li>Laptop List</li>
                                <li>Laptop Detail</li>
                                <li>Camera List</li>
                                <li>Camera Detail</li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute mt-8 -ml-8 md:block md:-mt-4 md:ml-0 z-20 bg-gray-100 dark:bg-gray-800 border border-orange shadow-xl w-8 h-8 rounded-full"></div>
                        <div class="mt-4 py-4 px-4 md:px-0">
                            <h3 class="mb-3 font-bold text-gray-800 dark:text-gray-300 text-xl">April 2022</h3>
                            <ul class="text-sm text-gray-900 dark:text-gray-300 list-custom">
                                <li>Member Area</li>
                                <li>Beranda</li>
                                <li>Footage</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <!-- End Content -->
        
        <!-- Start Footer -->
        <footer class="bg-primary dark:bg-gray-900 p-4 border-t-2 border-gray-500 w-full text-gray-300 text-center">
            © 2021 All Right Reserved
        </footer>
        <!-- End Footer -->
    </div>
    
    <!-- Start Toggle Dark Mode -->
    <div class="toggle-dark-mode absolute md:fixed bottom-96 md:bottom-10 right-10 inline-block w-10 select-none z-10">
        <button type="button" onclick="dark()" class="appearance-none cursor-pointer border-2 border-gray-500 rounded-full p-2 bg-gray-100 text-gray-700 dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 md:h-6 w-3 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
        </button>
    </div>
    <!-- End Toggle Dark Mode -->
</body>
</html>