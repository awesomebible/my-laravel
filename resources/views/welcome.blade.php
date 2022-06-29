<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <header class="w-full px-6 mb-12 antialiased bg-white dark:bg-slate-800 select-none">
    <div class="mx-auto max-w-7xl">
        <HomeNavbar />
        <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center" id="">
            <h1 class="text-5xl font-extrabold tracking-tight text-left text-gray-900 dark:text-gray-200 leading-tightest md:leading-10 md:text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block" id="">Die Bibel ist ein Buch...</span> <span class="relative mt-2 text-transparent md:inline-block bg-clip-text bg-gradient-to-br from-purple-600 to-blue-500" id="">tu was damit!</span></h1>
            <div class="mx-auto mt-5 text-gray-500 dark:text-gray-300 md:mt-12 md:max-w-lg md:text-center lg:text-lg" id="">Wir haben my.awesomeBible gebaut, damit du die Bibel auf deinem Level erleben kannst.</div>
            <div class="flex flex-col items-center mt-12 text-center">
                <span class="relative inline-flex w-full rounded-full shadow-sm md:w-auto">
                    <a type="button" href="/#pricing" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700" id="">Worauf wartest du?</a>
                </span>
            </div>
        </div>
    </div>
</header>
<section class="py-20 bg-white dark:bg-slate-800" id="">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center dark:text-white" id="features">Was wir drauf haben...</h2>
        <p class="mt-2 text-lg text-center text-gray-700 dark:text-gray-300" id="">Eine Zusammenfassung von den wichtigsten Funktionen die my.awesomeBible bietet:</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0" id="">

            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl bg-gradient-to-br from-purple-200 to-blue-200" id="">
                <div class="p-3 text-white bg-blue-500 rounded-full" id="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-black">Lies!</h4>
                <p class="text-base text-center text-gray-700">Lies die Bibel so wie <b>du</b> möchtest: Lightmode, Darkmode, Comic Sans - alles ist dir überlassen.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl bg-gradient-to-br from-red-200 to-orange-200">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-black" id="">Merke!</h4>
                <p class="text-base text-center text-gray-700" id="">Merke dir Verse, damit du nie wieder Gottes Botschaft an dich vergisst.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl bg-gradient-to-br from-green-200 to-blue-200">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-black" id="">Teile</h4>
                <p class="text-base text-center text-gray-700" id="">Wir haben es dir einfach gemacht, deine Gedanken mit anderen zu teilen.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl bg-gradient-to-br from-pink-200 to-purple-200" id="">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </div>
                <h4 class="text-xl font-medium text-black" id="">Unabhängig</h4>
                <p class="text-base text-center text-gray-700" id="">
                    my.awesomeBible gehört keiner großen Firma, und finanziert sich komplett von selbst.
                    Wir müssen uns nicht anpassen, wir können auf unsere <a href="https://matrix.to/#/#awesomebible:matrix.org" class="text-base text-center text-gray-700 hover:text-blue-600 underline decoration-blue-500 decoration-2 hover:decoration-wavy">Community</a> hören.
                    Wir können unsere Vision ausleben.
                </p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl bg-gradient-to-br from-green-200 to-green-500">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-black" id="">Datenschutz ist uns wichtig.</h4>
                <p class="text-base text-center text-gray-700">Unsere Server stehen in Deutschland. 
                    Wir werden deine Daten nie an irgendeine Firma verkaufen, und du kannst sie jederzeit exportieren.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl bg-gradient-to-br from-yellow-200 to-yellow-500">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-black" id="">Quelloffen</h4>
                <p class="text-base text-center text-gray-700" id="">my.awesomeBible ist komplett Quelloffen. Das bedeutet, dass jeder Sicherheitslücken im Code finden und neue Features hinzufügen kann.</p>
                <a class="text-base text-center text-gray-700 hover:text-blue-600 underline decoration-blue-500 decoration-2 hover:decoration-wavy" href="https://codeberg.org/awesomebible/my-frontend"> -> Codeberg </a>
            </div>
        </div>
    </div>
