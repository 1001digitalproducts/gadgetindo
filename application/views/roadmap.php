<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Roadmap GadgetIndo" />
    <meta name="mobile-wep-app-capable" content="yes">
    <!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
    <meta name="theme-color" content="11325B" />
    <!-- Mendeklarasikan ikon untuk iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="Roadmap GadgetIndo" />
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
    <title>GadgetIndo - Roadmap</title>
    <link rel="manifest" href="<?= base_url() ?>manifest.json">

    <script>
        var base_url = "<?= base_url() ?>"
    </script>
    
    <link href="<?= base_url() ?>assets/css/output.min.css" type="text/css" rel="stylesheet" />
    <!-- <link href="<?= base_url() ?>ui/assets/css/output-back.css" type="text/css" rel="stylesheet" /> -->
    <link rel="preload" href="<?= base_url() ?>assets/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <script src="<?= base_url() ?>assets/js/darkmode.js" async></script>
    <style>
        .<?= $class["list_custom"] ?> {
            list-style: none;
        }

        .<?= $class["list_custom"] ?> li::before {
            list-style-position: inside;
            content: "\00D7";
            font-size: 25px;
            color: #FF9E01;
            display: inline-block; 
            width: 1em;
        }

        .<?= $class["list_custom"] ?> .<?= $class["active"] ?>::before {
            font-weight: bold;
            content: "\2713";
            font-size: 20px;
            text-shadow: 2px 2px 15px #FF9E01;
            margin: auto;
        }

        .<?= $class["roadmap_active"] ?> {
            background: #FF9E01;
            box-shadow: 0 0 0 5px #FF9E0133, 0 0 0 10px #FF9E0122, 0 0 0 15px #FF9E0111;
        }
    </style>
</head>
<body class="bg-background-default dark:bg-gray-800 text-gray-700 dark:text-gray-300">
    <div class="flex flex-col h-screen">
        <?php $this->load->view('template/header'); ?>
        
        <main class="flex pt-36 pb-16 md:pt-0 md:pb-0 px-4 md:px-24 py-6 w-full md:h-full md:items-center md:justify-center">
            <div class="w-full relative overflow-hidden pl-10">
                <div class="font-bold text-xl py-10">ROADMAP <span class="text-xs font-normal">(di update: <?= $updated ?>)</span></div>
                <div class="border-2-2 absolute border-opacity-20 border-orange h-full md:w-full md:h-0 border"></div>
                <div class="grid grid-cols-1 md:grid-cols-4 px-4 gap-x-8">
                    <?php foreach($data as $item) { ?>
                    <div class="relative">
                        <div class="absolute mt-8 -ml-8 md:block md:-mt-4 md:ml-0 z-20 border border-orange shadow-xl w-8 h-8 rounded-full <?= $item["active"] ? $class["roadmap_active"] : "bg-gray-100 dark:bg-gray-800" ?>"></div>
                        <div class="mt-4 py-4 px-4 md:px-0">
                            <h3 class="mb-3 font-bold text-xl"><?= $item["title"] ?></h3>
                            <ul class="text-sm <?= $class["list_custom"] ?>">
                                <?php foreach($item["content"] as $list) { ?>
                                <li <?= $list["active"] ? 'class="'.$class["active"].'"' : "" ?>><?= $list["label"] ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </main>
        <?php $this->load->view('template/footer'); ?>
        
    </div>
    
</body>
</html>