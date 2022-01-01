<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="List Phone by Brands GadgetIndo" />
    <meta name="mobile-wep-app-capable" content="yes">
    <!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
    <meta name="theme-color" content="11325B" />
    <!-- Mendeklarasikan ikon untuk iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="List Phone by Brands GadgetIndo" />
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
    <title>GadgetIndo - List Phone by Brands</title>
    <link rel="icon" type="png" href="<?= base_url() ?>assets/image/icon/mobile-alt-regular-72.png">
    <link rel="manifest" href="<?= base_url() ?>manifest.json">

    <script>
        var base_url = "<?= base_url() ?>"
    </script>
    
    <link href="<?= base_url() ?>assets/css/output.min.css" type="text/css" rel="stylesheet" />
    <!-- <link href="<?= base_url() ?>ui/assets/css/output-back.css" type="text/css" rel="stylesheet" /> -->
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
    
    <main class="mt-8">
        <div class="container-list w-full -mt-1/3 px-6 md:px-12 mb-16">
            <div class="w-full">
                <input type="text" class="q-search p-2 bg-transparent outline-none font-bold text-lg border-b-2 border-gray-300 dark:border-gray-700 transition-colors focus:border-orange duration-500 w-full" value="" placeholder="Cari Gadget">
            </div>
            <div class="py-6 w-full">
                <div class="list grid grid-cols-2 md:grid-cols-5 gap-x-4 mt-4"></div>
                <div></div>
                <div class="div-pagination flex items-center md:justify-start justify-center z-10">
                    <nav>
                        <ul class="inline-flex space-x-2"></ul>
                    </nav>
                    <div class="ml-4 total-pages"></div>
                </div>
            </div>
        </div>
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
    var page = 1
    var limit = 10
    var cnt = 3

    $(function(){

        function genPagination(total){
            var html = ''
            var last = Math.ceil(total/limit)
            var others = '<li><button class="w-10 h-10 rounded-full focus:shadow-outline">...</button></li>'

            page = parseInt(page)

            var prev = page > 1 ? page - 1 : 0
            var curr = page
            var next = page < last ? page + 1 : 0

            var html_prevpage = prev != 0 ? '<li><button data-page="'+prev+'" class="page w-10 h-10 rounded-full focus:shadow-outline hover:bg-gray-200 dark:hover:bg-gray-900 dark:text-orange">' + prev + '</button></li>' : ''
            var html_currpage = '<li><button class="w-10 h-10 text-white bg-orange rounded-full focus:shadow-outline">' + curr + '</button></li>'
            var html_nextpage = next != 0 ? '<li><button data-page="'+next+'" class="page w-10 h-10 rounded-full focus:shadow-outline hover:bg-gray-200 dark:hover:bg-gray-900 dark:text-orange">' + next + '</button></li>' : ''

            var html_prev = ''
            var html_next = ''

            if (curr == 1){
                html_nextpage += '<li><button data-page="'+(curr+2)+'" class="page w-10 h-10 rounded-full focus:shadow-outline hover:bg-gray-200 dark:hover:bg-gray-900 dark:text-orange">' + (curr+2) + '</button></li>'
            } 
            
            if (curr == last) {
                html_prevpage = '<li><button data-page="'+(curr-2)+'" class="page w-10 h-10 rounded-full focus:shadow-outline hover:bg-gray-200 dark:hover:bg-gray-900 dark:text-orange">' + (curr-2) + '</button></li>' + html_prevpage
            }

            html_prev = `
                <li>
                    <button class="prev-page flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 ` + (curr != 1 ? 'focus:shadow-outline hover:bg-gray-200 dark:hover:bg-gray-900' : '' ) + `" `+(curr == 1 ? 'disabled' : '')+` >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 dark:fill-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </li>`
            
            html_next = `
                <li>
                    <button class="next-page flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 ` + (curr != last ? 'focus:shadow-outline hover:bg-gray-200 dark:hover:bg-gray-900' : '' ) + `" `+(curr == last ? 'disabled' : '')+` >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 dark:fill-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </li>`
            
            html = `
                <li>
                    <button class="first-page flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 focus:shadow-outline hover:bg-gray-200 dark:hover:bg-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 dark:fill-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                        </svg>
                    </button>
                </li>
                ${html_prev} 
                ${html_prevpage} 
                ${html_currpage} 
                ${html_nextpage} 
                ${html_next}
                <li>
                    <button class="last-page flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 focus:shadow-outline hover:bg-gray-200 dark:hover:bg-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 dark:fill-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </li>
            `
            
            $('.div-pagination nav ul').empty().html(html)
            $('.total-pages').html(last + " pages")

            $('.next-page').on('click', () => {
                page++
                getData()
            })

            $('.prev-page').on('click', () => {
                page--
                getData()
            })

            $('.first-page').on('click', () => {
                page = 1
                getData()
            })

            $('.last-page').on('click', () => {
                page = last
                getData()
            })

            $('.page').on('click', function () {
                var tmp = $(this).attr('data-page')
                page = tmp
                getData()
            })
        }

        function getData(){
            var url = '<?= base_api() . (!empty($brand_id) ? "brands/$brand_id/phones" : "phones/search" ) ?>'
            $.post(url, { page: page, limit: limit, <?php if (empty($brand_id)) { ?> search: '<?= $search ?>' <?php } ?> },
            (res) => {
                var html = ''
                var cnt = 0
                res.data.forEach((e, idx) => {
                    html += `
                        <div class="flex flex-col my-4 bg-white dark:bg-gray-700 p-4 rounded-lg shadow-lg" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="${cnt}">
                            <a class="order-1 md:order-2" href="<?= base_url() ?>phone/${e.id}">
                                <img class="lazyload rounded-xl mx-auto pb-4" style="width: 160xp; height: 212px;" data-src="${e.image_url}" alt="${e.name}">
                            </a>
                            <a class="order-2 md:order-1 my-2 text-center text-xs md:text-base w-full" href="<?= base_url() ?>phone/${e.id}">${e.name.toUpperCase()}</a>
                            <div class="order-last mx-2 mt-4 md:mt-0 mx-auto">
                                <a class="text-xs" href="<?= base_url() ?>phone/${e.id}">View Detail</a>
                                <span class="px-2">|</span>
                                <a class="text-xs" href="<?= base_url() ?>phone/${e.id}">Share</a>
                            </div>
                        </div>
                    `
                    cnt += 100
                })

                $('.container-list .list').html(html)
                genPagination(res.total)
            })
        }

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

        getData()
    })
</script>
</html>