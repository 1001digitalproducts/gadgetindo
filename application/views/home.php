<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Informasi seluruh Gadget" />
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
    <title>GadgetIndo - Home</title>
    <link rel="manifest" href="<?= base_url() ?>manifest.json">

    <script>
        var base_url = "<?= base_url() ?>"
    </script>
    
    <link href="<?= base_url() ?>assets/css/output.min.css" type="text/css" rel="stylesheet" />
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url() ?>assets/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <script src="<?= base_url() ?>assets/js/darkmode.js" async></script>
    <style>
        .autocomplete-suggestions {
            z-index: 10;
        }
    </style>
</head>
<body class="bg-background-default dark:bg-gray-800 text-gray-700 dark:text-gray-300">
    <?php $this->load->view('template/header'); ?>
    
    <main>
        <!-- Start Main -->
        <div class="bg-white dark:bg-gray-900 w-full md:overflow-hidden">
            <!-- Start Jumbotron -->

            <div class="relative landing overflow-hidden h-96 md:h-screen">
                <div class="w-full h-2/3 md:flex md:items-center">
                    <div class="text-center md:text-left w-full md:w-1/2 py-12 md:p-12 mt-1/3">
                        <div class="title uppercase font-bold text-2xl md:text-4xl p-4 md:pl-0">Selamat Datang di Platform Gadget Indonesia</div>
                        <div class="desc text-sm">Temukan Gadget yang kamu cari, dan sebarkan di media sosialmu !</div>
                    </div>
                    <div class="w-full md:w-1/2 grid grid-cols-3 md:grid-cols-1 gap-y-4 text-sm p-0 md:p-12">
                        <!-- Start Icon Search -->
                        <div class="flex justify-center md:justify-start items-center gap-x-8">
                            <div class="title uppercase font-bold text-lg border border-gray-700 dark:border-gray-300 rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <div class="description hidden md:block">Temukan gadget yang kamu cari disini</div>
                        </div>
                        <!-- End Icon Search -->

                        <!-- Start Icon Filter -->
                        <div class="flex justify-center md:justify-start items-center gap-x-8">
                            <div class="title uppercase font-bold text-lg border border-gray-700 dark:border-gray-300 rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                                </svg>
                            </div>
                            <div class="description hidden md:block">Dari spek kentang sampai spek dewa, semua ada disini</div>
                        </div>
                        <!-- End Icon Filter -->

                        <!-- Start Icon Share -->
                        <div class="flex justify-center md:justify-start items-center gap-x-8">
                            <div class="title uppercase font-bold text-lg border border-gray-700 dark:border-gray-300 rounded-full p-2">
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
                    <svg class="fill-current text-background-default dark:text-gray-800" viewBox="10 -60 1870 190" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                        <path d="M977.9,76.2 C475.2,-17.4 0.2,132.5 0.2,132.5 L0.2,275.5 L1891.3,275.5 L1891.3,0.7 C1891.3,0.7 1480.6,169.8 977.9,76.2 Z"></path> 
                    </svg>
                </div>
            </div>
            <!-- End Jumbotron -->
        </div>
        <!-- End Main -->

        <!-- Start List Phone -->
        <div class="w-full -mt-1/3 px-6 md:px-12 mb-16">
            <div class="w-full">
                <input type="text" class="q-search p-2 bg-transparent outline-none font-bold text-lg border-b-2 border-gray-300 dark:border-gray-700 transition-colors focus:border-orange duration-500 w-full" value="" placeholder="Cari Gadget">
            </div>
            <?php foreach($data as $key => $val){ ?>
            <div class="py-6 w-full">
                <div class="flex items-center">
                    <div class="uppercase font-bold text-lg "><?= strtoupper($val->name) ?></div>
                    <div class="mx-4">|</div>
                    <div class="text-xs"><a href="<?= base_url() ?>phone/brands/<?= $val->brand_id ?>">View All</a></div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-x-4 mt-4">
                    <?php 
                        $cnt = 0;
                        $item = $val->data;
                        $len = count($item);
                        for ($i = 0; $i < $len; $i++){
                            $cls = $i == ($len-1) ? 'block md:hidden' : '';
                    ?>
                    <div class="flex flex-col my-4 bg-white dark:bg-gray-700 p-4 rounded-lg shadow-lg <?= $cls ?>" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="<?= $cnt ?>">
                        <a class="order-1 md:order-2" href="<?= base_url() ?>phone/<?= $item[$i]->id ?>">
                            <img class="lazyload rounded-xl mx-auto pb-4" style="width: 160xp; height: 212px;" data-src="<?= $item[$i]->image_url ?>" alt="<?= $item[$i]->name ?>">
                        </a>
                        <a class="order-2 md:order-1 my-2 text-center text-xs md:text-base w-full" href="<?= base_url() ?>phone/<?= $item[$i]->id ?>"><?= strtoupper($item[$i]->name) ?></a>
                        <div class="order-last mx-2 mt-4 md:mt-0 mx-auto">
                            <a class="text-xs" href="<?= base_url() ?>phone/<?= $item[$i]->id ?>">View Detail</a>
                            <span class="px-2">|</span>
                            <a class="text-xs" href="<?= base_url() ?>phone/<?= $item[$i]->id ?>">Share</a>
                        </div>
                    </div>
                    <?php 
                            $cnt += 100;
                        } 
                    ?>
                </div>
            </div>
            <?php  } ?>
        </div>
        <!-- End List Phone -->
    </main>

    <?php $this->load->view('template/footer'); ?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.js" integrity="sha512-TToQDr91fBeG4RE5RjMl/tqNAo35hSRR4cbIFasiV2AAMQ6yKXXYhdSdEpUcRE6bqsTiB+FPLPls4ZAFMoK5WA==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
<script>
    AOS.init({once: true});

    var is_load = false
    $(function(){
        $('.q-search').on('click', () => {
            if (is_load) return false

            is_load = true
            $('.q-search').autoComplete({
                source: function(term, response){
                    $.post("<?= base_api() ?>phones/search", { search: $('.q-search').val(), page: 1, limit: 5 },
                    (res) => {
                        let arr = []
                        res.data.forEach(e => { arr.push(e.id + ":;" + e.name + ":;" + e.image_url) })
                        arr.push("-:;View All")
                        response(arr)
                    })
                },
                renderItem: function (item, search){
                    item = item.split(":;")
                    var dataUrl = '<?= base_url() ?>phone/'+ item[0]
                    var img = "<img src='"+item[2]+"' style='height: 83px;' alt='"+item[1]+"'>"
                    if (item[0] == "-") {
                        dataUrl = '<?= base_url() ?>phone/list/'+ search
                        img = ""
                    }
                    return '<div class="autocomplete-suggestion dark:bg-gray-800 text-gray-700 dark:text-gray-300 pointer dark:hover:bg-transparent dark:hover:text-orange flex gap-4" style="padding: 2rem" data-url="'+dataUrl+'" data-val="'+search+'">'+img+item[1]+'</div>';
                },
                onSelect: function(e, term, item){
                    window.location.href = item.data("url")
                }
            });

            $('.autocomplete-suggestions').addClass('dark:bg-gray-800 text-gray-700 dark:text-gray-300')
        })
    })
</script>
</html>