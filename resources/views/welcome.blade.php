<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.9.0/devicon.min.css">

</head>
<body style="max-width: 100vw; overflow-x: hidden;">
<section class="box-border relative block w-full py-6 leading-10 text-center text-blue-900 bg-white md:py-8">
    <div class="w-full px-4 mx-auto leading-10 text-center md:px-4 lg:px-6 max-w-7xl">
        <div class="box-border flex flex-col flex-wrap items-center justify-between text-blue-900 md:flex-row">
            <div
                class="relative z-10 flex items-center w-auto px-4 leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                <a href="#"
                   class="box-border inline-block font-sans text-2xl font-bold text-left text-blue-900 no-underline bg-transparent cursor-pointer focus:no-underline">
                    KodeRun
                </a>
            </div>
            <div
                class="relative px-4 mt-2 font-medium leading-10 md:flex-grow-0 md:flex-shrink-0 md:mt-0 md:text-right lg:flex-grow-0 lg:flex-shrink-0">
               @auth
                    <a href="{{route('dashboard')}}"
                       class="box-border inline-block mx-5 text-right text-blue-900 no-underline bg-transparent cursor-pointer hover:text-blue-700 focus:no-underline">
                        Dashboard
                    </a>
                @else
                    <a href="{{route('login')}}"
                       class="box-border inline-block mx-5 text-right text-blue-900 no-underline bg-transparent cursor-pointer hover:text-blue-700 focus:no-underline">
                        Login
                    </a>
                    <a href="{{route('register')}}"
                       class="box-border inline-flex items-center h-10 px-4 text-base text-center text-blue-900 no-underline align-middle bg-transparent border border-gray-300 rounded cursor-pointer select-none hover:bg-gray-50 hover:text-blue-700 focus:shadow-xs focus:no-underline">
                        Daftar
                    </a>
                @endauth
            </div>
        </div>
    </div>
</section>


<section class="relative px-2 py-12 bg-white sm:py-20 md:py-32 md:px-0">
    <div class="relative top-0 left-0 items-center justify-center w-full h-full md:absolute">
        <div class="relative z-20 h-full px-8 mx-auto max-w-7xl xl:px-5">
            <div class="flex flex-wrap items-center h-full sm:-mx-3">
                <div class="w-full pl-10 pr-10 sm:pl-0 md:w-1/2 xl:pr-3">
                    <div
                        class="w-full pb-6 pl-0 space-y-4 sm:pl-10 md:max-w-md lg:max-w-lg md:space-y-5 lg:space-y-6 xl:space-y-7 sm:pr-5 lg:pr-0 md:pb-0">
                        <p class="font-medium tracking-wide text-blue-600 uppercase">Coba banyak bahasa!</p>
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-8xl"
                            id="">Kode On the web.</h1>
                        <p class="mx-auto text-base text-gray-500 lg:leading-9 md:max-w-md lg:text-xl md:max-w-3xl">
                            Jalankan banyak bahasa pemrograman secara online. Tes atau share kodemu secara online tanpa
                            membuka editor di PC mu. sesimpel itu lho!</p>
                        <div
                            class="relative flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:space-x-4 md:pr-10 lg:pr-0">
                            <a href="{{route('register')}}"
                               class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-blue-600 rounded-md sm:mb-0 hover:bg-blue-700 sm:w-auto"
                               id="">Coba Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <!-- intentionally leaving this empty -->
                </div>
            </div>
        </div>
    </div>
    <div class="relative top-0 left-0 z-10 flex items-center w-full h-full py-12">
        <div class="hidden w-1/2 md:block">
            <!-- left side leaving empty so that way the laptop can span full width on the right -->
        </div>
        <div class="w-full -mr-32 2xl:-mr-64 md:w-7/12">
            <img src="{{asset('img/hero/top-splash.png')}}"
                 class="w-full transform scale-110 md:scale-150">
        </div>
    </div>
