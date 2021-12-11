<?php
    function genHtml($data) {
        $res = "";
        $temp_name = "";
        for ($i = 0; $i < count($data); $i++) {
            $item = $data[$i];
            $res .= '<div class="grid grid-cols-3 md:grid-cols-4 border-b-2 border-gray-300 dark:border-gray-700">';
            $res .=     "<div>$item->name</div>";
            $res .=     '<div class="col-span-2 md:col-span-3">';
            for ($j = $i; $j < count($data) && $data[$j]->name == $item->name; $j++){
                $res .=     "<div>".$data[$j]->value."</div>";
            }
            $i = $j - 1;
            $res .=     '</div>';
            $res .= '</div>';
        }

        return $res;
    }
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        var base_url = "<?= base_url() ?>"
    </script>
    <script src="<?= base_url() ?>assets/js/darkmode.js"></script>
    
    <link rel="preload" href="<?= base_url() ?>assets/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
    </noscript>
</head>
<body class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300">
    <?php $this->load->view('template/header'); ?>

    <main class="px-4 md:px-52 py-6">
        <div class="title grid grid-cols-1 md:grid-cols-2 text-xs md:text-base">
            <div class="flex items-center justify-center md:justify-start gap-x-6 md:gap-x-8">
                <div class="uppercase font-bold text-base md:text-lg">xiaomi</div>
                <div>|</div>
                <div><?= $phone_info[0]->name ?></div>
                <div>|</div>
                <div class="text-xs"><a href="javascript:;">View All</a></div>
            </div>
            <div class="flex items-center justify-center md:justify-end text-xs md:text-base gap-x-4">
                <div>Review</div>
                <div class="py-2 border-b-2 border-orange">Specification</div>
                <div><a href="<?= base_url() ?>/phone-compare/<?= $phone_info[0]->name ?>">Compare With</a></div>
            </div>
        </div>
        <div class="content mt-8 mb-16 gap-y-4">
            <div class="grid grid-cols-1 md:grid-cols-6 gap-x-4 gap-y-4">
                <div class="flex md:col-span-3 justify-center md:justify-end">
                    <img class="lazyload rounded-xl bg-white" style="width: 160xp; height: 212px;" data-src="<?= $phone_info[0]->image_url ?>" alt="">
                </div>
                <div class="border-2 p-2 rounded border-primary dark:border-orange text-primary dark:text-orange bg-blue-100 dark:bg-gray-900 md:col-span-2 text-xs md:text-lg">
                    <div class="div-released">
                        <i class="far fa-calendar mr-2"></i><?= $additional_info->release ?>
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
                <div><a href="javascript:;" attr-href="<?= $class["network"] ?>">network</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["launch"] ?>">launch</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["body"] ?>">body</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["display"] ?>">display</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["platform"] ?>">platform</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["memory"] ?>">memory</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["main_camera"] ?>">main camera</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["front_camera"] ?>">selfie camera</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["sound"] ?>">sound</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["comms"] ?>">comms</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["feature"] ?>">features</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["battery"] ?>">battery</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["misc"] ?>">misc</a></div>
                <div><a href="javascript:;" attr-href="<?= $class["test"] ?>">tests</a></div>
            </div>
            <div class="mt-4 grid grid-cols-1 gap-4 mytabs-content">
                <div class="div-<?= $class["network"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        network <i class="fas fa-wifi"></i>
                    </div>
                    <div><?= genHtml($phone_networks) ?></div>
                </div>
                <div class="div-<?= $class["launch"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        launch <i class="fas fa-rocket"></i>
                    </div>
                    <div><?= genHtml($phone_launchs) ?></div>
                </div>
                <div class="div-<?= $class["body"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        body <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div><?= genHtml($phone_bodys) ?></div>
                </div>
                <div class="div-<?= $class["display"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        display <i class="fas fa-square"></i>
                    </div>
                    <div><?= genHtml($phone_displays) ?></div>
                </div>
                <div class="div-<?= $class["platform"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        platform <i class="fas fa-angle-left"></i><i class="fas fa-angle-right"></i>
                    </div>
                    <div><?= genHtml($phone_platforms) ?></div>
                </div>
                <div class="div-<?= $class["memory"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        memory <i class="fas fa-microchip"></i>
                    </div>
                    <div><?= genHtml($phone_memorys) ?></div>
                </div>
                <div class="div-<?= $class["main_camera"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        main camera <i class="far fa-circle"></i>
                    </div>
                    <div><?= genHtml($phone_main_cameras) ?></div>
                </div>
                <div class="div-<?= $class["front_camera"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        front camera <i class="far fa-circle"></i>
                    </div>
                    <div><?= genHtml($phone_front_cameras) ?></div>
                </div>
                <div class="div-<?= $class["sound"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        sound <i class="fas fa-volume-up"></i>
                    </div>
                    <div><?= genHtml($phone_sounds) ?></div>
                </div>
                <div class="div-<?= $class["comms"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        comms <i class="fab fa-creative-commons-share"></i>
                    </div>
                    <div><?= genHtml($phone_commss) ?></div>
                </div>
                <div class="div-<?= $class["feature"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        feature <i class="fas fa-asterisk"></i>
                    </div>
                    <div><?= genHtml($phone_features) ?></div>
                </div>
                <div class="div-<?= $class["battery"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        battery <i class="fas fa-battery-full"></i>
                    </div>
                    <div><?= genHtml($phone_batterys) ?></div>
                </div>
                <div class="div-<?= $class["misc"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        misc <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div><?= genHtml($phone_miscs) ?></div>
                </div>
                <div class="div-<?= $class["test"] ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        test <i class="fas fa-microchip"></i>
                    </div>
                    <div><?= genHtml($phone_tests) ?></div>
                </div>
            </div>
        </div>
    </main>

    <?php $this->load->view('template/footer'); ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
<script>
    $('.mytabs a').on('click', function() {
        var show_div = $(this).attr('attr-href')
        $('.mytabs-nav a').removeClass('py-2 border-b-2 border-orange')
        $(this).addClass('py-2 border-b-2 border-orange')

        $('.mytabs-content div[class^=div-]').hide()
        $('.mytabs-content div[class^=icon-]').removeClass('md:flex')
        $('.mytabs-content .div-' + show_div).fadeIn()

        if (show_div == 'all'){
            $('.mytabs-content div[class^=div-]').fadeIn()
        }
    })
</script>
</html>