<?php
$sql = 'SELECT 
            product.*, 
            category.title AS category_title 
        FROM product 
        INNER JOIN category 
        ON product.category_id = category.id LIMIT 10';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
<?php include 'layout/head.php' ?>
</head>

<body>
    <!-- Start Side Bar -->
    <?php include 'components/sidebar.php' ?>
    <!-- End Side Bar -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- Start Header Area -->
        <?php include 'components/header.php' ?>
        <!-- End Header Area -->
        
        <div class="container-fluid">
                <div class="product-status mg-b-30" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="#" id="open-popup">Add Product</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Title</th>
                                    <th>Status</th>
                                    <th>Stock</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Setting</th>
                                </tr>
                                <?php foreach ($products as $product): 
                                    $status = $product['status'] == 1 ? '<span class="pd-setting">Active</span>' : '<button class="ds-setting">Inactive</button>';?>
                                <tr>
                                    <td><img src="<?= assets('images/products/'.$product['image'] ?? 'default.png') ?>" alt="" /></td>
                                    <td><?= $product['title'] ?></td>
                                    <td>
                                        <?= $status ?>
                                    </td>
                                    <td><?= $product['stock'] ?></td>
                                    <td><?= $product['category_title'] ?></td>
                                    <td style="max-width: 200px;"><?= substr($product['description'], 0, 50).'...' ?></td>
                                    <td>$<?= $product['price'] ?></td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <!-- <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Product Title 2</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>60</td>
                                    <td>$1020</td>
                                    <td>In Stock</td>
                                    <td>$17</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Product Title 3</td>
                                    <td>
                                        <button class="ds-setting">Disabled</button>
                                    </td>
                                    <td>70</td>
                                    <td>$1050</td>
                                    <td>Low Stock</td>
                                    <td>$15</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                    <td>Product Title 4</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>120</td>
                                    <td>$1440</td>
                                    <td>In Stock</td>
                                    <td>$12</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Product Title 5</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>30</td>
                                    <td>$540</td>
                                    <td>Out Of Stock</td>
                                    <td>$18</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Product Title 6</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>400</td>
                                    <td>$4000</td>
                                    <td>In Stock</td>
                                    <td>$10</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr> -->
                            </table>
                            <hr>
                            <span style="color: white;">Pages</span>
                            <div class="custom-pagination" style="margin-top: -10px;">
                                <ul class="pagination">
                                    <?php
                                    // تعداد محصولات
                                    $count = count($products);
                                    // تعداد صفحات
                                    $pages = ceil($count / 10);
                                    // شماره صفحه فعلی (فرض کنیم با GET پارامتر 'page' ارسال می‌شود)
                                    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                                    // نمایش دکمه Previous
                                    if ($current_page > 1) {
                                        $prev_page = $current_page - 1;
                                        echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?page=$prev_page\">Previous</a></li>";
                                    }

                                    // نمایش شماره صفحات
                                    for ($i = 1; $i <= $pages; $i++) {
                                        $active_class = ($i == $current_page) ? 'active' : '';
                                        echo "<li class=\"page-item $active_class\"><a class=\"page-link\" href=\"?page=$i\">$i</a></li>";
                                    }

                                    // نمایش دکمه Next
                                    if ($current_page < $pages) {
                                        $next_page = $current_page + 1;
                                        echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?page=$next_page\">Next</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Add product Pop-up form-->
        <div id="product-popup" class="popup">
            <div class="popup-content">
                <!-- <span id="close-popup" class="close-btn">&times;</span> -->
                <!-- محتویات فرم افزودن محصول -->
                <div class="single-product-tab-area mg-b-30">
                    <!-- Single pro tab review Start-->
                    <div class="single-pro-review-area">
                        <div class="container-fluid">
                            <!-- محتویات پاپ‌آپ (همانطور که در کد شما آمده بود) -->
                            <div class="review-tab-pro-inner" style="border-radius: 10px">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
                                    <!-- <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <form action="#" method="post">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Product Title">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Regular Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Tax">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Product Description">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Sale Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Category">
                                                    </div>
                                                    <select name="select" class="form-control pro-edt-select form-control-primary">
                                                        <option value="opt1">Select One Value Only</option>
                                                        <option value="opt2">2</option>
                                                        <option value="opt3">3</option>
                                                        <option value="opt4">4</option>
                                                        <option value="opt5">5</option>
                                                        <option value="opt6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light"><span id="close-popup">Discard</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <!-- سایر تب ها و محتواهایی که می‌خواهید نمایش داده شوند -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- End Add product Pop-up form-->

        <!-- Start Footer area-->
        <?php include 'components/footer.php' ?>
        <!-- End Footer area-->
    </div>

    <?php include 'layout/scripts.php' ?>;
</body>

</html>