</section>


<section class="w-full px-8 pt-20 pb-16 bg-white xl:px-0">
    <div class="flex flex-col items-start max-w-6xl mx-auto md:flex-row">
        <h3 class="w-full text-4xl font-extrabold tracking-normal text-gray-900 sm:text-5xl md:text-5xl md:pr-10 lg:pr-16 xl:pr-20 md:leading-none md:-mt-2 md:w-1/2"
            id="">Aku punya cerita, nih...</h3>
        <div class="flex flex-col w-full mt-8 space-y-5 md:w-1/2 md:space-y-10 md:mt-0" id="">
            <p class="col-span-6 text-base font-normal text-gray-700 lg:leading-8 xl:leading-8 md:text-xl">Pernah gak
                sih kamu ditanyain masalah kode oleh teman kalian, lalu kalian malas membuka text editor untuk melihat
                errornya? atau kalian ingin memperlihatkan kode kalian ke publik? mau dikasi live preview, tapi repot
                banget setting servernya?</p>

            <p class="col-span-6 text-base font-normal text-gray-700 lg:leading-8 xl:leading-9 md:text-xl"></p>

        </div>
    </div>
</section>


<section class="py-20 bg-white">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl">KodeRun To The Rescue!</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-700 intro sm:max-w-3xl">Ditujukan kepada
                developer, platform ini memudahkan kita untuk mengetes fitur-fitur bahasa pemrogramanSimak fitur apa aja
                kalau kamu memilih menggunakan KodeRun!</p>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last"><img class="rounded-lg shadow-xl"
                                                                                      src="{{asset('img/hero/run-anywhere.png')}}"
                                                                                      alt="jalankan dimana saja"></div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-blue-600 uppercase">Code on the
                    cloud</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl" id="">Buat kode dan jalankan. Tanpa install
                    apapun.</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Bener, kamu gak perlu install apapun. cukup buka
                    web editor dan langsung ngoding. Bisa langsung di tes di browser! Se simple itu, lho!</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12"><img class="rounded-lg shadow-xl"
                                                                        src="{{asset('img/hero/share.png')}}"
                                                                        alt="bagikan kode"></div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-blue-600 uppercase">Berbagi kode dengan
                    mudah</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl" id="">Bagikan kode dengan mudah</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left" id="">Share dan semua dapat menjalankan kode
                    yang kita bagikan, sehingga "Debugging" atau demonstrasi kode yang kita buat dapat dilakukan dengan
                    mudah. Menarik, bukan!</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last"><img class="rounded-lg shadow-xl"
                                                                                      src="{{asset('img/hero/teamwork.png')}}"
                                                                                      alt="Kerja sama team!"></div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-blue-600 uppercase">Ngoding to the next
                    level</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl" id="">Ber tim? ga masalah</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">kalian bisa buat workspace dan mengundang teman
                    kalian untuk mengedit kode yang sudah kalian buat, jadi kolaborasi sangat mudah. Tersedia juga akses
                    level lho, sangat fleksibel!</p>
            </div>
        </div>

    </div>
</section>


