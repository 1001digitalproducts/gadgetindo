document.addEventListener('DOMContentLoaded', init, false);

function init() {
    if ('serviceWorker' in navigator && navigator.onLine) {
        navigator.serviceWorker.register(base_url + 'service-worker.js')
        .then((reg) => {
            console.log('Success Run Worker');
        }, (err) => {
            console.error('Failed Run Worker', err);
        });
    }
}

function dark(on_load){
    var theme = localStorage.theme
    if (on_load){
        if (theme == 'dark'){
            document.documentElement.classList.add('dark')
        }
        return 
    }
    
    if (theme == 'dark'){
        localStorage.theme = 'light'
        document.documentElement.classList.remove('dark')
    } else {
        document.documentElement.classList.add('dark')
        localStorage.theme = 'dark'
    }
}

function topFunc() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

dark(true)