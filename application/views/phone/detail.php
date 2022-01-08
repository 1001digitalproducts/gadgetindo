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

    $size_phone_networks = count($phone_networks);
    $size_phone_launchs = count($phone_launchs);
    $size_phone_bodys = count($phone_bodys);
    $size_phone_displays = count($phone_displays);
    $size_phone_platforms = count($phone_platforms);
    $size_phone_memorys = count($phone_memorys);
    $size_phone_main_cameras = count($phone_main_cameras);
    $size_phone_front_cameras = count($phone_front_cameras);
    $size_phone_sounds = count($phone_sounds);
    $size_phone_commss = count($phone_commss);
    $size_phone_features = count($phone_features);
    $size_phone_batterys = count($phone_batterys);
    $size_phone_miscs = count($phone_miscs);
    $size_phone_tests = count($phone_tests);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Detail Phone <?= $phone_info[0]->name ?>" />
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
    <title>GadgetIndo - Detail Phone <?= $phone_info[0]->name ?></title>
    <link rel="icon" type="png" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-72.png">
    <link rel="manifest" href="<?= base_url() ?>manifest.json">

    <script>
        var base_url = "<?= base_url() ?>"
    </script>

    <link href="<?= base_url() ?>assets/css/output.min.css" type="text/css" rel="stylesheet" />
    <!-- <link href="<?= base_url() ?>ui/assets/css/output-back.css" type="text/css" rel="stylesheet" /> -->
    <link rel="preload" href="<?= base_url() ?>assets/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" as="style" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" onload="this.onload=null;this.rel='stylesheet'">
    <script src="<?= base_url() ?>assets/js/darkmode.js" async></script>
