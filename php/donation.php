<?php
$identifier = 1;
include("page_header.php"); ?>


<section class="s3">
    <div class="main-container">
            <h1>Donation</h1>

            <form action="up.php" method="post" enctype="multipart/form-data">
                <label for="picture">Picture:</label>
                <input type="file" name="picture" required><br>

                <label for="donation">Donation:</label>
                <input type="text" name="donation" required><br>

                <label for="description">Description:</label>
                <input type="text" name="description" required><br>

                <label for="name">Name:</label>
                <input type="text" name="name" required><br>

                <label for="email">Email:</label>
                <input type="text" name="email" required><br>

                <input type="submit" name="go" value="Submit" />
            </form>
  
    </div>
</section>