</section>
<section class="relative py-16 bg-white dark:bg-slate-800 min-w-screen animation-fade animation-delay">
    <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
        <p class="text-xs font-bold text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
            Hast du Fragen? Wir haben Antworten!</p>
        <h3 class="mt-1 text-2xl font-bold text-left text-gray-800 dark:text-gray-200 sm:mx-6 sm:text-3xl md:text-4xl lg:text-5xl sm:text-center sm:mx-0">
            Hier einiges, was du dich Fragen könntest:</h3>

        <div
            class="w-full px-6 py-6 mx-auto mt-10 bg-white dark:bg-blue-900 border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold text-purple-500 dark:text-purple-200 sm:text-xl md:text-2xl">Wo liegen meine Daten?</h3>
            <p class="mt-2 text-base text-gray-600 dark:text-gray-200 sm:text-lg md:text-normal">Deine Daten liegen in Deutschland, das ist uns wichtig, weil Deutschland starke Datenschutz-Gesetze hat.
                Um noch ein Stück genauer zu werden: Deine Daten liegen auf einem Server von der <a href="https://manitu.de" class="hover:text-violet-600 underline decoration-violet-500 decoration-2 hover:decoration-wavy">manitu GmbH</a> in <a href="https://www.openstreetmap.org/node/6538846006" class="hover:text-violet-600 underline decoration-violet-500 decoration-2 hover:decoration-wavy">St. Wedel</a>.
            </p>
        </div>
        <div
            class="w-full px-6 py-6 mx-auto mt-10 bg-white dark:bg-blue-900 border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold text-purple-500 dark:text-purple-200 sm:text-xl md:text-2xl">Wie finanziert ihr euch?</h3>
            <p class="mt-2 text-base text-gray-600 dark:text-gray-200 sm:text-lg md:text-normal">Wir finanzieren uns aktuell ausschließlich aus eigenem Geld, diese Entscheidung haben wir getroffen, weil wir eine <span class="font-bold">wirklich</span> kostenlose und offene Bibelapp bauen wollen. <br>
            Mehr über Geld, und wie es weiter geht findest du <a class="hover:text-violet-600 underline decoration-violet-500 decoration-2 hover:decoration-wavy" href="https://awesomebible.codeberg.page/post/vision/">hier</a>. </p>
        </div>
        <div
            class="w-full px-6 py-6 mx-auto mt-10 bg-white dark:bg-blue-900 border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold text-purple-500 dark:text-purple-200 sm:text-xl md:text-2xl">Ist my.awesomeBible unsicher weil der Quellcode offen liegt?</h3>
            <p class="mt-2 text-base text-gray-600 dark:text-gray-200 sm:text-lg md:text-normal">Nein. Das ist ein Mythos - sogar das Gegenteil ist der Fall. Wäre der Quellcode nicht offen, dann wäre allein ich für die Sicherheit verantwortlich. 
                Da er aber open-source ist, kann jeder Fehler finden und ausnutzen - aber genau so gut können sie gemeldet und gefixt werden.</p>
        </div>
        <div
            class="w-full px-6 py-6 mx-auto mt-10 bg-white dark:bg-blue-900 border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold text-purple-500 dark:text-purple-200 sm:text-xl md:text-2xl">Wer steht hinter my.awesomeBible und awesomeBible?</h3>
            <p class="mt-2 text-base text-gray-600 dark:text-gray-200 sm:text-lg md:text-normal">Hi. 👋 Ich bin Benjamin Hartmann!
                Meine Hobbys sind <a href="https://awesomebible.de" class="hover:text-violet-600 underline decoration-violet-500 decoration-2 hover:decoration-wavy">Texte schreiben</a>, <a href="https://codeberg.org/awesomebible" class="hover:text-violet-600 underline decoration-violet-500 decoration-2 hover:decoration-wavy">programmieren</a> und in der Natur rumlungern. 
                Ich habe my.awesomeBible gebaut, weil ich keine Bibelapp gefunden habe, die die Features hat, die ich brauche - und jetzt bin ich hier. Der Weg mit Gott ist ein richtiges Abenteuer - und ich möchte, dass auch andere davon erfahren.</p>
        </div>
        <div id="contact"
        class="w-full px-6 py-6 mx-auto mt-10 bg-white dark:bg-blue-900 border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
        <h3 class="text-lg font-bold text-purple-500 dark:text-purple-200 sm:text-xl md:text-2xl">Noch mehr Fragen?</h3>
        <p class="mt-2 text-base text-gray-600 dark:text-gray-200 sm:text-lg md:text-normal">Schreib uns! Wir sind per E-Mail erreichbar: 
            <a href="mailto:hi@awesomebible.de" class="hover:text-violet-600 underline decoration-violet-500 decoration-2 hover:decoration-wavy">hi@awesomebible.de</a> oder tritt unserem <a href="https://matrix.to/#/#awesomebible:matrix.org" class="hover:text-violet-600 underline decoration-violet-500 decoration-2 hover:decoration-wavy">Matrix Space</a> bei. 
            Wir antworten dir gerne! 😀
            </p>
    </div>
    </div>
