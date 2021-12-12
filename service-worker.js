const CACHE_NAME = 'CACHE-GI';
const toCache = [
    './',
    './ui/home.html',
    './manifest.json',
    './assets/css/output.min.css',
    './assets/css/custom.css',
    './assets/js/darkmode.js',
    './assets/image/icon/mobile-alt-regular-72.png',
    './assets/image/icon/mobile-alt-regular-96.png',
    './assets/image/icon/mobile-alt-regular-132.png',
    './assets/image/icon/mobile-alt-regular-144.png',
    './assets/image/icon/mobile-alt-regular-156.png',
    './assets/image/icon/mobile-alt-regular-192.png',
    './assets/image/icon/mobile-alt-regular-240.png',
];

self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(CACHE_NAME)
        .then(function(cache) {
            return cache.addAll(toCache)
        }).then(self.skipWaiting())
    )
})

// self.addEventListener('fetch', function(event) {
//     event.respondWith(
//         fetch(event.request)
//         .catch(() => {
//             return caches.open(CACHE_NAME)
//             .then((cache) => {
//                 return cache.match(event.request)
//             })
//         })
//     )
// })

self.addEventListener("fetch", event => {
    if (event.request.url === "https://alpha.gadgetindo.com/") {
        // or whatever your app's URL is
        event.respondWith(
            fetch(event.request).catch(err =>
                // self.cache.open(CACHE_NAME).then(cache => cache.match("./ui/home.html"))
                caches.open(CACHE_NAME).then(cache => cache.match("./ui/home.html"))
            )
        );
    } else {
        event.respondWith(
            fetch(event.request).catch(err =>
                caches.match(event.request).then(response => response)
            )
        );
    }
});

self.addEventListener('activate', function(event) {
    event.waitUntil(
        caches.keys()
        .then((keyList) => {
            return Promise.all(keyList.map((key) => {
                if (key !== CACHE_NAME) {
                    console.log('Hapus cache lama', key)
                    return caches.delete(key)
                }
            }))
        })
        .then(() => self.clients.claim())
    )
})