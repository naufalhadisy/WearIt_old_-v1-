<?php
$identifier = 0;
include("../php/page_header.php");
$account = $_SESSION["donor_email"];

error_reporting(0);
$submit = $_POST['submit'];
?>

</div>
</section>
        <section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">
                    <h1>Donor Profile</h1>
                </div>

                <?php 
                     $province = null;
                ?>

                <div class="hero-subtitle">

                    <?php 
                         $result1 = mysqli_query($con, "select * from donor where Email = '$account' ");
                         $num1 = mysqli_num_rows($result1);
                        
                         if ($num1 == 1) {
                            while($account1 = mysqli_fetch_array($result1)){
                            ?>
                    

                    <h5>Donor Information:</h5>
                    <br>

                    <p>Name : <?php echo $account1['Name']; ?> </p>
                    <p>Phone Number : <?php echo $account1['PhoneNum']; ?> </p>
                    <p>Email : <?php echo $account1['Email']; ?> </p>

                    <?php 
                        }
                    }
                    ?>
                    <br>
                    <div class="bg-white p-3 border rounded" style="width: 450px;">
                        <form method="POST" action="">
                        <table style="border: none;">
                            <tr>
                                <td style="border: none;">Name</td>
                                <td style="border: none;">: </td>
                                <td style="border: none;"><input class="form-control" type="name" name="Name" required></td>
                            <tr>
                            <tr>
                                <td style="border: none;">Phone Number</td>
                                <td style="border: none;">: </td>
                                <td style="border: none;"><input class="form-control" type="phonenum" name="PhoneNum" required></td>
                            <tr>
                            <tr>
                                <td style="border: none;">Email</td>
                                <td style="border: none;">: </td>
                                <td style="border: none;"><input class="form-control" type="email" name="Email" required></td>
                            <tr>  
                            <tr>
                                <td style="border: none;">Old Password</td>
                                <td style="border: none;">: </td>
                                <td style="border: none;"><input class="form-control" type="password" name="Password" required></td>
                            <tr>
                            <tr>
                                <td style="border: none;">New Password</td>
                                <td style="border: none;">: </tdstyle=>
                                <td style="border: none;"><input class="form-control" type="password" name="newPass1" required></td>
                            <tr>
                            <tr>
                                <td style="border: none;">Confirm Password</td>
                                <td style="border: none;">: </td>
                                <td style="border: none;"><input class="form-control" type="password" name="newPass2" required></td>
                            <tr>
                        </table>
                        <button class="btn btn-danger" type="submit" name="submit123">Change</button>
                    </form>
                    </div>

              </div>
            </div>
        </section>