<?php
$sql = 'SELECT 
            product.*, 
            category.title AS category_title 
        FROM product 
        INNER JOIN category 
        ON product.category_id = category.id LIMIT 10';
$result = mysqli_query($conn, $sql);
$products = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}

$sql = 'SELECT * FROM category';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row;
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
                                <a href="#" id="open-add-popup">Add Product</a>
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
                                    $status = $product['status'] == 1 
                                        ? '<button class="status-toggle pd-setting" data-id="'.$product['id'].'" data-status="1">Active</button>'
                                        : '<button class="status-toggle ds-setting" data-id="'.$product['id'].'" data-status="0">Inactive</button>';
                                ?>
                                <tr>
                                    <td><img style="width: 60px; height: 40px;" src="<?= assets('images/products/'.$product['image'] ?? 'default.png') ?>" alt="" /></td>
                                    <td><?= $product['title'] ?></td>
                                    <td>
                                        <?= $status ?>
                                    </td>
                                    <td><?= $product['stock'] ?></td>
                                    <td><?= $product['category_title'] ?></td>
                                    <td style="max-width: 200px;"><?= substr($product['description'], 0, 50).'...' ?></td>
                                    <td>$<?= $product['price'] ?></td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed edit-product" 
                                            data-id="<?= $product['id'] ?>" 
                                            data-title="<?= $product['title'] ?>" 
                                            data-description="<?= $product['description'] ?>" 
                                            data-stock="<?= $product['stock'] ?>" 
                                            data-category="<?= $product['category_title'] ?>" 
                                            data-price="<?= $product['price'] ?>" 
                                            data-image="<?= assets('images/products/'.$product['image']) ?>"
                                            data-action="edit">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed delete-product" data-id="<?= $product['id'] ?>" data-action="delete">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                            <hr>
                            <span style="color: white;">Pages</span>
                            <div class="custom-pagination" style="margin-top: -10px;">
                                <ul class="pagination">
                                    <?php
                                    $count = count($products);
                                    $pages = ceil($count / 10);
                                    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                                    if ($current_page > 1) {
                                        $prev_page = $current_page - 1;
                                        echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?page=$prev_page\">Previous</a></li>";
                                    }

                                    for ($i = 1; $i <= $pages; $i++) {
                                        $active_class = ($i == $current_page) ? 'active' : '';
                                        echo "<li class=\"page-item $active_class\"><a class=\"page-link\" href=\"?page=$i\">$i</a></li>";
                                    }

                                    if ($current_page < $pages) {
                                        $next_page = $current_page + 1;
                                        echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?page=$next_page\">Next</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="product-status-wrap" style="margin-top: 20px;">
                            <div style="display:flex; justify-content: space-between;">
                                <h4>Products Category</h4>
                                <form action="#" method="POST">
                                <div style="color: white;">
                                    Add Category:
                                    <input style="margin-left: 10px; width: 200px; height: 30px; border-radius: 5px; background-color: #152036; color: #fff" type="text" name="addCategory" id="addCategory">
                                    <input style="margin-left: 10px; width: 50px; height: 30px; border-radius: 5px; background-color: #152036; color: #fff" type="submit" value="Add" name="addCat">
                                </div>
                            </form>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                    <!-- <th>Status</th>
                                    <th>Stock</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Price</th> -->
                                    <th>Setting</th>
                                </tr>
                                <?php foreach ($categories as $category): 
                                    // $status = $product['status'] == 1 
                                    //     ? '<button class="status-toggle pd-setting" data-id="'.$product['id'].'" data-status="1">Active</button>'
                                    //     : '<button class="status-toggle ds-setting" data-id="'.$product['id'].'" data-status="0">Inactive</button>';
                                ?>
                                <tr>
                                    <td><?= $category['id'] ?></td>
                                    <td><?= $category['title'] ?></td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed edit-category" 
                                            data-id="<?= $category['id'] ?>" 
                                            data-title="<?= $category['title'] ?>"
                                            data-action="editCat">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed delete-category" data-id="<?= $category['id'] ?>" data-action="deleteCat">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                            <hr>
                            <span style="color: white;">Pages</span>
                            <div class="custom-pagination" style="margin-top: -10px;">
                                <ul class="pagination">
                                    <?php
                                    $count = count($products);
                                    $pages = ceil($count / 10);
                                    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                                    if ($current_page > 1) {
                                        $prev_page = $current_page - 1;
                                        echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?page=$prev_page\">Previous</a></li>";
                                    }

                                    for ($i = 1; $i <= $pages; $i++) {
                                        $active_class = ($i == $current_page) ? 'active' : '';
                                        echo "<li class=\"page-item $active_class\"><a class=\"page-link\" href=\"?page=$i\">$i</a></li>";
                                    }

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

        <!-- Start Add Product Pop-up Form -->
        <div id="add-product-popup" class="popup">
            <div class="popup-content">
            <div class="popup-bg">
            <label style="color: white;font-size: 20px;" class="page-item"><i style="margin-right: 10px" class="icon nalika-plus" aria-hidden="true"></i>Add Product</label>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Product Title" name="productTitle" required>
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Price" name="productPrice">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-menu-task" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Stock" name="productStock">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-folder" aria-hidden="true"></i></span>
                                        <select name="productCategory" class="form-control pro-edt-select form-control-primary" style="cursor: pointer" required>
                                            <option value="">Select Category</option>
                                            <?php
                                            foreach ($categories as $category): ?>
                                                <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <img id="add-product-image" src="<?= assets('images/products/default.png') ?>" alt="" style="width: 300px; height: 150px;">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <label class="custom-file-upload">
                                            <input type="file" id="add-image-upload" name="productImage" accept="image/*" required />
                                            Upload Image
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-pro-edt" style="margin: 10px 15px">
                            <textarea class="form-control" name="productDescription" placeholder="Product Description"></textarea>
                        </div>
                        <div class="row" style="margin: 20px 15px;">
                            <div class="text-center">
                                <button name="addProduct" type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light close-popup">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- End Add Product Pop-up Form -->

        <!-- Start Edit Product Pop-up Form -->
        <div id="edit-product-popup" class="popup">
            <div class="popup-content">
                <div class="popup-bg">
                <label style="color: white;font-size: 20px;" class="page-item"><i style="margin-right: 10px" class="icon nalika-edit" aria-hidden="true"></i>Edit Product</label>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="productId" id="edit-product-id">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Product Title" name="productTitle" id="edit-product-title" required>
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Price" name="productPrice" id="edit-product-price">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-menu-task" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Stock" name="productStock" id="edit-product-stock">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-folder" aria-hidden="true"></i></span>
                                        <select name="productCategory" class="form-control pro-edt-select form-control-primary" id="edit-product-category" style="cursor: pointer" required>
                                        <!-- <option value="">Select Category</option> -->
                                            <?php
                                            // $sql = 'SELECT * FROM category';
                                            // $result = mysqli_query($conn, $sql);
                                            // if (mysqli_num_rows($result) > 0) {
                                            //     while ($row = mysqli_fetch_assoc($result)) {
                                            //         $categories[] = $row;
                                            //     }
                                            // }
                                            foreach ($categories as $category): ?>
                                                <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <img id="edit-product-image" src="<?= assets('images/products/default.png') ?>" alt="" style="width: 300px; height: 150px;">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <label class="custom-file-upload">
                                            <input type="file" id="edit-image-upload" name="productImage" accept="image/*" />
                                            Upload Image
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-pro-edt" style="margin: 10px 15px">
                            <textarea class="form-control" name="productDescription" id="edit-product-description" placeholder="Product Description"></textarea>
                        </div>
                        <div class="row" style="margin: 20px 15px;">
                            <div class="text-center">
                                <button name="editProduct" type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light close-popup">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- End Edit Product Pop-up Form -->

        <!-- Start Edit Category Pop-up Form -->
        <div id="edit-category-popup" class="popup">
            <div class="popup-content">
                <div class="popup-bg">
                <label style="color: white;font-size: 20px;" class="page-item"><i style="margin-right: 10px" class="icon nalika-edit" aria-hidden="true"></i>Edit Category</label>
                <form action="#" method="POST">
                    <input type="hidden" name="categoryId" id="edit-category-id">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> -->
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Product Title" name="categoryTitle" id="edit-category-title" required>
                                    </div>
                                    <!-- <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Price" name="productPrice" id="edit-product-price">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-menu-task" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Stock" name="productStock" id="edit-product-stock">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-folder" aria-hidden="true"></i></span>
                                        <select name="productCategory" class="form-control pro-edt-select form-control-primary" id="edit-product-category" style="cursor: pointer" required> -->
                                        <!-- <option value="">Select Category</option> -->
                                            
                                        <!-- </select> -->
                                    <!-- </div> -->
                                </div>
                            <!-- </div> -->
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <img id="edit-product-image" src="<?= assets('images/products/default.png') ?>" alt="" style="width: 300px; height: 150px;">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <label class="custom-file-upload">
                                            <input type="file" id="edit-image-upload" name="productImage" accept="image/*" />
                                            Upload Image
                                        </label>
                                    </div>
                                </div>
                            </div>  -->
                        </div>
                        <!-- <div class="row mg-b-pro-edt" style="margin: 10px 15px">
                            <textarea class="form-control" name="productDescription" id="edit-product-description" placeholder="Product Description"></textarea>
                        </div> -->
                        <div class="row" style="margin: 20px 15px;">
                            <div class="text-center">
                                <button name="editCategory" type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light close-popup">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- End Edit category Pop-up Form -->

        <!-- Start Footer -->
        <?php include 'components/footer.php' ?>
        <!-- End Footer -->

    </div>

    <script>
        // JavaScript Code for Handling Popups and Data Transfer
        document.addEventListener('DOMContentLoaded', function () {
            // Open Add Product Popup
            document.getElementById('open-add-popup').addEventListener('click', function () {
                document.getElementById('add-product-popup').style.display = 'block';
            });

            // Edit Product - Open Edit Popup and Fill the Data
            document.querySelectorAll('.edit-product').forEach(function (button) {
                button.addEventListener('click', function () {
                    var productId = this.getAttribute('data-id');
                    var title = this.getAttribute('data-title');
                    var description = this.getAttribute('data-description');
                    var stock = this.getAttribute('data-stock');
                    var category = this.getAttribute('data-category');
                    var price = this.getAttribute('data-price');
                    var image = this.getAttribute('data-image');

                    // Set the values in the edit form
                    document.getElementById('edit-product-id').value = productId;
                    document.getElementById('edit-product-title').value = title;
                    document.getElementById('edit-product-description').value = description;
                    document.getElementById('edit-product-stock').value = stock;
                    document.getElementById('edit-product-category').value = category;
                    document.getElementById('edit-product-price').value = price;
                    document.getElementById('edit-product-image').src = image;

                    // Open the edit product popup
                    document.getElementById('edit-product-popup').style.display = 'block';
                });
            });

            // Edit Product - Open Edit Popup and Fill the Data
            document.querySelectorAll('.edit-category').forEach(function (button) {
                button.addEventListener('click', function () {
                    var categoryId = this.getAttribute('data-id');
                    var title = this.getAttribute('data-title');

                    // Set the values in the edit form
                    document.getElementById('edit-category-id').value = categoryId;
                    document.getElementById('edit-category-title').value = title;

                    // Open the edit product popup
                    document.getElementById('edit-category-popup').style.display = 'block';
                });
            });

            // Close Popup Forms
            document.querySelectorAll('.close-popup').forEach(function (button) {
                button.addEventListener('click', function () {
                    this.closest('.popup').style.display = 'none';
                    const image = document.getElementById('add-product-image');
                    image.src = '<?= assets("images/products/default.png") ?>';
                });
            });
        });

        document.getElementById('add-image-upload').addEventListener('change', function(event) {
            const image = document.getElementById('add-product-image');
            const file = event.target.files[0];
            const reader = new FileReader();
            
            reader.onload = function(e) {
                image.src = e.target.result;
            }
            
            if (file) {
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('edit-image-upload').addEventListener('change', function(event) {
            const image = document.getElementById('edit-product-image');
            const file = event.target.files[0];
            const reader = new FileReader();
            
            reader.onload = function(e) {
                image.src = e.target.result;
            }
            
            if (file) {
                reader.readAsDataURL(file);
            }
        });


        // Delete product
        document.querySelectorAll('.delete-category').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                if(confirm("Are you sure you want to delete this product?")) {
                    $.ajax({
                        url: '<?= url('product-list') ?>',
                        type: 'POST',
                        data: { id: productId, action: 'deleteCategory' },
                        success: function(response) {
                            if (response == 'success') {
                                // alert('Product deleted successfully.');
                                location.reload();
                            } else {
                                alert('Failed to delete product.' + response);
                            }
                        }
                    })
                }
            });
        });

        // Delete category
        document.querySelectorAll('.delete-product').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                if(confirm("Are you sure you want to delete this product?")) {
                    $.ajax({
                        url: '<?= url('product-list') ?>',
                        type: 'POST',
                        data: { id: productId, action: 'deleteProduct' },
                        success: function(response) {
                            if (response == 'success') {
                                // alert('Product deleted successfully.');
                                location.reload();
                            } else {
                                alert('Failed to delete Category.' + response);
                            }
                        }
                    })
                }
            });
        });


        //update status
        $(document).ready(function() {
            $('body').on('click', '.status-toggle', function() {
                var button = $(this);
                var productId = button.data('id'); 
                var currentStatus = button.data('status');
                var newStatus = currentStatus == 1 ? 0 : 1;

                
                
                // غیرفعال کردن دکمه
                button.attr('disabled', true);
                button.css('background-color', 'gray');

                $.ajax({
                    url: '<?= url('product-list') ?>',
                    type: 'POST',
                    data: { id: productId, status: newStatus, action: 'updateStatus' },
                    success: function(response) {
                        if (response == 'success') {
                            if (newStatus == 1) {
                                button.data('status', 1).html('Active').removeClass('ds-setting').addClass('pd-setting');
                            } else {
                                button.data('status', 0).html('Inactive').removeClass('pd-setting').addClass('ds-setting');
                            }
                        } else {
                            alert('Failed to update status.' + response);
                        }
                    },
                    error: function() {
                        alert('Error in AJAX request.');
                    }
                });

                // فعال کردن دکمه بعد از 3 ثانیه
                setTimeout(function() {
                    button.attr('disabled', false);
                    button.removeAttr('style');
                }, 1500);
            });
        });

    </script>
    <?php include 'layout/scripts.php' ?>
</body>

</html>
