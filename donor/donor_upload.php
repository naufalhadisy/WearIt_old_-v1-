<?php
$identifier = 1;
include("../php/page_header.php");
include("../config.php");

//Databse Connection file


?>


<div class="main-container">
    <section class="s2">
        <h1>Donation Post</h1>
        <div class="form-group">
            <tbody>
                <?php
                $ret = mysqli_query($con, "select * from donation");
                $cnt = 1;
                $row = mysqli_num_rows($ret);

                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {

                ?>
                        <?php

                        $account = $_SESSION["donor_email"];
                        $account_result = mysqli_query($con, "select Name from donor where Email = '$account'");

                        ?>

                        <div class="card-body">
                            <ul class="w-100 list-group" id="topic-list">
                                <li class="list-group-item mb-4">
                                    <img src="../img/avatar.png" alt="Avatar" class="float-left margin-right" style="width:30px">

                                    <span>
                                        <a href="../donor/donor_editpost.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-block btn-sm col-sm-2 float-right"><i class="fa fa-edit"></i><span>Edit Post</span></a>
                                    </span>

                                    <h3>&nbsp;<?php
                                                while ($info = $account_result->fetch_assoc()) {
                                                    $myvalue = $info['Name'];
                                                    $arr = (explode(' ', trim($myvalue)));
                                                    echo strtoupper($arr[0]);
                                                }
                                                ?></h3>

                                    <hr>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <img src="../img/<?php echo $row['picture']; ?>" style="width:100%">
                                        </div>
                                        <div class="col-md-8">
                                            <h2><?php echo $row['donation']; ?></h2>
                                            <?php echo $row['description']; ?><br>

                                        </div>
                                    </div>


                                    <hr>
                                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
                                </li>
                        </div>
                        <!--Fetch the Records -->

                    <?php
                        $cnt = $cnt + 1;
                    }
                } else { ?>
                    <tr>
                        <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                    </tr>
                <?php } ?>

            </tbody>
        </div>
    </section>
</div>

</div>


<?php include("../php/page_footer.php"); ?> 