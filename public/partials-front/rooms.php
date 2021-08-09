<section class="food-menu">
    <h1 class="text-center font-semibold text-4xl text-gray-700">Rooms</h1>

    <div class="flex justify-center items-center my-5">
        <div class="max-w-6xl mx-auto w-full grid grid-cols-1 md:grid-cols-2">

            <?php
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";
            $res2 = mysqli_query($conn, $sql2);
            $count2 = mysqli_num_rows($res2);

            if ($count2 > 0) {
                while ($row = mysqli_fetch_assoc($res2)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="bg-gray-100 m-2 rounded-xl p-2 grid grid-cols-1 md:grid-cols-2">
                        <div class="flex justify-center">
                            <?php
                            if ($image_name == "") {
                                echo "<div class='error'>Image not available.</div>";
                            } else {
                            ?>
                                <img src="<?= SITEURL; ?>images/food/<?= $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive object-cover object-center rounded-xl">
                            <?php
                            }
                            ?>
                        </div>

                        <div class="food-menu-desc flex items-center py-4 md:py-0">
                            <div>
                                <h4 class="text-xl font-semibold"><?= $title; ?></h4>
                                <p class="food-price">$<?= $price; ?></p>
                                <p class="food-detail">
                                    <?= $description; ?>
                                </p>
                                <br>

                                <div class="mb-3">
                                    <a href="<?= SITEURL; ?>order.php?food_id=<?= $id; ?>" class="bg-blue-500 rounded-lg px-3 py-1 text-gray-100 font-semibold">Book Now</a>
                                </div>
                                <div>
                                    <a href="<?= SITEURL; ?>order.php?food_id=<?= $id; ?>" class="bg-green-500 rounded-lg px-3 py-1 text-gray-100 font-semibold">Lern More</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<div class='error'>Rooms not available.</div>";
            }
            ?>
            <div class="clearfix"></div>
        </div>
    </div>

</section>