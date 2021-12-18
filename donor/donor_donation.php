<?php
$identifier = 1;
include("../php/page_header.php");
include("../config.php");

//Databse Connection file
if (isset($_POST['upload'])) {
    //getting the post values
    $picture = $_FILES['picture']['name'];
    $donation = $_POST['donation'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    // get the image extension
    $extension = substr($picture, strlen($picture) - 4, strlen($picture));
    // allowed extensions
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {
        //rename the image file
        $imgnewfile = md5($imgfile) . time() . $extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["picture"]["tmp_name"], "../img/" . $imgnewfile);
        // Query for data insertion
        $query = mysqli_query($con, "insert into donation(picture, donation, description, name, email) value('$imgnewfile','$donation','$description','$name', '$email')");
        if ($query) {
            echo "<script>alert('You have successfully post the donation');</script>";
            echo "<script type='text/javascript'> document.location ='../donor/donor_upload.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
}
?>


<div class="main-container">
    <section class="s4">
        <div class="kain-container">
            <h1>Donation</h1>
        </div>

        <form method="post" enctype="multipart/form-data">

            <label for="picture">Picture:</label>
            <div class="form-group">
                <input type="file" class="form-control" name="picture" required="true">
            </div>

            <label for="donation">Donation:</label>
            <input type="text" name="donation" required><br>

            <label for="description">Description:</label>
            <textarea id="w3review" name="description" rows="4" cols="50" required> </textarea><br>

            <input type="submit" name="upload" value="Submit" /><br>

        </form>
    </section>
</div>

</div>




<?php include("../php/page_footer.php"); ?> 