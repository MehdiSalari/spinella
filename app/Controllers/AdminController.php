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

        // edit category
        elseif (isset($_POST['editCategory'])) {
            $categoryId = $_POST['categoryId'];
            $categoryTitle = $_POST['categoryTitle'];

            $sql = "UPDATE category SET title = '$categoryTitle' WHERE id = '$categoryId'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // echo 'success';
            } else {
                echo 'error' . mysqli_error($conn);die;
            }
            header("location: ".url('product-list'));
        }

        //add category
        elseif (isset($_POST['addCat'])) {
            $categoryTitle = $_POST['addCategory'];

            $sql = "INSERT INTO category (title) VALUES ('$categoryTitle')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // echo 'success';
            } else {
                echo 'error' . mysqli_error($conn);die;
            }
            header("location: ".url('product-list'));
        }

        // Update product status
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['action']) && $_POST['action'] == 'updateStatus') {
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['action']) && $_POST['action'] == 'deleteProduct') {
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

        // Delete category
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['action']) && $_POST['action'] == 'deleteCategory') {
            $id = $_POST['id'];

            $sql = 'SELECT * FROM product WHERE category_id = ' . $id;
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo 'Cannot delete this category because it has products associated with it.';
            }
            else {
                // حذف دسته بندی
                $sql = "DELETE FROM category WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);
    
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error' . mysqli_error($conn);
                }
            }

        }
    }
    

    public function settings()
    {
        return view("admin/settings");
    }

    public function settingsConfig()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['set'])) {
            $data = [
                'slider' => [
                    'slider1' => [
                        'title' => $_POST['sliderTitle1'],
                        'subtitle' => $_POST['sliderSub1'],
                        'text' => $_POST['sliderText1'],
                        'image' => 'slide-1.jpg'
                    ],
                    'slider2' => [
                        'title' => $_POST['sliderTitle2'],
                        'subtitle' => $_POST['sliderSub2'],
                        'text' => $_POST['sliderText2'],
                        'image' => 'slide-2.jpg'
                    ],
                    'slider3' => [
                        'title' => $_POST['sliderTitle3'],
                        'subtitle' => $_POST['sliderSub3'],
                        'text' => $_POST['sliderText3'],
                        'image' => 'slide-3.jpg'
                    ]
                ],
                'interview' => [
                    'title' => $_POST['interviewTitle'],
                    'subtitle' => $_POST['interviewSub'],
                    'text' => urlencode($_POST['interviewText']),
                    'image' => 'bg-1.jpg'
                ],
                'why' => [
                    'why1' => [
                        'title' => $_POST['whyTitle1'],
                        'text' => urlencode($_POST['whyText1'])
                    ],
                    'why2' => [
                        'title' => $_POST['whyTitle2'],
                        'text' => urlencode($_POST['whyText2'])
                    ],
                    'why3' => [
                        'title' => $_POST['whyTitle3'],
                        'text' => urlencode($_POST['whyText3'])
                    ],
                    'why4' => [
                        'title' => $_POST['whyTitle4'],
                        'text' => urlencode($_POST['whyText4'])
                    ]
                ],
                'banner' => [
                    'banner1' => [
                        'title' => $_POST['bannerTitle1'],
                        'text' => $_POST['bannerSub1'],
                        'image' => 'bg-2.jpg'
                    ],
                    'banner2' => [
                        'title' => $_POST['bannerTitle2'],
                        'text' => $_POST['bannerSub2'],
                        'image' => 'bg-4.jpg'
                    ]
                ],
                'products' => [
                    'title' => $_POST['productTitle'],
                    'image' => 'bg-3.jpg',
                    'product1' => [
                        'name' => $_POST['productName1'],
                        'desc' => $_POST['productDesc1']
                    ],
                    'product2' => [
                        'name' => $_POST['productName2'],
                        'desc' => $_POST['productDesc2']
                    ],
                    'product3' => [
                        'name' => $_POST['productName3'],
                        'desc' => $_POST['productDesc3']
                    ],
                    'product4' => [
                        'name' => $_POST['productName4'],
                        'desc' => $_POST['productDesc4']
                    ],
                    'product5' => [
                        'name' => $_POST['productName5'],
                        'desc' => $_POST['productDesc5']
                    ]
                ],
                'desc' => [
                    'text' => urlencode($_POST['descText']),
                    'image' => 'bg-5.jpg'
                ],
                'gallery' => [
                    'image1' => 'pf%20(1)',
                    'image2' => 'pf%20(2)',
                    'image3' => 'pf%20(3)',
                    'image4' => 'pf%20(4)',
                    'image5' => 'pf%20(5)',
                    'image6' => 'pf%20(6)'
                ],
                'recipe' => [
                    'title' => $_POST['recipeTitle'],
                    'subtitle' => $_POST['recipeSub'],
                    'text' => urlencode($_POST['recipeText']),
                    'image' => 'bg-side-1.jpg'
                ],
                'slogan' => [
                    'title' => $_POST['sloganTitle'],
                ],
                'footer' => [
                    'contact' => [
                        'address' => $_POST['footerAddress'],
                        'phone' => $_POST['footerPhone'],
                        'email' => $_POST['footerEmail']
                    ],
                    'info' => [
                        'logo' => 'footer-logo1.png',
                        'desc' => $_POST['footerDesc']
                    ],
                    'social' => [
                        'fb' => $_POST['footerFb'],
                        'ig' => $_POST['footerIg'],
                        'wa' => $_POST['footerWa'],
                        'tg' => $_POST['footerTg'],
                        'sk' => $_POST['footerSk']
                    ]
                ]
            ];

            if (isset($_FILES['sliderImg1']) && $_FILES['sliderImg1']['error'] == 0) {
                $file = $_FILES['sliderImg1'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/slider/slide-1.jpg');
                move_uploaded_file($fileTmpName, $target);
            }
            if (isset($_FILES['sliderImg2']) && $_FILES['sliderImg2']['error'] == 0) {
                $file = $_FILES['sliderImg2'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/slider/slide-2.jpg');
                move_uploaded_file($fileTmpName, $target);
            }
            if (isset($_FILES['sliderImg3']) && $_FILES['sliderImg3']['error'] == 0) {
                $file = $_FILES['sliderImg3'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/slider/slide-3.jpg');
                move_uploaded_file($fileTmpName, $target);
            }
            if (isset($_FILES['interviewImg']) && $_FILES['interviewImg']['error'] == 0) {
                $file = $_FILES['interviewImg'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/background/bg-1.jpg');
                move_uploaded_file($fileTmpName, $target);
            }
            if (isset($_FILES['bannerImg1']) && $_FILES['bannerImg1']['error'] == 0) {
                $file = $_FILES['bannerImg1'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/background/bg-2.jpg');
                move_uploaded_file($fileTmpName, $target);
            }
            if (isset($_FILES['bannerImg2']) && $_FILES['bannerImg2']['error'] == 0) {
                $file = $_FILES['bannerImg2'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/background/bg-4.jpg');
                move_uploaded_file($fileTmpName, $target);
            }
            if (isset($_FILES['productImg']) && $_FILES['productImg']['error'] == 0) {
                $file = $_FILES['productImg'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/background/bg-3.jpg');
                move_uploaded_file($fileTmpName, $target);
            }
            if (isset($_FILES['descImg']) && $_FILES['descImg']['error'] == 0) {
                $file = $_FILES['descImg'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/background/bg-5.jpg');
                move_uploaded_file($fileTmpName, $target);
            }
            // gallery images
                if (isset($_FILES['galleryImg1']) && $_FILES['galleryImg1']['error'] == 0) {
                    $file = $_FILES['galleryImg1'];
                    $fileTmpName = $file['tmp_name'];

                    $target1 = storage('assets/images/menu/pf%20(1).jpg');
                    $target2 = storage('assets/images/menu/view/pf%20(1).jpg');

                    move_uploaded_file($fileTmpName, $target1);
                    move_uploaded_file($fileTmpName, $target2);
                }
                if (isset($_FILES['galleryImg2']) && $_FILES['galleryImg2']['error'] == 0) {
                    $file = $_FILES['galleryImg2'];
                    $fileTmpName = $file['tmp_name'];

                    $target1 = storage('assets/images/menu/pf%20(2).jpg');
                    $target2 = storage('assets/images/menu/view/pf%20(2).jpg');

                    move_uploaded_file($fileTmpName, $target1);
                    move_uploaded_file($fileTmpName, $target2);
                }
                if (isset($_FILES['galleryImg3']) && $_FILES['galleryImg3']['error'] == 0) {
                    $file = $_FILES['galleryImg3'];
                    $fileTmpName = $file['tmp_name'];

                    $target1 = storage('assets/images/menu/pf%20(3).jpg');
                    $target2 = storage('assets/images/menu/view/pf%20(3).jpg');

                    move_uploaded_file($fileTmpName, $target1);
                    move_uploaded_file($fileTmpName, $target2);
                }
                if (isset($_FILES['galleryImg4']) && $_FILES['galleryImg4']['error'] == 0) {
                    $file = $_FILES['galleryImg4'];
                    $fileTmpName = $file['tmp_name'];

                    $target1 = storage('assets/images/menu/pf%20(4).jpg');
                    $target2 = storage('assets/images/menu/view/pf%20(4).jpg');

                    move_uploaded_file($fileTmpName, $target1);
                    move_uploaded_file($fileTmpName, $target2);
                }
                if (isset($_FILES['galleryImg5']) && $_FILES['galleryImg5']['error'] == 0) {
                    $file = $_FILES['galleryImg5'];
                    $fileTmpName = $file['tmp_name'];

                    $target1 = storage('assets/images/menu/pf%20(5).jpg');
                    $target2 = storage('assets/images/menu/view/pf%20(5).jpg');

                    move_uploaded_file($fileTmpName, $target1);
                    move_uploaded_file($fileTmpName, $target2);
                }
                if (isset($_FILES['galleryImg6']) && $_FILES['galleryImg6']['error'] == 0) {
                    $file = $_FILES['galleryImg6'];
                    $fileTmpName = $file['tmp_name'];

                    $target1 = storage('assets/images/menu/pf%20(6).jpg');
                    $target2 = storage('assets/images/menu/view/pf%20(6).jpg');

                    move_uploaded_file($fileTmpName, $target1);
                    move_uploaded_file($fileTmpName, $target2);
                }
            if (isset($_FILES['recipeImg']) && $_FILES['recipeImg']['error'] == 0) {
                $file = $_FILES['recipeImg'];
                $fileTmpName = $file['tmp_name'];

                $target = storage('assets/images/background/bg-side-1.jpg');
                move_uploaded_file($fileTmpName, $target);
            }

            $json = json_encode($data, JSON_UNESCAPED_UNICODE);
            $sql = "UPDATE settings SET json = '$json' WHERE page = 'home'";
            $result = mysqli_query($this->conn, $sql);

            if ($result) {
                header("location: " . url('settings'));
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);die;
            }
        }

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

    public function blogDetails()
    {
        return view("admin/blog-details");
    }
}