</section>  
<section class="py-8 leading-7 text-gray-900 bg-white dark:bg-slate-800 sm:py-12 md:py-16 lg:py-24" id="pricing">
    <div class="box-border px-4 mx-auto border-solid sm:px-6 md:px-6 lg:px-8 max-w-7xl">
        <div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">
            <h2 class="box-border m-0 text-3xl font-semibold leading-tight tracking-tight text-black dark:text-gray-200 border-solid sm:text-4xl md:text-5xl" id="">Wir geben nicht viel auf komplizierte Preise.</h2>
            <p class="box-border mt-2 text-xl text-gray-900 dark:text-gray-300 border-solid sm:text-2xl" id="">my.awesomeBible ist kostenlos und wird es auch immer bleiben.</p>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-4 leading-7 text-gray-900 border-0 border-gray-200 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0">
            
            <!-- Price 1 -->
            <div class="box-border flex flex-col items-center max-w-md p-4 mx-auto my-0 border-4 border-blue-600 border-solid rounded-md sm:p-6 md:px-8 md:py-16">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black dark:text-gray-200 border-0 border-gray-200 sm:text-3xl md:text-4xl" id="">Kostenlos</h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl dark:text-gray-300 font-semibold leading-none border-solid" id="">€0</p>
                    <p class="box-border m-0 border-solid dark:text-gray-300" style="border-image: initial;">
                        / Monat
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 dark:text-gray-300 border-0 border-gray-200" id="">Für alle. Wir sind offen und dankbar für neue Nutzer!</p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center w-full mb-2 ml-5 font-semibold dark:text-gray-300 text-left border-solid" id="">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        alle Features
                    </li>
                    <li class="inline-flex items-center w-full mb-2 ml-5 font-semibold dark:text-gray-300 text-left border-solid" id="">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <img src="/images/infinity.svg" alt="Unendlich" class="w-5 h-5 mr-2 leading-7 sm:h-5 sm:w-5 md:h-6 md:w-6"> viele Notizen
                    </li>
                    <li class="inline-flex items-center w-full mb-2 ml-5 font-semibold dark:text-gray-300 text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <img src="/images/infinity.svg" alt="Unendlich" class="w-5 h-5 mr-2 leading-7 sm:h-5 sm:w-5 md:h-6 md:w-6"> viele Markierungen
                    </li>
                    <li class="inline-flex items-center w-full mb-2 ml-5 font-semibold dark:text-gray-300 text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        alle Bibelübersetzungen
                    </li>
                </ul>
                <Link as="button" href="/login" class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-white no-underline bg-blue-600 border rounded cursor-pointer hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white sm:text-base md:text-lg">
                    Los geht's!
                </router-link>
            </div>
        </div>
    </div>
</section>
<section class="w-full px-8 py-16 bg-gray-100 dark:bg-slate-800 xl:px-8" id="get-started">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center md:flex-row">

            <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                <p class="font-medium text-blue-500 uppercase" id=""></p>
                <h2 class="text-2xl font-extrabold leading-none text-black dark:text-gray-200 sm:text-3xl md:text-5xl" id="">Fang jetzt dein Abenteuer mit der Bibel an!</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 md:pr-16" id="">Wir wünschen dir einen schönen Aufenthalt! 🥰</p>
            </div>
        <form class="w-full mt-16 md:mt-0 md:w-2/5">
            <div>
                <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7" id="">
                    <h3 class="mb-6 text-2xl font-medium text-center" id="">Öffne das Buch...</h3>
                    <div class="block mb-4 border border-gray-200 rounded-lg">
                        <input disabled type="text" name="email" id="" class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none" placeholder="E-Mail Adresse">
                    </div>
                    <div class="block mb-4 border border-gray-200 rounded-lg">
                        <input disabled type="password" name="password" id="" class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Passwort">
                    </div>
                    <div class="block">
                        <button disabled class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Wir nehmen im Moment leider noch keine Registrierungen an.</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</section>
    </body>
</html>
