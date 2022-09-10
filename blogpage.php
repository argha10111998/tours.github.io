<?php
$conn=mysqli_connect('localhost','root','','tours');
$sql="select * from blogs";
$result=mysqli_query($conn,$sql);
?>

<?php include 'header.php'; ?>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row pb-3">
                       <?php while($row=mysqli_fetch_array($result))
                       {?>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="img/<?php echo $row['featuredimage'] ?>"  alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1"></h6>
                                        <small class="text-white text-uppercase"><?php echo $row['date'] ?></small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $row['author'] ?></a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                    <a class="h5 m-0 text-decoration-none" href=""><?php echo $row['caption'] ?></a>
                                </div>
                            </div>
                            </div>
                            <?php } ?>
                            </div>
                            </div>
                            </div>
                            </div>

<?php include 'footer.php'; ?>