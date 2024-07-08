<?php include("header.php");  ?>  
 
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Gallery</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Gallery</p>
            </div>
        </div>
    </div>
   
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer For Ice Cream Lovers</h1>
                </div>
            </div>
            <div class="row">
            <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first"><a href="cone.php" class="nav-item nav-link"></a>Cone</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second"><a href="cupicecream.php" class="nav-item nav-link"></a>Cupicecream</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third"><a href="candy.php" class="nav-item nav-link"></a>Candy</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".fourth"><a href="familypack.php" class="nav-item nav-link"></a>Familypack</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".fifth"><a href="pesti.php" class="nav-item nav-link"></a>Pesti</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".six"><a href="coldcoco.php" class="nav-item nav-link"></a>Cold Coco</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".seven"><a href="sake.php" class="nav-item nav-link"></a>Sake </li>
                    </ul>
                </div>
			<?php
  include("con1.php");
  $query="select * from product";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result))
  {?>
                 <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0"><?php echo $row[2]?></h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="<?php echo "img/".$row[3]?>" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4"><?php echo $row[1]?></h5>
                        <a href="addtocart.php?id=<?php echo $row[0]?>" class="btn btn-sm btn-secondary">addtocart</a>
                    </div>
                </div>
               
                <?php } ?>
                <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Load More</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php");?>