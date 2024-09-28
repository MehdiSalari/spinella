@extends('admin.layout.master')

@section('content')
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
                                    $status = $product->status == true 
                                        ? '<button class="status-toggle pd-setting" data-id="'.$product->id.'" data-status="1">Active</button>'
                                        : '<button class="status-toggle ds-setting" data-id="'.$product->id.'" data-status="0">Inactive</button>';
                                ?>
                                <tr>
                                    <td><img style="width: 60px; height: 40px;" src="{{ asset('assets/images/products/'.$product->image ?? 'default.png') }}" alt="" /></td>
                                    <td>{{ $product->title }}</td>
                                    <td>
                                        <?= $status ?>
                                    </td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->category->title }}</td>
                                    <td style="max-width: 200px;">{{ substr($product->description, 0, 50).'...' }}</td>
                                    <td>${{ $product->price }}</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed edit-product" 
                                            data-id="{{ $product->id }}" 
                                            data-title="{{ $product->title }}" 
                                            data-description="{{ $product->description }}" 
                                            data-stock="{{ $product->stock }}" 
                                            data-category="{{ $product->category_id }}" 
                                            data-price="{{ $product->price }}" 
                                            data-image="{{ asset('assets/images/products/'.$product->image) }}"
                                            data-action="edit">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed delete-product" data-id="{{ $product->id }}" data-action="delete">
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
                                <form action="{{ route('admin.category.store') }}" method="POST">
                                @csrf
                                <div style="color: white;">
                                    Add Category:
                                    <input style="margin-left: 10px; width: 200px; height: 30px; border-radius: 5px; background-color: #152036; color: #fff" type="text" name="title" id="addCategory">
                                    <input style="margin-left: 10px; width: 50px; height: 30px; border-radius: 5px; background-color: #152036; color: #fff" type="submit" value="Add" name="addCat">
                                </div>
                            </form>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                    <th>Setting</th>
                                </tr>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category['id'] }}</td>
                                    <td>{{ $category['title'] }}</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit {{ $category->title }}" class="pd-setting-ed edit-category" 
                                            data-id="{{ $category['id'] }}" 
                                            data-title="{{ $category['title'] }}"
                                            data-action="editCat">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button data-toggle="tooltip" title="Delete {{ $category->title }}" class="pd-setting-ed delete-category" data-id="{{ $category->id }}">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
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
                <form action="{{ route('admin.product-list.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Product Title" name="title" value="{{ old('title') }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price" name="price" value="{{ old('price') }}">
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-menu-task" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control @error('productStock') is-invalid @enderror" placeholder="Stock" name="productStock" value="{{ old('productStock') }}">
                                        @error('productStock')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-folder" aria-hidden="true"></i></span>
                                        <select name="category_id" class="form-control pro-edt-select form-control-primary @error('category_id') is-invalid @enderror" style="cursor: pointer" required>
                                            <option value="">Select Category</option>
                                            <?php
                                            foreach ($categories as $category): ?>
                                                <option value="{{ $category['id'] }}" {{ old('category_id') == $category['id'] ? 'selected' : '' }}>{{ $category['title'] }}</option>
                                            <?php endforeach; ?>
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <img id="add-product-image" src="{{ asset('assets/images/products/default.png') }}" alt="" style="width: 300px; height: 150px;">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <label class="custom-file-upload">
                                            <input type="file" id="add-image-upload" name="image" accept="image/*" required />
                                            Upload Image
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-pro-edt" style="margin: 10px 15px">
                            <textarea style="resize: none" rows="3" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Product Description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                <form action="{{ route('admin.product-list.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="productId" id="edit-product-id">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Product Title" name="title" id="edit-product-title" required>
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Price" name="price" id="edit-product-price">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-menu-task" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Stock" name="stock" id="edit-product-stock">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-folder" aria-hidden="true"></i></span>
                                        <select name="category_id" class="form-control pro-edt-select form-control-primary" id="edit-product-category" style="cursor: pointer" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category): 
                                                <option style="cursor: pointer" {{ $product->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <img id="edit-product-image" src="{{ asset('assets/images/products/default.png') }}" alt="" style="width: 300px; height: 150px;">
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <label class="custom-file-upload">
                                            <input type="file" id="edit-image-upload" name="image" accept="image/*" />
                                            Upload Image
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-pro-edt" style="margin: 10px 15px">
                            <textarea class="form-control" name="description" id="edit-product-description" placeholder="Product Description"></textarea>
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
                <form action="" method="POST" id="edit-category-form">
                    @csrf
                    @method('PATCH')
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> -->
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Product Title" name="title" id="edit-category-title" required>
                                    </div>
                                </div>
                        </div>
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
                    // document.getElementById('edit-image-upload').value = image;

                    // Open the edit product popup
                    document.getElementById('edit-product-popup').style.display = 'block';
                });
            });

            // Edit Category - Open Edit Popup and Fill the Data
            document.querySelectorAll('.edit-category').forEach(function (button) {
                button.addEventListener('click', function () {
                    var categoryId = this.getAttribute('data-id');
                    var title = this.getAttribute('data-title');

                    // Set the values in the edit form
                    document.getElementById('edit-category-form').action = "{{ route('admin.category.update', ':id') }}".replace(':id', categoryId);
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
                    image.src = '{{ asset("assets/images/products/default.png") }}';
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


        // Delete category
        document.querySelectorAll('.delete-category').forEach(button => {
            button.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete(`/admin/category/${categoryId}`, {
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        })
                        .then(response => {
                            if (response.data.success) {
                                // Swal.fire(
                                //     'Deleted!',
                                //     'Category has been deleted.',
                                //     'success'
                                // )

                                // toast
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-center',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Category has been deleted.'
                                })
                                location.reload();
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the category.',
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            Swal.fire(
                                'Error!',
                                error.response.data.message || 'An error occurred.',
                                'error'
                            );
                        });
                    }
                });
            });
        });


        // Delete product
        document.querySelectorAll('.delete-product').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                if(confirm("Are you sure you want to delete this product?")) {
                    $.ajax({
                        url: '{{ url('product-list') }}',
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
            // تنظیم Axios برای ارسال توکن CSRF
            axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

            // اضافه کردن event listener برای دکمه‌های status-toggle
            $('body').on('click', '.status-toggle', function() {
                var button = $(this);
                var productId = button.data('id');
                var currentStatus = button.data('status');
                var newStatus = currentStatus == 1 ? 0 : 1;

                // غیرفعال کردن دکمه و تغییر ظاهر آن
                button.attr('disabled', true);
                button.css('background-color', 'gray');

                // ارسال درخواست به سرور با استفاده از Axios
                axios.post('{{ route('admin.product-list.status') }}', {
                    id: productId,
                    status: newStatus
                })
                .then(function(response) {
                    if (response.data.success) {
                        if (newStatus == 1) {
                            button.data('status', 1).html('Active').removeClass('ds-setting').addClass('pd-setting');
                        } else {
                            button.data('status', 0).html('Inactive').removeClass('pd-setting').addClass('ds-setting');
                        }
                    } else {
                        alert('Failed to update status.');
                    }
                })
                .catch(function(error) {
                    console.error('Error in Axios request:', error);
                    alert('Error in updating status.');
                })
                .finally(function() {
                    // فعال کردن دکمه بعد از 1.5 ثانیه
                    setTimeout(function() {
                        button.attr('disabled', false);
                        button.removeAttr('style');
                    }, 1500);
                });
            });
        });


    </script>

@endsection