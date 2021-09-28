<?php require 'resources/header.view.php';?>
<!-- Test -->
<div id="down" class="bg-gray-200 px-5 pb-5 pt-5">
    <div class="py-3 px-5 bg-white rounded shadow-xl">
        <main class="my-8">
            <div class="container mx-auto px-6">
                <h3 class="text-gray-700 text-2xl font-medium">وصل حديثاً</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <?php foreach($projects as $project) : ?>
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('<?= $project->cover_image ?>')">
                                <a href="show?id=<?= $project->id ?>">
                                    <button  style="background-color: #4643d2;" class="p-2 rounded-full text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    </button>
                                </a>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase"><?= $project->title ?></h3>
                                <span class="text-gray-500 mt-2"><?= $project->price ?></span>
                            </div>
                        </div>
                    <?php endforeach;?> 
                </div>
            </div>
        </main>
    </div>
</div>
