<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Brands GadgetIndo" />
    <meta name="mobile-wep-app-capable" content="yes">
    <!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
    <meta name="theme-color" content="11325B" />
    <!-- Mendeklarasikan ikon untuk iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="Brands GadgetIndo" />
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
    <title>GadgetIndo - Brands</title>
    <link rel="icon" type="png" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-72.png">
    <link rel="manifest" href="<?= base_url() ?>manifest.json">

    <script>
        var base_url = "<?= base_url() ?>"
    </script>
    
    <link href="<?= base_url() ?>assets/css/output.min.css" type="text/css" rel="stylesheet" />
    <!-- <link href="<?= base_url() ?>ui/assets/css/output-back.css" type="text/css" rel="stylesheet" /> -->
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url() ?>assets/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <script src="<?= base_url() ?>assets/js/darkmode.js" async></script>
    <style>
        img.myimg[src=""] {
            content:url("https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg");
        }
    </style>
</head>
<body class="bg-background-default dark:bg-gray-800 text-gray-700 dark:text-gray-300">
    <?php $this->load->view('template/header'); ?>
    
    <main>
        <div class="w-full -mt-1/3 px-6 md:px-12 mb-16">
            <div class="py-6 w-full">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-x-4 mt-4">
                    <?php 
                    
                    $cnt = 0;
                    foreach($data as $val) { 
                    ?>
                    <a class="my-4 bg-white dark:bg-gray-700 p-16 rounded-lg shadow-lg text-center text-2xl block hover:text-orange" data-aos="fade-up" data-aos-duration="2000"  data-aos-delay="<?= $cnt ?>" href="<?= base_url() ?>phone/brands/<?= $val->id ?>">
                        <img src="<?= $val->image_url ?>" style="width: 222px; height: 222px;" class="myimg mx-auto">
                        <?= $val->name ?><br/>
                        <span class="text-base"><?= $val->total_phone ?></span>
                    </a>
                    <?php
                        $cnt += 100;
                    } ?>
                </div>
            </div>
        </div>
    </main>

    <?php $this->load->view('template/footer'); ?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
<script>
    AOS.init({once: true});
</script>
</html>