<?php require 'resources/app.view.php';?>
<header>
    <div class="bg-gray-200 px-5 pb-5 pt-5">
        <div class="py-3 px-5 bg-white rounded shadow-xl">
            <div class="-mx-1">
                <ul class="flex w-full flex-wrap items-center h-10">
                   <img class="mr-4" src="https://i.suar.me/oK4de" width="20"  alt="" srcset="">
                    <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" >
                            <span class="text-xl">بازاري | Bazzarry</span>
                        </a>
                    </li>
                    <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="<?= home() .'/admin'?>" style="background-color: #4643d2;" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 text-white">
                            <span>إدارة الموقع</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div dir="rtl" class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
                <div class="w-full lg:w-60 lg:max-w-lg md:w-1/2">
                    <img class="object-cover object-center rounded-lg" alt="hero" src="https://i.suar.me/oK4de">
                </div>
                <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
                    <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">bazzarry.com</h2>
                    <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font">مؤسسة بازاري</h1>
                    <p class="mb-8 text-base leading-relaxed text-right text-blueGray-600 ">تسوق عبر الانترنت واشتري منتجات من ماركات تجارية مميزة - اطلب من موقع تسوق بازاري اون لاين اليوم - توصيل سريع الي</p>
                    <div class="flex flex-col justify-center lg:flex-row">
                        <a href="#down">
                            <button style="background-color: #4643d2;" class="flex items-center px-6 py-2 mt-auto text-white transition duration-500 ease-in-out transform rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">تسوق الآن</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



