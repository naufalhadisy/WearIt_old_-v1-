<?php
$identifier = 1;
include("../php/page_header.php");
include("../config.php");

?>


<div class="main-container">
    <section class="s2">
        <h1>Available</h1>

        <div class="row">
            <div class="col l3 s6">
                <div class="list-group-item mb-4">
                    <div class="container">
                        <img src="../img/bag1.jpg" style="width:100%">
                        <p>Product Name<br><b>$24.99</b></p>
                        <input type="button" id="add" value="Add to cart" onClick="alert('Not yet!')"  />
                    </div>
                </div>
                <div class="list-group-item mb-4">
                    <div class="container">
                        <img src="../img/bag2.jpg" style="width:100%">
                        <p>Product Name<br><b>$19.99</b></p>
                        <input type="button" id="add" value="Add to cart" onClick="alert('Not yet!')" />
                    </div>
                </div>
            </div>

            <div class="col l3 s6">
                <div class="list-group-item mb-4">
                    <div class="container">
                        <div class="display-container">
                            <img src="../img/jacketslim.jpg" style="width:100%">
                        </div>
                        <p>MProduct Name<br><b>$19.99</b></p>
                        <input type="button" id="add" value="Add to cart" onClick="alert('Not yet!')" />
                    </div>
                </div>
                <div class="list-group-item mb-4">
                    <div class="container">
                        <img src="../img/greendress.jpg" style="width:100%">
                        <p>Product Name<br><b>$20.50</b></p>
                        <input type="button" id="add" value="Add to cart" onClick="alert('Not yet!')" />
                    </div>
                </div>
            </div>

            <div class="col l3 s6">
                <div class="list-group-item mb-4">
                    <div class="container">
                        <img src="../img/rok.jpg" style="width:100%">
                        <p>Product Name<br><b>$20.50</b></p>
                        <input type="button" id="add" value="Add to cart" onClick="alert('Not yet!')" />
                    </div>
                </div>
                <div class="list-group-item mb-4">
                    <div class="container">
                        <div class="display-container">
                            <img src="../img/coat.jpg" style="width:100%">
                        </div>
                        <p>Product Name<br><b class="w3-text-red">$14.99</b></p>
                        <input type="button" id="add" value="Add to cart" onClick="alert('Not yet!')" />
                    </div>
                </div>
            </div>

            <div class="col l3 s6">
                <div class="list-group-item mb-4">
                    <div class="container">
                        <img src="../img/dress2.jpg" style="width:100%">
                        <p>Product Name<br><b>$14.99</b></p>
                        <input type="button" id="add" value="Add to cart" onClick="alert('Not yet!')" />
                    </div>
                </div>
                <div class="list-group-item mb-4">
                    <div class="container">
                        <img src="../img/pupbag.jpg" style="width:100%">
                        <p>Product Name<br><b>$24.99</b></p>
                        <input type="button" id="add" value="Add to cart" onClick="alert('Not yet!')" />
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

</div>


<?php include("../php/page_footer.php"); ?>