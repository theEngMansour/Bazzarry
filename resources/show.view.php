<?php require 'resources/app.view.php';?>

<div class="bg-gray-200 px-5 pb-5 pt-5">
    <div class="py-3 px-5 bg-white rounded shadow-xl">
        <div class="-mx-1">
            <ul class="flex w-full flex-wrap items-center h-30 justify-center border-b-2">
                <img class="m-4" src="https://i.suar.me/oK4de" width="50"  alt="" srcset="">
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="<?= home()?>" class="flex bg-green-300 items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 text-white">
                        <span>الرئيسية</span>
                    </a>
                </li>
            </ul>
            <ul style="background-color: #4643d2;" class="flex w-full flex-wrap pb-3 text-white items-center justify-center border-b-2 text-4xl h-14">
                تفاصيل المنتج
            </ul>
        </div>
        <?php foreach($project as $project) : ?>
        <main class="my-8">
            <div class="container mx-auto px-6">
                <div class="md:flex md:items-center">
                    <div class="w-full h-64 md:w-1/2 lg:h-96">
                        <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="<?= $project->cover_image ?>" alt="">
                    </div>
                    <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                        <h3 class="text-gray-700 uppercase text-lg"><?= $project->title ?></h3>
                        <span class="text-gray-500 mt-3"><?= $project->price ?></span>
                        <hr class="my-3">
                        <div class="mt-2">
                            <label class="text-gray-700 text-sm" for="count">وصف المنتج : </label>
                            <div class="flex items-center mt-1">
                                <p><?= $project->descr ?></p>
                            </div>
                            <label class="text-green-700 text-sm" for="count">تصنبف المنتج : </label>
                            <div class="flex items-center mt-1">
                              <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs"><?= $project->category_id == 1 ? 'phone' : 'computer' ?> </span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="text-gray-700 text-sm" for="count">الإلون المتوفرة :</label>
                            <div class="flex items-center mt-2">
                                <button class="h-5 w-5 rounded-full bg-<?=$project->color?>-600 border-2 border-blue-200 mr-2 focus:outline-none"></button>
                            </div>
                        </div>
                        <label class="text-gray-700 text-sm" for="count">الحجم :</label>
                        <div class="flex items-center mt-1">
                              <span style="background-color: #4643d2;" class="text-white py-1 px-3 text-xs"><?= $project->size ?> </span>
                            </div>
                        <div class="flex items-center mt-6">
                            <a href="#btn">
                                <button style="background-color: #4643d2;" class="px-8 py-2 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">شراء</button>
                            </a>
                            <button class="mx-2 text-gray-600 border rounded-md p-2 hover:bg-gray-200 focus:outline-none">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Form -->
        <div id="btn">
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 w-2/4 m-auto mt-20">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                    <p style="color: #4643d2;" class="text-2xl mb-1">البيانات</p>
                    <p>فضلاً يرجى تعبئة البيانات المطلوبة بشكل صحيح</p>
                </div>
                
                <div class="lg:col-span-2">      
                    <form action="send" method="POST">
                        <div class="md:col-span-5">
                            <label for="full_name">الإسم الكامل</label>
                            <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required />
                        </div>

                        <input type="hidden" name="user_id" value="2">
                        <input type="hidden" name="category_id" value="<?= $project->category_id ?>">
                        <input type="hidden" name="project_id" value="<?= $project->id ?>">

                        <div class="md:col-span-5">
                            <label for="number">رقم الهاتف</label>
                            <input type="text" name="number" id="number" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="على سبيل المثال : +967 770000000" required/>
                        </div>

                        <div class="md:col-span-3">
                            <label for="address">العنوان / الشارع</label>
                            <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="مثال : إتماء /المرحلة العاشرة " required/>
                        </div>

                        <div class="md:col-span-2">
                            <label for="city">المدينة</label>
                            <input type="text" name="city" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="مثال : عدن"  required/>
                        </div>
                        <div class="md:col-span-2">
                            <label for="quen">الكمية</label>
                            <input type="text" name="quantity" id="quen" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="مثال : 2" required/>
                        </div>
                        <div class="md:col-span-5 text-right">
                            <div class="inline-flex items-end my-5">
                               <button style="background-color: #4643d2;" class="hover:bg-blue-700 text-white py-2 px-4 rounded">متابعة عملية الشراء</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Form -->
        <?php endforeach;?>
    </div>
</div>


