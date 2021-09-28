

<div class="bg-gray-200 px-5 pb-8 pt-5">
    <div class="py-6 px-5 bg-white shadow-xl mt-4">
        <div class="-mx-1">
            <ul class="flex w-full flex-wrap items-center h-10">
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                        <span class="mr-3 text-2xl"> <i class="mdi mdi-layers-outline"></i> </span>
                        <span class="text-2xl">إنشاء منتح حديد</span>
                        <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex bg-white">
        <div class="bg-white w-full">
        <div id="btn">
            <div class="bg-white p-4 px-4 md:p-8 mb-6 w-2/4 m-auto">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                    <p style="color: #4643d2;" class="text-2xl mb-1">البيانات</p>
                    <p>فضلاً يرجى تعبئة البيانات المطلوبة بشكل صحيح</p>
                </div>
                
                <div class="lg:col-span-2">      
                    <form action="project/create" method="POST" enctype="multipart/form-data">
                        <div class="md:col-span-5">
                            <label for="title">عنوان المنتج</label>
                            <input type="text" name="title" id="title" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required />
                        </div>
                        <input type="hidden" name="user_id" value="1">
                        <div class="md:col-span-5">
                            <label for="descr">الوصف</label>
                            <input type="text" name="descr" id="descr" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""  required/>
                        </div>
                        <select class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="category_id" require>
                            <option value="1">جوالات</option>
                            <option value="2">كمبيوترات</option>
                        </select>
                        <div class="md:col-span-3">
                            <label for="size">الحجم</label>
                            <input type="text" name="size" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" required/>
                        </div>

                        <div class="md:col-span-2">
                            <label for="color">لون</label>
                            <input type="text" name="color" id="color" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="يرجى إدخال لون باللغة الإنجليزية" required/>
                        </div>
                        <div class="md:col-span-2">
                            <label for="price">السعر</label>
                            <input type="text" name="price" id="price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="$" required/>
                        </div>
                        <input type="file" name="fileToUpload" id="fileToUpload" require>
                        <div class="md:col-span-5 text-right">
                            <div class="inline-flex items-end my-5">  
                               <input type="submit"  style="background-color: #4643d2;" class="hover:bg-blue-700 text-white py-2 px-4 rounded"value="إنشاء" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>  