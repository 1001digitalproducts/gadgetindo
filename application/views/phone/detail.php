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
    <link href="<?= base_url() ?>assets/css/custom.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        var base_url = "<?= base_url() ?>"
    </script>
    <script src="<?= base_url() ?>assets/js/darkmode.js"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300">
    
    <!-- Start Header -->
    <div class="header bg-dark-primary dark:bg-gray-900 px-12 py-8 w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 uppercase text-orange font-bold ">
            <div class="w-full text-base md:text-2xl text-center md:text-left">
                <a href="<?= base_url() ?>">GadgetIndo</a>
            </div>
            <div class="w-full mt-8 md:mt-0 text-xs md:text-sm flex items-center justify-center md:justify-end gap-16">
                <a href="<?= base_url() ?>">Home</a>
                <a href="javascript:;">Contact</a>
                <a href="javascript:;">About</a>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Start Content -->
    <div>
        <div class="px-4 md:px-52 py-6">
            <div class="title grid grid-cols-1 md:grid-cols-2 text-xs md:text-base">
                <div class="flex items-center justify-center md:justify-start gap-x-6 md:gap-x-8">
                    <div class="uppercase font-bold text-base md:text-lg">xiaomi</div>
                    <div>|</div>
                    <div>Poco M4 Pro 5G</div>
                    <div>|</div>
                    <div class="text-xs"><a href="javascript:;">View All</a></div>
                </div>
                <div class="flex items-center justify-center md:justify-end text-xs md:text-base gap-x-4">
                    <div>Review</div>
                    <div class="py-2 border-b-2 border-orange">Specification</div>
                    <div><a href="<?= base_url() ?>/phone-compare/<?= $phone ?>">Compare With</a></div>
                </div>
            </div>
            <div class="content mt-8 gap-y-4">
                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-4 gap-y-4">
                    <div class="flex md:col-span-3 justify-center md:justify-end">
                        <img class="rounded-xl bg-white" src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-pro-5g.jpg" alt="">
                    </div>
                    <div class="border-2 p-2 rounded border-primary dark:border-orange text-primary dark:text-orange bg-blue-100 dark:bg-gray-900 md:col-span-2 text-xs md:text-lg">
                        <div class="div-released">
                            <i class="far fa-calendar mr-2"></i>Released 2021, August 27
                        </div>
                        <div class="div-weight">
                            <i class="fas fa-mobile-alt mr-2"></i>183g, 6.9mm thickness
                        </div>
                        <div class="div-operating-system">
                            <i class="fas fa-angle-left"></i><i class="fas fa-angle-right mr-2"></i>Android 11, One UI 3.1.1
                        </div>
                        <div class="div-memory">
                            <i class="fas fa-microchip mr-2"></i>28GB/256GB storage, no card slot
                        </div>
                        <div class="div-dimension font-bold">
                            <i class="far fa-square mr-2"></i>6.7", 1080x2640 pixels
                        </div>
                        <div class="div-camera font-bold">
                            <i class="far fa-circle mr-2"></i>12 MP, 1080x2640 pixels
                        </div>
                        <div class="div-ram font-bold">
                            <i class="fas fa-microchip mr-2"></i>8GB RAM, Snapdragon 888 5G
                        </div>
                        <div class="div-battery font-bold">
                            <i class="fas fa-battery-full mr-2"></i>3300 mAh, Li-Po
                        </div>
                    </div>
                </div>
                <div class="flex items-center text-xs md:text-base my-8 gap-x-4 md:gap-x-8 p-4 uppercase overflow-auto whitespace-nowrap mytabs mytabs-nav">
                    <div><a href="javascript:;" attr-href="all" class="py-2 border-b-2 border-orange">all</a></div>
                    <div><a href="javascript:;" attr-href="network">network</a></div>
                    <div><a href="javascript:;" attr-href="launch">launch</a></div>
                    <div><a href="javascript:;" attr-href="body">body</a></div>
                    <div><a href="javascript:;" attr-href="display">display</a></div>
                    <div><a href="javascript:;" attr-href="platform">platform</a></div>
                    <div><a href="javascript:;" attr-href="memory">memory</a></div>
                    <div><a href="javascript:;" attr-href="main-camera">main camera</a></div>
                    <div><a href="javascript:;" attr-href="selfie-camera">selfie camera</a></div>
                    <div><a href="javascript:;" attr-href="sound">sound</a></div>
                    <div><a href="javascript:;" attr-href="comms">comms</a></div>
                    <div><a href="javascript:;" attr-href="features">features</a></div>
                    <div><a href="javascript:;" attr-href="battery">battery</a></div>
                    <div><a href="javascript:;" attr-href="misc">misc</a></div>
                    <div><a href="javascript:;" attr-href="tests">tests</a></div>
                </div>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4 mytabs-content">
                    <div class="div-network content">
                        <div class="content-title uppercase font-bold text-orange border-b-2 border-orange">
                            network
                        </div>
                        <div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Technology</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>GSM / CDMA / HSPA / EVDO / LTE / 5G</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>2G Bands</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>CDMA 800 / 1900</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>3G Bands</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>HSDPA 850 / 900 / 1900 / 2100</div>
                                    <div>CDMA2000 1xEV-DO</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>4G Bands</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>1, 2, 3, 4, 5, 7, 8, 12, 13, 14, 18, 19, 20, 25, 26, 28, 30, 38, 39, 40, 41, 46, 48, 66, 71</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>5G Bands</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>2, 5, 25, 41, 66, 71, 260, 261 SA/NSA/Sub6/mmWave</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Speed</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>HSPA 42.2/5.76 Mbps, LTE-A (6CA) Cat20 2000/200 Mbps, 5G</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-network hidden md:flex justify-center items-center text-orange">
                        <i class="fas fa-wifi fa-7x"></i>
                    </div>
                    <div class="div-launch">
                        <div class="content-title uppercase font-bold text-orange border-b-2 border-orange">
                            launch
                        </div>
                        <div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Announced</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>2021, August 11</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Status</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>Available. Released 2021, August 27</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-launch hidden md:flex justify-center items-center text-orange">
                        <i class="fas fa-rocket fa-7x"></i>
                    </div>
                    <div class="div-body">
                        <div class="content-title uppercase font-bold text-orange border-b-2 border-orange">
                            body
                        </div>
                        <div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Dimensions</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>Unfolded: 166 x 72.2 x 6.9 mm</div>
                                    <div>Folded: 86.4 x 72.2 x 15.9-17.1 mm</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Weight</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>183 g (6.46 oz)</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Build</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>Plastic front, glass back (Gorilla Glass Victus), aluminum frame</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>SIM</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>Nano-SIM, eSIM</div>
                                    <div>IPX8 water resistant (up to 1.5m for 30 mins)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-body hidden md:flex justify-center items-center text-orange">
                        <i class="fas fa-mobile fa-7x"></i>
                    </div>
                    <div class="div-display">
                        <div class="content-title uppercase font-bold text-orange border-b-2 border-orange">
                            display
                        </div>
                        <div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Type</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>Foldable Dynamic AMOLED 2X, 120Hz, HDR10+, 1200 nits (peak)</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Size</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>6.7 inches, 101.5 cm2 (~84.7% screen-to-body ratio)</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">
                                <div>Resolution</div>
                                <div class="col-span-2 md:col-span-3">
                                    <div>1080 x 2640 pixels (~426 ppi density)</div>
                                    <div>Cover display:</div>
                                    <div>Super AMOLED, 1.9 inches, 260 x 512 pixels</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-display hidden md:flex justify-center items-center text-orange">
                        <i class="fas fa-mobile fa-7x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.mytabs a').on('click', function() {
        var show_div = $(this).attr('attr-href')
        $('.mytabs-nav a').removeClass('py-2 border-b-2 border-orange')
        $(this).addClass('py-2 border-b-2 border-orange')

        $('.mytabs-content div[class^=div-]').hide()
        $('.mytabs-content div[class^=icon-]').removeClass('md:flex')
        $('.mytabs-content .div-' + show_div).fadeIn()
        $('.mytabs-content .icon-' + show_div).addClass('md:flex')

        if (show_div == 'all'){
            $('.mytabs-content div[class^=div-]').fadeIn()
            $('.mytabs-content div[class^=icon-]').addClass('md:flex')
        }
    })
</script>
</html>