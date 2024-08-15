<?php
namespace App\Controllers;
use App\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("admin/dashboard");
    }

    public function products()
    {
        return view("admin/products");
    }

    public function updateProduct()
    {
        // اتصال به دیتابیس
        $conn = $this->conn;

        if ($conn->connect_error) {
            die("Connection failed: {$conn->connect_error}");
        }


        // تابعی برای ساختن اسلاگ یکتا
        function makeUniqueSlug($slug, $conn) {
            $originalSlug = $slug;
            $counter = 1;

            // بررسی وجود اسلاگ در دیتابیس
            while (true) {
                $sql = "SELECT slug FROM product WHERE slug = '$slug' LIMIT 1";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    $slug = $originalSlug . '-' . $counter;
                    $counter++;
                } else {
                    break;
                }
            }
            return $slug;
        }



        // Add product
        if (isset($_POST['addProduct'])) {
            $productTitle = $_POST['productTitle'];
            $productSlug = createSlug($productTitle);
            $productSlug = makeUniqueSlug($productSlug, $conn);
            $productPrice = $_POST['productPrice'];
            $productStock = $_POST['productStock'];
            $productCategory = $_POST['productCategory'];
            $productDescription = $_POST['productDescription'];
            $productImage = $_FILES['productImage']['name'];
            $productImageTemp = $_FILES['productImage']['tmp_name'];
            $productImageExt = pathinfo($productImage, PATHINFO_EXTENSION);
            $image = "$productSlug.$productImageExt";
            $target = storage('assets/images/products/') . $image;
            // print_r($image);die;
            // انتقال فایل به مقصد
            if (move_uploaded_file($productImageTemp, $target)) {
                $sql = "INSERT INTO product (title, slug, stock, description, price, category_id, image) 
                        VALUES ('$productTitle', '$productSlug', '$productStock', '$productDescription', '$productPrice', '$productCategory', '$image')";
                
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    // echo 'Product added successfully!';
                } else {
                    echo 'Error: ' . mysqli_error($conn);
                }
            } else {
                echo 'Error uploading the image.';
            }
            header("location: ".url('product-list'));
        }

        // edit product
        elseif (isset($_POST['editProduct'])) {
            $productId = $_POST['productId'];
            $productTitle = $_POST['productTitle'];
            $productSlug = createSlug($productTitle);
            $productSlug = makeUniqueSlug($productSlug, $conn);
            $productPrice = $_POST['productPrice'];
            $productStock = $_POST['productStock'];
            $productCategory = $_POST['productCategory'];
            $productDescription = $_POST['productDescription'];
            $productImage = $_FILES['productImage']['name'];
            $productImageTemp = $_FILES['productImage']['tmp_name'];
            $productImageExt = pathinfo($productImage, PATHINFO_EXTENSION);
            $image = "$productSlug.$productImageExt";
            $target = storage('assets/images/products/') . $image;
            // print_r($image);die;
            // انتقال فایل به مقصد
            if (isset($_FILES['productImage']['name']) && !empty($_FILES['productImage']['name'])) {
                if (move_uploaded_file($productImageTemp, $target)) {
                    // $sql = "INSERT INTO product (title, slug, stock, description, price, category_id, image) VALUES ('$productTitle', '$productSlug', '$productStock', '$productDescription', '$productPrice', '$productCategory', '$image')";
                    
                    $sql = "UPDATE product SET `title` = '$productTitle', `slug` = '$productSlug', `stock` = '$productStock', `description` = '$productDescription', `price` = '$productPrice', `category_id` = '$productCategory', `image` = '$image' WHERE id = '$productId'";

                    
                } else {
                    echo 'Error uploading the image.';die;
                }
            } else {
                $sql = "UPDATE product SET `title` = '$productTitle', `slug` = '$productSlug', `stock` = '$productStock', `description` = '$productDescription', `price` = '$productPrice', `category_id` = '$productCategory' WHERE id = '$productId'";
            }

            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                // echo 'Product added successfully!';
            } else {
                echo 'Error: ' . mysqli_error($conn);die;
            }
            header("location: ".url('product-list'));
        }

        // Update product status
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'updateStatus') {
                $id = $_POST['id'];
                $status = $_POST['status'];
            
                // به‌روزرسانی وضعیت محصول
                $sql = "UPDATE product SET status = '$status' WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo 'success';
                } else {
                    echo 'error' . mysqli_error($conn);
                }
            }
        

        // Delete product
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'deleteProduct') {
            $id = $_POST['id'];

            // حذف محصول
            $sql = "DELETE FROM product WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo 'success';
            } else {
                echo 'error' . mysqli_error($conn);
            }
        }
    }
    

    public function settings()
    {
        return view("admin/settings");
    }

    public function admins()
    {
        return view("admin/admins");
    }

    public function mail()
    {
        return view("admin/mail");
    }

    public function blog()
    {
        return view("admin/blog");
    }
}