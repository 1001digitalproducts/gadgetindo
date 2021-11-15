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

dark(true)