<?php require 'resources/app.view.php';?>

<div id="currnt" class="bg-gray-200 px-5 pb-8 pt-5 h-full">
    <div class="py-6 px-5 bg-white shadow-xl mt-4">
        <div class="-mx-1">
            <ul class="flex w-full flex-wrap items-center h-10">
                <img class="mr-4" src="https://i.suar.me/oK4de" width="30"  alt="" srcset="">
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                        <span class="mr-3 text-2xl"> <i class="mdi mdi-layers-outline"></i> </span>
                        <span class="text-2xl">لوحة التحكم</span>
                        <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=" flex bg-white">
        <aside class="flex flex-col items-center  text-gray-700 h-full">
            <ul>
                <li class="hover:bg-gray-100">
                    <a
                        href="#currnt"
                        class="h-16 px-6 flex flex justify-center items-center w-full
                        focus:text-orange-500">
                        <svg
                            class="h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path
                                d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0
                                2-1.61L23 6H6"></path>
                        </svg>
                    </a>
                </li>
                <li class="hover:bg-gray-100">
                    <a
                        href="#btn"
                        class="h-16 px-6 flex flex justify-center items-center w-full
                        focus:text-orange-500">
                        <svg
                            class="h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline
                                points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                            <path
                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0
                                2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0
                                0-1.79 1.11z"></path>
                        </svg>
                    </a>
                </li>
            </ul>      
        </aside>
        <div class="bg-white w-full">
            <table class="table-auto w-full">
                <thead>
                    <tr class="text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-right">المنتجات</th>
                        <th class="py-3 px-6 text-center">التصنيف</th>
                        <th class="py-3 px-6 text-center">العمليات</th>
                    </tr>
                </thead>
                <?php foreach($projects as $project) : ?>
                    <tbody class="text-gray-600 text-sm font-light ">
                        <tr class=" border-gray-200  hover:bg-gray-100"> 
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span class="font-medium"><?= $project->title ?></span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs"><?= $project->category_id == 1 ? 'phone' : 'computer' ?> </span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="show?id=<?= $project->id ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="edit?id=<?= $project->id ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="delete?id=<?= $project->id ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </td>      
                        </tr>
                    </tbody>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
<?php require 'resources/create.view.php';?>
</body>

