<?php
$identifier = 2;
include("page_header.php"); ?>
<section class="s2">
    <div class="main-container">
            <h1>New Thread</h1>

            <form action="up.php" method="post" enctype="multipart/form-data">

                <label for="donation">Tittle:</label>
                <input type="text" name="donation" required><br>

                <label for="description">Add Tags:</label>
                <input type="text" name="description" required><br>

                <label for="description">Content:</label>
                <textarea id="w3review" name="w3review" rows="4" cols="50"> </textarea>

                <label for="picture">Picture:</label>
                <input type="file" name="picture" required><br>
            <br>
                <input type="submit" name="go" value="Submit" />
            </form>
  
    </div>
</section>