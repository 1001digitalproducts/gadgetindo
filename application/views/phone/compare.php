<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Compare Phone A" />
    <meta name="mobile-wep-app-capable" content="yes">
    <!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
    <meta name="theme-color" content="11325B" />
    <!-- Mendeklarasikan ikon untuk iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="GadgetIndo" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-72.png" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-96.png" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-132.png" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-144.png" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-156.png" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-192.png" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-240.png" />
    <!-- Mendeklarasikan ikon untuk Windows -->
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/image/icon/mobile-alt-regular-72.png" />
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/image/icon/mobile-alt-regular-96.png" />
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/image/icon/mobile-alt-regular-132.png" />
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/image/icon/mobile-alt-regular-144.png" />
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/image/icon/mobile-alt-regular-156.png" />
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/image/icon/mobile-alt-regular-192.png" />
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/image/icon/mobile-alt-regular-240.png" />
    <meta name="msapplication-TileColor" content="#000000" />
    <title>GadgetIndo - Compare Phone</title>
    <link rel="icon" type="png" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-72.png">
    <link rel="manifest" href="<?= base_url() ?>manifest.json">

    <script>
        var base_url = "http://localhost/Wildan/GadgetIndo/web-app/"
    </script>

    <link href="<?= base_url() ?>assets/css/output.min.css" type="text/css" rel="stylesheet" />
    <link rel="preload" href="<?= base_url() ?>assets/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" as="style" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" onload="this.onload=null;this.rel='stylesheet'">
    <script src="<?= base_url() ?>assets/js/darkmode.js" async></script>
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
                <div class="flex items-center justify-center md:justify-end text-xs md:text-base gap-x-4">
                    <div class="py-2 border-b-2 border-orange">Compare With</div>
                </div>
            </div>
            <div class="content mt-8 gap-y-4 relative">
                <div class="overflow-x-auto">
                    <table class="pb-4 w-full h-full">
                        <tbody>
                            <tr>
                                <td class="absolute pt-8 bg-gray-100 dark:bg-gray-800 w-24 h-full"></td>
                                <td class="pl-4">
                                    <div class="flex mb-4">
                                        <input type="text" class="bg-transparent outline-none font-bold text-lg border-b-2 border-orange" value="Poco M4 Pro 5G" readonly>
                                        <button class="p-2 border-2 rounded-full border-gray-500 hover:bg-gray-200 dark:hover:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="pl-4">
                                    <div class="flex mb-4">
                                        <input type="text" class="bg-transparent outline-none font-bold text-lg border-b-2 border-orange" value="Poco M4 Pro 5G">
                                        <button class="p-2 border-2 rounded-full border-gray-500 hover:bg-gray-200 dark:hover:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="pl-4">
                                    <div class="flex mb-4">
                                        <input type="text" class="bg-transparent outline-none font-bold text-lg border-b-2 border-orange" value="Poco M4 Pro 5G">
                                        <button class="p-2 border-2 rounded-full border-gray-500 hover:bg-gray-200 dark:hover:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="pl-4">
                                    <div class="flex mb-4">
                                        <input type="text" class="bg-transparent outline-none font-bold text-lg border-b-2 border-orange" value="Poco M4 Pro 5G">
                                        <button class="p-2 border-2 rounded-full border-gray-500 hover:bg-gray-200 dark:hover:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-6">Network</td>
                                <td class="pl-4"><img class="lazyload rounded-xl bg-white" style="width: 160xp; height: 212px;" data-src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-pro-5g.jpg" alt=""></td>
                                <td class="pl-4"><img class="lazyload rounded-xl bg-white" style="width: 160xp; height: 212px;" data-src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-pro-5g.jpg" alt=""></td>
                                <td class="pl-4"><img class="lazyload rounded-xl bg-white" style="width: 160xp; height: 212px;" data-src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-pro-5g.jpg" alt=""></td>
                                <td class="pl-4"><img class="lazyload rounded-xl bg-white" style="width: 160xp; height: 212px;" data-src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-pro-5g.jpg" alt=""></td>
                            </tr>
                            <tr class="tr-network uppercase font-bold text-orange border-b-2 border-orange">
                                <td class="border-b-2 border-orange absolute pt-8 bg-gray-100 dark:bg-gray-800 w-24">Network</td>
                                <td class="pt-8 pl-4">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-orange -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Technology</td>
                                <td class="pl-4">
                                    <div>GSM / CDMA / HSPA / EVDO / LTE / 5G</div>
                                </td>
                                <td>
                                    <div>GSM / CDMA / HSPA / EVDO / LTE / 5G</div>
                                </td>
                                <td>
                                    <div>GSM / CDMA / HSPA / EVDO / LTE / 5G</div>
                                </td>
                                <td>
                                    <div>GSM / CDMA / HSPA / EVDO / LTE / 5G</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">
                                    2G Bands
                                </td>
                                <td class="pl-4">
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>CDMA 800 / 1900</div>
                                </td>
                                <td>
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>CDMA 800 / 1900</div>
                                </td>
                                <td>
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>CDMA 800 / 1900</div>
                                </td>
                                <td>
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>CDMA 800 / 1900</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">3G Bands</td>
                                <td class="pl-4">
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>HSDPA 850 / 900 / 1900 / 2100</div>
                                    <div>CDMA2000 1xEV-DO</div>
                                </td>
                                <td>
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>HSDPA 850 / 900 / 1900 / 2100</div>
                                    <div>CDMA2000 1xEV-DO</div>
                                </td>
                                <td>
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>HSDPA 850 / 900 / 1900 / 2100</div>
                                    <div>CDMA2000 1xEV-DO</div>
                                </td>
                                <td>
                                    <div>GSM 850 / 900 / 1800 / 1900</div>
                                    <div>HSDPA 850 / 900 / 1900 / 2100</div>
                                    <div>CDMA2000 1xEV-DO</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">4G Bands</td>
                                <td class="pl-4">
                                    <div>1, 2, 3, 4, 5, 7, 8, 12, 13, 14, 18, 19, 20, 25, 26, 28, 30, 38, 39, 40, 41, 46, 48, 66, 71</div>
                                </td>
                                <td>
                                    <div>1, 2, 3, 4, 5, 7, 8, 12, 13, 14, 18, 19, 20, 25, 26, 28, 30, 38, 39, 40, 41, 46, 48, 66, 71</div>
                                </td>
                                <td>
                                    <div>1, 2, 3, 4, 5, 7, 8, 12, 13, 14, 18, 19, 20, 25, 26, 28, 30, 38, 39, 40, 41, 46, 48, 66, 71</div>
                                </td>
                                <td>
                                    <div>1, 2, 3, 4, 5, 7, 8, 12, 13, 14, 18, 19, 20, 25, 26, 28, 30, 38, 39, 40, 41, 46, 48, 66, 71</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">5G Bands</td>
                                <td class="pl-4">
                                    <div>2, 5, 25, 41, 66, 71, 260, 261 SA / NSA / Sub6 / mmWave</div>
                                </td>
                                <td>
                                    <div>2, 5, 25, 41, 66, 71, 260, 261 SA / NSA / Sub6 / mmWave</div>
                                </td>
                                <td>
                                    <div>2, 5, 25, 41, 66, 71, 260, 261 SA / NSA / Sub6 / mmWave</div>
                                </td>
                                <td>
                                    <div>2, 5, 25, 41, 66, 71, 260, 261 SA / NSA / Sub6 / mmWave</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Speed</td>
                                <td class="pl-4">
                                    <div>HSPA 42.2/5.76 Mbps, LTE-A (6CA) Cat20 2000/200 Mbps, 5G</div>
                                </td>
                                <td>
                                    <div>HSPA 42.2/5.76 Mbps, LTE-A (6CA) Cat20 2000/200 Mbps, 5G</div>
                                </td>
                                <td>
                                    <div>HSPA 42.2/5.76 Mbps, LTE-A (6CA) Cat20 2000/200 Mbps, 5G</div>
                                </td>
                                <td>
                                    <div>HSPA 42.2/5.76 Mbps, LTE-A (6CA) Cat20 2000/200 Mbps, 5G</div>
                                </td>
                            </tr>
                            <tr class="tr-launch uppercase font-bold text-orange border-b-2 border-orange">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute pt-8 bg-gray-100 dark:bg-gray-800 w-24">LAUNCH</td>
                                <td class="pt-8 pl-4">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-orange -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Announced</td>
                                <td class="pl-4">
                                    <div>2021, August 11</div>
                                </td>
                                <td>
                                    <div>2021, August 11</div>
                                </td>
                                <td>
                                    <div>2021, August 11</div>
                                </td>
                                <td>
                                    <div>2021, August 11</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Status</td>
                                <td class="pl-4">
                                    <div>Available. Released 2021, August 27</div>
                                </td>
                                <td>
                                    <div>Available. Released 2021, August 27</div>
                                </td>
                                <td>
                                    <div>Available. Released 2021, August 27</div>
                                </td>
                                <td>
                                    <div>Available. Released 2021, August 27</div>
                                </td>
                            </tr>

                            <tr class="tr-body uppercase font-bold text-orange border-b-2 border-orange">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute pt-8 bg-gray-100 dark:bg-gray-800 w-24">BODY</td>
                                <td class="pt-8 pl-4">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-orange -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Dimensions</td>
                                <td class="pl-4">
                                    <div>Unfolded: 166 x 72.2 x 6.9 mm</div>
                                    <div>Folded: 86.4 x 72.2 x 15.9-17.1 mm</div>
                                </td>
                                <td>
                                    <div>Unfolded: 166 x 72.2 x 6.9 mm</div>
                                    <div>Folded: 86.4 x 72.2 x 15.9-17.1 mm</div>
                                </td>
                                <td>
                                    <div>Unfolded: 166 x 72.2 x 6.9 mm</div>
                                    <div>Folded: 86.4 x 72.2 x 15.9-17.1 mm</div>
                                </td>
                                <td>
                                    <div>Unfolded: 166 x 72.2 x 6.9 mm</div>
                                    <div>Folded: 86.4 x 72.2 x 15.9-17.1 mm</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Weight</td>
                                <td class="pl-4">
                                    <div>183 g (6.46 oz)</div>
                                </td>
                                <td>
                                    <div>183 g (6.46 oz)</div>
                                </td>
                                <td>
                                    <div>183 g (6.46 oz)</div>
                                </td>
                                <td>
                                    <div>183 g (6.46 oz)</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Build</td>
                                <td class="pl-4">
                                    <div>Plastic front, glass back (Gorilla Glass Victus), aluminum frame</div>
                                </td>
                                <td>
                                    <div>Plastic front, glass back (Gorilla Glass Victus), aluminum frame</div>
                                </td>
                                <td>
                                    <div>Plastic front, glass back (Gorilla Glass Victus), aluminum frame</div>
                                </td>
                                <td>
                                    <div>Plastic front, glass back (Gorilla Glass Victus), aluminum frame</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">SIM</td>
                                <td class="pl-4">
                                    <div>Nano-SIM, eSIM</div>
                                    <div>IPX8 water resistant (up to 1.5m for 30 mins)</div>
                                </td>
                                <td>
                                    <div>Nano-SIM, eSIM</div>
                                    <div>IPX8 water resistant (up to 1.5m for 30 mins)</div>
                                </td>
                                <td>
                                    <div>Nano-SIM, eSIM</div>
                                    <div>IPX8 water resistant (up to 1.5m for 30 mins)</div>
                                </td>
                                <td>
                                    <div>Nano-SIM, eSIM</div>
                                    <div>IPX8 water resistant (up to 1.5m for 30 mins)</div>
                                </td>
                            </tr>

                            <tr class="tr-display uppercase font-bold text-orange border-b-2 border-orange">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute pt-8 bg-gray-100 dark:bg-gray-800 w-24">DISPLAY</td>
                                <td class="pt-8 pl-4">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                                <td class="pt-8">POCO M4 PRO 5G</td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-orange -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Type</td>
                                <td class="pl-4">
                                    <div>Foldable Dynamic AMOLED 2X, 120Hz, HDR10+, 1200 nits (peak)</div>
                                </td>
                                <td>
                                    <div>Foldable Dynamic AMOLED 2X, 120Hz, HDR10+, 1200 nits (peak)</div>
                                </td>
                                <td>
                                    <div>Foldable Dynamic AMOLED 2X, 120Hz, HDR10+, 1200 nits (peak)</div>
                                </td>
                                <td>
                                    <div>Foldable Dynamic AMOLED 2X, 120Hz, HDR10+, 1200 nits (peak)</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Size</td>
                                <td class="pl-4">
                                    <div>6.7 inches, 101.5 cm2 (~84.7% screen-to-body ratio)</div>
                                </td>
                                <td>
                                    <div>6.7 inches, 101.5 cm2 (~84.7% screen-to-body ratio)</div>
                                </td>
                                <td>
                                    <div>6.7 inches, 101.5 cm2 (~84.7% screen-to-body ratio)</div>
                                </td>
                                <td>
                                    <div>6.7 inches, 101.5 cm2 (~84.7% screen-to-body ratio)</div>
                                </td>
                            </tr>
                            <tr class="border-b-2 border-gray-300 dark:border-gray-700">
                                <td class="border-t-2 border-gray-300 dark:border-gray-700 -mt-0.5 absolute bg-gray-100 dark:bg-gray-800 w-24">Resolution</td>
                                <td class="pl-4">
                                    <div>1080 x 2640 pixels (~426 ppi density)</div>
                                    <div>Cover display:</div>
                                    <div>Super AMOLED, 1.9 inches, 260 x 512 pixels</div>
                                </td>
                                <td>
                                    <div>1080 x 2640 pixels (~426 ppi density)</div>
                                    <div>Cover display:</div>
                                    <div>Super AMOLED, 1.9 inches, 260 x 512 pixels</div>
                                </td>
                                <td>
                                    <div>1080 x 2640 pixels (~426 ppi density)</div>
                                    <div>Cover display:</div>
                                    <div>Super AMOLED, 1.9 inches, 260 x 512 pixels</div>
                                </td>
                                <td>
                                    <div>1080 x 2640 pixels (~426 ppi density)</div>
                                    <div>Cover display:</div>
                                    <div>Super AMOLED, 1.9 inches, 260 x 512 pixels</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Start Footer -->
    <div class="footer bg-primary dark:bg-gray-900 p-4 border-t-2 border-gray-500 w-full text-gray-300">
        <div class="text-center">
            ?? 2021 All Right Reserved
        </div>
    </div>
    <!-- End Footer -->

    <!-- Start Toggle Dark Mode -->
    <div class="toggle-dark-mode absolute md:fixed bottom-96 md:bottom-10 right-10 inline-block w-10 select-none z-10">
        <button type="button" onclick="dark()" class="appearance-none cursor-pointer border-2 border-gray-500 rounded-full p-2 bg-gray-100 text-gray-700 dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800">
            <!-- <span class="animate-ping absolute top-1.5 left-1.5 justify-center h-3 p-4 md:h-6 w-3 md:w-6 select-none inline-flex rounded-full bg-orange opacity-75"></span> -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 md:h-6 w-3 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
        </button>
    </div>
    <!-- End Toggle Dark Mode -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
</html>