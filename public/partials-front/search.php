<section class="bg-gray-500 flex justify-center text-center py-10">
    <div class="bg-gray-100 rounded-full py-2 px-4">
        <form action="<?php echo SITEURL; ?>food-search.php" method="POST" class="flex">
            <input type="search" name="search" placeholder="Search..." required class="bg-gray-100 outline-none">
            <input type="submit" name="submit" value="Search" class="rounded-full px-2 text-gray-500">
        </form>
    </div>
</section>