</head>
<body class="bg-background-default dark:bg-gray-800 text-gray-700 dark:text-gray-300">
    <?php $this->load->view('template/header'); ?>

    <main class="px-4 md:px-52 py-6">
        <div class="title grid grid-cols-1 md:grid-cols-2 text-xs md:text-base">
            <div class="flex items-center justify-center md:justify-start gap-x-6 md:gap-x-8">
                <div class="uppercase font-bold text-base md:text-lg"><?= $phone_info[0]->brand_name ?></div>
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
                    <img class="lazyload rounded-xl bg-white" style="width: 184px; height: 244px;" data-src="<?= $phone_info[0]->image_url ?>" alt="">
                </div>
                <div class="border-2 p-2 rounded border-primary dark:border-orange text-primary dark:text-orange bg-blue-100 dark:bg-gray-900 md:col-span-2 text-xs md:text-lg">
                    <div class="div-released <?= empty($additional_info->release) ? "hidden" : "" ?>">
                        <i class="far fa-calendar mr-2"></i><?= $additional_info->release ?>
                    </div>
                    <div class="div-weight">
                        <i class="fas fa-mobile-alt mr-2"></i>183g, 6.9mm thickness
                    </div>
                    <div class="div-operating-system <?= empty($additional_info->os) ? "hidden" : "" ?> ">
                        <i class="fas fa-angle-left"></i><i class="fas fa-angle-right mr-2"></i><?= $additional_info->os ?>
                    </div>
                    <div class="div-memory <?= empty($additional_info->memory) ? "hidden" : "" ?> ">
                        <i class="fas fa-microchip mr-2"></i><?= $additional_info->memory ?>
                    </div>
                    <div class="div-dimension font-bold <?= empty($additional_info->display) ? "hidden" : "" ?> ">
                        <i class="far fa-square mr-2"></i><?= $additional_info->display ?>
                    </div>
                    <div class="div-camera font-bold <?= empty($additional_info->main_camera) ? "hidden" : "" ?> ">
                        <i class="far fa-circle mr-2"></i><?= $additional_info->main_camera ?>
                    </div>
                    <!-- <div class="div-ram font-bold">
                        <i class="fas fa-microchip mr-2"></i>8GB RAM, Snapdragon 888 5G
                    </div> -->
                    <div class="div-battery font-bold <?= empty($additional_info->battery) ? "hidden" : "" ?> ">
                        <i class="fas fa-battery-full mr-2"></i><?= $additional_info->battery ?>
                    </div>
                </div>
            </div>
            <div class="flex items-center text-xs md:text-base my-8 gap-x-4 md:gap-x-8 p-4 uppercase overflow-auto whitespace-nowrap mytabs mytabs-nav">
                <div><a href="javascript:;" attr-href="all" class="py-2 border-b-2 border-orange">all</a></div>
                <div class="<?= $size_phone_networks == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["network"] ?>">network</a></div>
                <div class="<?= $size_phone_launchs == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["launch"] ?>">launch</a></div>
                <div class="<?= $size_phone_bodys == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["body"] ?>">body</a></div>
                <div class="<?= $size_phone_displays == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["display"] ?>">display</a></div>
                <div class="<?= $size_phone_platforms == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["platform"] ?>">platform</a></div>
                <div class="<?= $size_phone_memorys == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["memory"] ?>">memory</a></div>
                <div class="<?= $size_phone_main_cameras == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["main_camera"] ?>">main camera</a></div>
                <div class="<?= $size_phone_front_cameras == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["front_camera"] ?>">selfie camera</a></div>
                <div class="<?= $size_phone_sounds == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["sound"] ?>">sound</a></div>
                <div class="<?= $size_phone_commss == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["comms"] ?>">comms</a></div>
                <div class="<?= $size_phone_features == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["feature"] ?>">features</a></div>
                <div class="<?= $size_phone_batterys == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["battery"] ?>">battery</a></div>
                <div class="<?= $size_phone_miscs == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["misc"] ?>">misc</a></div>
                <div class="<?= $size_phone_tests == 0 ? "hidden" : "" ?>"><a href="javascript:;" attr-href="<?= $class["test"] ?>">tests</a></div>
            </div>
            <div class="mt-4 grid grid-cols-1 gap-4 mytabs-content">
                <div class="div-<?= $class["network"] ?> <?= $size_phone_networks == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        network <i class="fas fa-wifi"></i>
                    </div>
                    <div><?= genHtml($phone_networks) ?></div>
                </div>
                <div class="div-<?= $class["launch"] ?> <?= $size_phone_launchs == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        launch <i class="fas fa-rocket"></i>
                    </div>
                    <div><?= genHtml($phone_launchs) ?></div>
                </div>
                <div class="div-<?= $class["body"] ?> <?= $size_phone_bodys == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        body <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div><?= genHtml($phone_bodys) ?></div>
                </div>
                <div class="div-<?= $class["display"] ?> <?= $size_phone_displays == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        display <i class="fas fa-square"></i>
                    </div>
                    <div><?= genHtml($phone_displays) ?></div>
                </div>
                <div class="div-<?= $class["platform"] ?> <?= $size_phone_platforms == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        platform <i class="fas fa-angle-left"></i><i class="fas fa-angle-right"></i>
                    </div>
                    <div><?= genHtml($phone_platforms) ?></div>
                </div>
                <div class="div-<?= $class["memory"] ?> <?= $size_phone_memorys == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        memory <i class="fas fa-microchip"></i>
                    </div>
                    <div><?= genHtml($phone_memorys) ?></div>
                </div>
                <div class="div-<?= $class["main_camera"] ?> <?= $size_phone_main_cameras == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        main camera <i class="far fa-circle"></i>
                    </div>
                    <div><?= genHtml($phone_main_cameras) ?></div>
                </div>
                <div class="div-<?= $class["front_camera"] ?> <?= $size_phone_front_cameras == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        front camera <i class="far fa-circle"></i>
                    </div>
                    <div><?= genHtml($phone_front_cameras) ?></div>
                </div>
                <div class="div-<?= $class["sound"] ?> <?= $size_phone_sounds == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        sound <i class="fas fa-volume-up"></i>
                    </div>
                    <div><?= genHtml($phone_sounds) ?></div>
                </div>
                <div class="div-<?= $class["comms"] ?> <?= $size_phone_commss == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        comms <i class="fab fa-creative-commons-share"></i>
                    </div>
                    <div><?= genHtml($phone_commss) ?></div>
                </div>
                <div class="div-<?= $class["feature"] ?> <?= $size_phone_features == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        feature <i class="fas fa-asterisk"></i>
                    </div>
                    <div><?= genHtml($phone_features) ?></div>
                </div>
                <div class="div-<?= $class["battery"] ?> <?= $size_phone_batterys == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        battery <i class="fas fa-battery-full"></i>
                    </div>
                    <div><?= genHtml($phone_batterys) ?></div>
                </div>
                <div class="div-<?= $class["misc"] ?> <?= $size_phone_miscs == 0 ? "hidden" : "" ?>">
                    <div class="uppercase font-bold text-orange border-b-2 border-orange">
                        misc <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div><?= genHtml($phone_miscs) ?></div>
                </div>
                <div class="div-<?= $class["test"] ?> <?= $size_phone_tests == 0 ? "hidden" : "" ?>">
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