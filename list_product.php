<?php
    require_once("./entities/product.class.php");
    require_once("./entities/category.class.php");
?>

<?php 
    include_once("header.php");
    if(!isset($_GET["cateid"])){
        $prods = Product::list_product();
    }else{
        $cateid = $_GET["cateid"];
        $prods = Product::list_product_by_cateid($cateid);
    }
    $cates = Category::list_category();
?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Shop</h2>
						<div class="page_link">
							<a href="index.php">Trang chủ</a>
							<a href="list_product.php">Danh mục sản phẩm</a>
							<a href="list_product.php">Tất cả sản phẩm</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
             <!--================Category Product Area =================-->
             <section class="cat_product_area p_120">
        	<div class="container">
        		<div class="row flex-row-reverse">
        			<div class="col-lg-9">
        				<div class="product_top_bar">
        					<div class="left_dorp">
								<select class="sorting">
									<option value="1">Default sorting</option>
									<option value="2">Default sorting 01</option>
									<option value="4">Default sorting 02</option>
								</select>
        					</div>
        					<div class="right_page ml-auto">
								<nav class="cat_page" aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item blank"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">6</a></li>
										<li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
									</ul>
								</nav>
        					</div>
        				</div>
        				<div class="latest_product_inner row">
                            <?php
                                foreach($prods as $item){
                                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="f_p_item">
                                        <div class="f_p_img">
                                            <img class="img-fluid" src="<?php echo $item["Picture"];?>" alt="">
                                            <div class="p_icon">
                                                <a href="#"><i class="lnr lnr-heart"></i></a>
                                                <a href="#"><i class="lnr lnr-cart"></i></a>
                                            </div>
                                        </div>
                                        <a href="product_detail.php?id=<?php echo $item["ProductID"];?>"><h4><?php echo $item["ProductName"];?></h4></a>
                                        <h5><?php echo $item["Price"];?></h5>
                                        <a href="./product_detail.php?id=<?php echo $item["ProductID"]?>" class="btn btn-info">Xem chi tiết</a>
                                        <a href="./update_product.php?id=<?php echo $item["ProductID"]?>" class="btn btn-primary">Chỉnh sửa</a>
                                    </div>
							</div>
                            <?php } ?>
							
						</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="left_sidebar_area">
        					<aside class="left_widgets cat_widgets">
        						<div class="l_w_title">
									<h3>Danh mục sản phẩm</h3>
								</div>
        						<div class="widgets_inner">
									<ul class="list">
                                        <?php
                                            foreach($cates as $item){
                                                echo"<li><a href=list_product.php?cateid=".$item["CateID"].">".$item["CategoryName"]."</a> </li>";
                                            }
                                        ?>  
									</ul>
        						</div>
        					</aside>
        					<aside class="left_widgets p_filter_widgets">
        						<div class="l_w_title">
									<h3>Product Filters</h3>
								</div>
        						<div class="widgets_inner">
        							<h4>Brand</h4>
									<ul class="list">
										<li><a href="#">Apple</a></li>
										<li><a href="#">Asus</a></li>
										<li class="active"><a href="#">Gionee</a></li>
										<li><a href="#">Micromax</a></li>
										<li><a href="#">Samsung</a></li>
									</ul>
        						</div>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Category Product Area =================-->
<?php include_once("footer.php");?>