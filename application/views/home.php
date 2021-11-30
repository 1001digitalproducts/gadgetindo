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
    <link rel="apple-touch-icon" href="./assets/image/icon/icon.png" />
    <!-- Mendeklarasikan ikon untuk Windows -->
    <meta name="msapplication-TileImage" content="./assets/image/icon/icon.png" />
    <meta name="msapplication-TileColor" content="#000000" />
    <title>GadgetIndo - Home</title>
    <link rel="manifest" href="./manifest.json">
    <link href="<?= base_url() ?>/assets/css/ouput.min.css" type="text/css" rel="stylesheet" />
    <script src="<?= base_url() ?>/assets/js/darkmode.js" async></script>

    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    </noscript>
</head>
<body class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300">
    
    <!-- Start Header -->
    <div class="header bg-dark-primary dark:bg-gray-900 px-12 py-8 w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 uppercase text-orange font-bold ">
            <div class="w-full text-2xl text-center md:text-left">
                GadgetIndo
            </div>
            <div class="w-full mt-8 md:mt-0 text-sm flex items-center justify-center md:justify-end gap-16">
                <a href="javascript:;">Home</a>
                <a href="javascript:;">Contact</a>
                <a href="javascript:;">About</a>
            </div>
        </div>
    </div>
    <!-- End Header -->
    
    <!-- Start Main -->
    <div class="main bg-primary dark:bg-gray-900 w-full md:overflow-hidden">
        <!-- Start Jumbotron -->
        <div class="relative landing text-gray-100 overflow-hidden h-96 md:h-screen">
            <div class="w-full h-2/3 md:flex md:items-center">
                <div class="text-center md:text-left w-full md:w-1/2 py-12 md:p-12 mt-1/3" data-aos="fade-right" data-aos-duration="2000">
                    <div class="title uppercase font-bold text-2xl md:text-4xl p-4 md:pl-0">Selamat Datang di Platform Gadget Indonesia</div>
                    <div class="desc text-sm">Temukan Gadget yang kamu cari, dan sebarkan di media sosialmu !</div>
                </div>
                <div class="w-full md:w-1/2 grid grid-cols-3 md:grid-cols-1 gap-y-4 text-sm p-0 md:p-12">
                    <!-- Start Icon Search -->
                    <div class="flex justify-center md:justify-start items-center gap-x-8" data-aos="fade-down" data-aos-duration="2000">
                        <div class="title uppercase font-bold text-lg border-2 rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <div class="description hidden md:block">Temukan gadget yang kamu cari disini</div>
                    </div>
                    <!-- End Icon Search -->

                    <!-- Start Icon Filter -->
                    <div class="flex justify-center md:justify-start items-center gap-x-8" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="500">
                        <div class="title uppercase font-bold text-lg border-2 rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                        </div>
                        <div class="description hidden md:block">Dari spek kentang sampai spek dewa, semua ada disini</div>
                    </div>
                    <!-- End Icon Filter -->

                    <!-- Start Icon Share -->
                    <div class="flex justify-center md:justify-start items-center gap-x-8" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000">
                        <div class="title uppercase font-bold text-lg border-2 rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
                        </div>
                        <div class="description hidden md:block">Sebarkan temuanmu di media sosial</div>
                    </div>
                    <!-- End Icon Share -->
                </div>
            </div>
            <div class="absolute bottom-0 z-10 w-full">
                <svg class="fill-current text-gray-100 dark:text-gray-800" viewBox="10 -60 1870 190" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                    <path d="M977.9,76.2 C475.2,-17.4 0.2,132.5 0.2,132.5 L0.2,275.5 L1891.3,275.5 L1891.3,0.7 C1891.3,0.7 1480.6,169.8 977.9,76.2 Z"></path> 
                </svg>
            </div>
        </div>
        <!-- End Jumbotron -->
    </div>
    <!-- End Main -->

    <!-- Start List Phone -->
    <div class="list-phone w-full -mt-1/3 px-6 md:px-12">
        <div class="w-full">
            <input type="text" class="p-2 bg-transparent outline-none font-bold text-lg border-b-2 border-gray-300 dark:border-gray-700 transition-colors focus:border-orange duration-500 w-full" value="" placeholder="Cari Gadget">
        </div>
        <div class="py-6 w-full div-xiaomi" data-aos="zoom-in" data-aos-duration="2000">
            <div class="title flex items-center">
                <div class="uppercase font-bold text-lg ">xiaomi</div>
                <div class="mx-4">|</div>
                <div class="text-xs"><a href="javascript:;">View All</a></div>
            </div>
            <div class="content grid grid-cols-2 md:grid-cols-5 gap-x-4 mt-4"></div>
        </div>
        <div class="py-6 w-full div-apple" data-aos="zoom-in" data-aos-duration="2000">
            <div class="title flex items-center">
                <div class="uppercase font-bold text-lg ">apple</div>
                <div class="mx-4">|</div>
                <div class="text-xs"><a href="javascript:;">View All</a></div>
            </div>
            <div class="content grid grid-cols-2 md:grid-cols-5 gap-x-4 mt-4"></div>
        </div>
    </div>
    <!-- End List Phone -->

    <!-- Start Footer -->
    <div class="footer bg-primary dark:bg-gray-900 p-4 border-t-2 border-gray-500 w-full text-gray-300">
        <div class="text-center">
            © 2021 All Right Reserved
        </div>
    </div>
    <!-- End Footer -->

    <!-- Start Toggle Dark Mode -->
    <div class="toggle-dark-mode fixed bottom-10 right-10 inline-block w-10 select-none z-10">
        <button type="button" onclick="dark()" class="appearance-none cursor-pointer border-2 border-gray-500 rounded-full p-2 bg-gray-100 text-gray-700 dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
        </button>
    </div>
    <!-- End Toggle Dark Mode -->
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js" integrity="sha512-K9tDZvc8nQXR1DMuT97sct9f40dilGp97vx7EXjswJA+/mKqJZ8vcZLifZDP+9t08osMLuiIjd4jZ0SM011Q+w==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
<script>
    AOS.init();

    function getdata(type){
        fetch("<?= base_url() ?>/assets/json/data_"+type+".json")
        .then(response => { return response.json() })
        .then(data => {
            let len = data.length > 6 ? 6 : data.length
            let str = ""
            for (let i = 0; i < len ; i++) {
                let item = data[i]
                let cls = i == (len-1) ? 'block md:hidden' : ''
                str += '' +
                    '<div class="my-4 bg-white p-4 rounded-lg '+cls+'">' +
                        '<a href="phone_detail.html"><img class="img-phone rounded-xl mx-auto pb-4" style="transform-style: preserve-3d; transform: perspective(1000px);" src="'+item.Image+'" alt="'+item.Title+'"></a>' +
                        '<a class="name text-xs md:text-base" href="phone_detail.html">' + item.Title + '</a>' +
                        '<div class="mt-4 mb-2">'+
                            '<a class="name text-xs" href="phone_detail.html">View Detail</a>' +
                            '<span class="px-2">|</span>' + 
                            '<a class="name text-xs" href="phone_detail.html">Share</a>' +
                        '</div>' +
                    '</div>'
            }

            document.querySelector('.div-'+type+' .content').innerHTML = str
            VanillaTilt.init(document.querySelectorAll(".img-phone"));
        });
    }
    
    getdata('xiaomi')
    getdata('apple')
</script>
</html>