<?php
if (isset($_SESSION['order'])) {
    echo $_SESSION['order'];
    unset($_SESSION['order']);
}
?>

<section class="categories px-2">
    <h1 class="text-center font-semibold text-4xl text-gray-700">Explore Activity</h1>

    <div class="flex justify-center items-center my-5">
        <div class="max-w-6xl mx-auto w-full">
            <?php
            $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
            ?>
                    <a href="<?= SITEURL; ?>category-foods.php?category_id=<?= $id; ?>">
                        <div class="box-3 float-container">
                            <?php
                            if ($image_name == "") {
                                echo "<div class='error'>Image not Available</div>";
                            } else {
                            ?>
                                <img src="<?= SITEURL; ?>images/category/<?= $image_name; ?>" class="img-responsive object-cover object-center h-48 img-curve">
                            <?php
                            }
                            ?>
                            <h3 class="float-text text-white font-semibold text-xl"><?= $title; ?></h3>
                        </div>
                    </a>
            <?php
                }
            } else {
                echo "<div class='error'>Category not Added.</div>";
            }
            ?>
            <div class="clearfix"></div>
        </div>
    </div>

</section>