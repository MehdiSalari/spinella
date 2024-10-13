@extends('admin.layout.master')
@if (Auth::user()->role != 'superadmin')
    {{ abort(403) }}
@endif
@section('content')

@if(Session::has('success'))
{{ toastify()->success(Session::get('success'), [
        'duration' => 3000,
]) }}
@endif

@if(Session::has(key: 'error'))
{{ toastify()->error(Session::get('error'), [
        'duration' => 3000,
]) }}
@endif

@foreach ($errors->all() as $error)
{{ toastify()->error($error, [
        'duration' => 3000,
])}}
@endforeach
        <div class="container-fluid">
            <div class="product-status mg-b-30" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Admins List</h4>
                            <div class="add-product">
                                <a href="#" id="open-add-popup">Add Admin</a>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Setting</th>
                                </tr>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        @if ($user->role != 'superadmin')
                                            @if ($user->status == 1)
                                                <button class="status-toggle pd-setting" data-id="{{ $user->id }}" data-status="1">Active</button>
                                            @else
                                                <button class="status-toggle ds-setting" data-id="{{ $user->id }}" data-status="0">Inactive</button>
                                            @endif
                                        @else
                                            <button style="background-color: gray; cursor: not-allowed" class="pd-setting disabled">Active</button>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $user->updated_at->format('d-m-Y') }}</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed edit-admin" 
                                            data-id="{{ $user->id }}" 
                                            data-name="{{ $user->name }}" 
                                            data-username="{{ $user->username }}" 
                                            data-email="{{ $user->email }}" 
                                            data-role="{{ $user->role }}" 
                                            data-status="{{ $user->status }}"
                                            data-superAdmins = "{{ $superAdmins->count() }}"
                                            data-action="edit">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        @if ($user->id != Auth::user()->id || $superAdmins->count() > 1)
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed delete-admin" data-id="{{ $user->id }}" data-action="delete">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Start Add Admin Pop-up Form -->
        <div id="add-admin-popup" class="popup">
            <div class="popup-content">
            <div class="popup-bg">
            <label style="color: white;font-size: 20px;" class="page-item"><i style="margin-right: 10px" class="icon nalika-plus" aria-hidden="true"></i>Add Admin</label>
                <form action="{{ route('admin.admins.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Usesrname" name="username" value="{{ old('username') }}">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-pro-edt">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <label style="color: white" for="role">Role</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-sitemap" aria-hidden="true"></i></span>
                                        <select name="role" class="form-control pro-edt-select form-control-primary @error('role') is-invalid @enderror" style="cursor: pointer" required>
                                            <option value="admin">Admin</option>
                                            <option value="superadmin">Super Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <label style="color: white" for="status">Status</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-tick" aria-hidden="true"></i></span>
                                        <select name="status" class="form-control pro-edt-select form-control-primary @error('status') is-invalid @enderror" style="cursor: pointer" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button name="AddAdmin" type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light close-popup">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- End Add Product Pop-up Form -->

        <!-- Start Edit Admin Pop-up Form -->
        <div id="edit-admin-popup" class="popup">
            <div class="popup-content">
            <div class="popup-bg">
            <label style="color: white;font-size: 20px;" class="page-item"><i style="margin-right: 10px" class="icon nalika-plus" aria-hidden="true"></i>Add Admin</label>
                <form id="edit-admin-form" action="" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="adminId" id="edit-admin-id">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                        <input type="text" id="edit-admin-name" class="form-control @error('title') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                        <input type="text" id="edit-admin-username" class="form-control @error('username') is-invalid @enderror" placeholder="Usesrname" name="username" value="{{ old('username') }}">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control @error('last_password') is-invalid @enderror" placeholder="Current Password" name="last_password" value="{{ old('last_password') }}">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" placeholder="New Password" name="new_password" value="{{ old('new_password') }}">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                        <input type="text" id="edit-admin-email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-pro-edt">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <label style="color: white" for="role">Role</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-sitemap" aria-hidden="true"></i></span>
                                        <select name="role" id="edit-admin-role" class="form-control pro-edt-select form-control-primary @error('role') is-invalid @enderror" style="cursor: pointer" required>
                                            <option value="admin">Admin</option>
                                            <option value="superadmin">Super Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <label style="color: white" for="status">Status</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-tick" aria-hidden="true"></i></span>
                                        <select name="status" id="edit-admin-status" class="form-control pro-edt-select form-control-primary @error('status') is-invalid @enderror" style="cursor: pointer" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button name="AddAdmin" type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light close-popup">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- End Edit Admin Pop-up Form -->

    <script>
        // JavaScript Code for Handling Popups and Data Transfer
        document.addEventListener('DOMContentLoaded', function () {
            // Open Add Admin Popup
            document.getElementById('open-add-popup').addEventListener('click', function () {
                document.getElementById('add-admin-popup').style.display = 'block';
            });

            // Edit Admin - Open Edit Popup and Fill the Data
            document.querySelectorAll('.edit-admin').forEach(function (button) {
                button.addEventListener('click', function () {
                    var adminId = this.getAttribute('data-id');
                    var name = this.getAttribute('data-name');
                    var username = this.getAttribute('data-username');
                    var email = this.getAttribute('data-email');
                    var role = this.getAttribute('data-role');
                    var status = this.getAttribute('data-status');
                    var superAdmins = this.getAttribute('data-superAdmins');

                    // Set the values in the edit form
                    document.getElementById('edit-admin-id').value = adminId;
                    document.getElementById('edit-admin-name').value = name;
                    document.getElementById('edit-admin-username').value = username;
                    document.getElementById('edit-admin-email').value = email;
                    document.getElementById('edit-admin-role').value = role;
                    document.getElementById('edit-admin-status').src = status;

                    // Set the role in the select box
                    var roleSelect = document.getElementById('edit-admin-role');
                    roleSelect.querySelectorAll('option').forEach(function (option) {
                        if (option.value == role) {
                            option.selected = true;
                        } else {
                            option.selected = false;
                        }
                    });

                    // Set the status in the select box
                    var statusSelect = document.getElementById('edit-admin-status');
                    statusSelect.querySelectorAll('option').forEach(function (option) {
                        if (option.value == status) {
                            option.selected = true;
                        } else {
                            option.selected = false;
                        }
                    });

                    if (superAdmins < 2 && role == 'superadmin') {
                        //disable 2 selects
                        document.getElementById('edit-admin-role').disabled = true;
                        document.getElementById('edit-admin-role').style.cursor = 'not-allowed';
                        document.getElementById('edit-admin-role').style.backgroundColor = '#152036';

                        document.getElementById('edit-admin-status').disabled = true;
                        document.getElementById('edit-admin-status').style.cursor = 'not-allowed';
                        document.getElementById('edit-admin-status').style.backgroundColor = '#152036';
                    } else {
                        document.getElementById('edit-admin-role').disabled = false;
                        document.getElementById('edit-admin-role').style.cursor = 'pointer';
                        
                        document.getElementById('edit-admin-status').disabled = false;
                        document.getElementById('edit-admin-status').style.cursor = 'pointer';
                    }


                    // Update the form action
                    document.getElementById('edit-admin-form').action = "{{ route('admin.admins.update'," + adminId + " ) }}";
                    // Open the edit admin popup
                    document.getElementById('edit-admin-popup').style.display = 'block';
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

        // Delete admin
        document.querySelectorAll('.delete-admin').forEach(button => {
            button.addEventListener('click', function() {
                const adminId = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        axios.delete(`{{ route('admin.admins.destroy', ':admin') }}`.replace(':admin', adminId), {
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        })
                        .then(response => {
                            if (response.data.success) {
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
                                    title: 'Admin has been deleted.'
                                })
                                location.reload();
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the admin.',
                                    'error'
                                )
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


        //update status
        $(document).ready(function() {
            // تنظیم Axios برای ارسال توکن CSRF
            axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

            // اضافه کردن event listener برای دکمه‌های status-toggle
            $('body').on('click', '.status-toggle', function() {
                var button = $(this);
                var adminId = button.data('id');
                var currentStatus = button.data('status');
                var newStatus = currentStatus == 1 ? 0 : 1;

                // غیرفعال کردن دکمه و تغییر ظاهر آن
                button.attr('disabled', true);
                button.css('background-color', 'gray');

                // ارسال درخواست به سرور با استفاده از Axios
                axios.post('{{ route('admin.admins.status') }}', {
                    id: adminId,
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