<section class="box-border relative block w-full py-32 overflow-hidden leading-6 text-left" id="">
    <div class="max-w-6xl px-4 px-12 mx-auto leading-6 text-left">
        <div class="box-border flex flex-wrap justify-center text-center text-white lg:justify-start lg:text-left">

            <div
                class="relative flex w-full pb-20 border-b md:w-1/2 md:pb-0 md:pr-8 md:border-b-0 md:border-r border-blue-700"
                id="">
                <img
                    src="https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortRound&accessoriesType=Prescription01&hairColor=BrownDark&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Pale"
                    class="box-border w-12 h-12 text-white align-middle border-none rounded-full">
                <div class="relative w-full px-4 leading-6 text-left" id="">
                    <div class="box-border text-xl text-gray-800" id="">Aplikasinya bagus banget untuk sharing code!
                    </div>
                    <div class="box-border mt-4 font-semibold uppercase text-blue-500 text-lg" id="">WEKA</div>
                </div>
            </div>

            <div class="relative flex w-full pt-20 md:w-1/2 md:pt-0 md:pl-8" id="">
                <img
                    src="https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light"
                    class="box-border w-12 h-12 text-white align-middle border-none rounded-full">
                <div class="relative w-full px-4 leading-6 text-left">
                    <div class="box-border text-xl text-gray-800" id="">Setelah pakai app ini share code gampang banget!
                        Kolaborasinya juga OKE!
                    </div>
                    <div class="box-border mt-4 text-sm font-semibold uppercase text-blue-500 text-lg">Esta</div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="w-full py-16 pb-20 bg-white">
    <div class="container px-8 mx-auto sm:px-12 lg:px-20">
        <h1 class="mb-3 text-3xl font-bold leading-tight text-center text-gray-900 md:text-4xl" id="">Support banyak
            bahasa!</h1>
        <p class="text-lg text-center text-gray-600" id="">...Dan kami akan terus menambahkan bahasa baru!</p>
        <div class="grid grid-cols-2 gap-16 py-16 mb-0 text-center lg:grid-cols-6">
            <div class="flex items-center justify-center">
                <i class="devicon-html5-plain text-gray-400 block object-contain text-5xl"></i>
            </div>
            <div class="flex items-center justify-center">
                <i class="devicon-php-plain text-gray-400 block object-contain text-5xl"></i>
            </div>
            <div class="flex items-center justify-center">
                <i class="devicon-cplusplus-plain text-gray-400 block object-contain text-5xl"></i>
            </div>
            <div class="flex items-center justify-center">
                <i class="devicon-kotlin-plain text-gray-400 block object-contain text-5xl"></i>
            </div>
            <div class="flex items-center justify-center">
                <i class="devicon-java-plain text-gray-400 block object-contain text-5xl"></i>
            </div>
            <div class="flex items-center justify-center">
                <i class="devicon-nodejs-plain text-gray-400 block object-contain text-5xl"></i>
            </div>
        </div>
        <div class="flex items-center justify-center w-full ml-2">
            <a href="https://koderun.rama-adi.dev/dokumentasi/1.0/language" class="flex items-center">
                <span class="border-b-2 border-black">Cek list bahasa</span>
                <svg viewBox="0 0 20 20" fill="currentColor" class="h-4 ml-1">
                    <path fill-rule="evenodd"
                          d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="box-border pt-5 leading-7 text-gray-900 bg-white border-0 border-gray-200 border-solid pb-7">
    <div class="box-border px-4 mx-auto border-solid md:px-6 lg:px-8 max-w-7xl">
        <div
            class="relative flex flex-col items-start justify-between leading-7 text-gray-900 border-0 border-gray-200 md:flex-row md:items-center">
            <a href="#_"
               class="left-0 flex items-center justify-center order-first w-full mb-4 font-medium text-gray-900 md:justify-start md:absolute md:w-64 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center md:mb-0">
                <span class="text-xl font-black leading-none text-gray-900 select-none logo">KodeRun</span>
            </a>
            <ul class="box-border flex mx-auto my-6 space-x-6">
                <li class="relative mt-2 leading-7 text-left text-gray-900 border-0 border-gray-200 md:border-b-0 md:mt-0">
                    <a href="https://instagram.com/its.ramaadi"
                       class="box-border items-center block w-full px-4 text-base font-normal leading-normal text-gray-900 no-underline border-solid cursor-pointer hover:text-blue-600 focus-within:text-blue-700 sm:px-0 sm:text-left">Instagram</a>
                </li>
            </ul>
            <div>
                <p
                    class="box-border mt-0 text-sm border-0 border-solid">
                    &copy; 2021 Rama Adi Nugraha
                </p>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
</body>
</html>
