@extends('layouts.master')
@section('title', 'Admin Dashboard - Users')
@section('content')
<div class="mb-4">
    <h2 class="mb-1">Dashboard Overview</h2>
</div>
<div class="row g-4">
    <div class="col-lg-12">
        <div class="data-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Orders</h5>
                <button type="button" id="add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-circle me-1"></i> Add User
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $users)
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->role}}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <form action="{{url('/dashboard/deleteUser/'.$users->id.'')}}" method="post">
                                        @csrf
                                        <button class="btn btn-danger" type="submit"  onclick="return confirm('jg lub men?')">Delete</button>
                                    </form>
                                    <button class="btn btn-warning" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit">Edit</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4">
                <form id="productForm" method="POST" action="{{url('/dashboard/addUsers')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header border-0 bg-dark text-white rounded-top-4 px-4 py-3">
                        <h5 class="modal-title fw-bold" id="exampleModalLabel">
                            <i class="bi bi-box-seam me-2"></i> Add User
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body px-4 py-4">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label fw-semibold text-dark">Name</label>
                                <input type="text" class="form-control form-control-lg rounded-3" id="name" name="name" placeholder="Enter product name" required>
                            </div>
                            <div class="col-md-12">
                                <label for="sku" class="form-label fw-semibold text-dark">Email</label>
                                <input type="email" class="form-control form-control-lg rounded-3" id="email" name="email" placeholder="Enter product email">
                            </div>
                            <div class="col-md-12">
                                <label for="password" class="form-label fw-semibold text-dark">Password</label>
                                <input type="password" class="form-control form-control-lg rounded-3" id="password" name="password" placeholder="Enter product password">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="form-label text-dark">Role</label>
                                <select name="role" id="role" class="form-select">
                                    <option value="" disabled  selected>-----Role-----</option>
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 px-4 pb-4">
                        <button type="button" class="btn btn-light border rounded-3 px-4" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i> Close
                        </button>
                        <button type="submit" id="saveProductBtn" class="btn btn-dark rounded-3 px-4">
                            <i class="bi bi-save2 me-1"></i> Save changes
                        </button>
                        <button type="submit" id="update" class="btn btn-warning rounded-3 px-4">
                             Edit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <style>
        .modal {
            z-index: 2000 !important;
        }

        .modal-backdrop {
            z-index: 1900 !important;
        }
    </style>
    <script>
        (function() {
            // Ensure DOM is ready
            document.addEventListener('DOMContentLoaded', function() {
                var saveBtn = document.getElementById('saveProductBtn');
                var form = document.getElementById('productForm');
                var modalEl = document.getElementById('exampleModal');

                // If the modal is inside a transformed or z-indexed parent it may render under the backdrop.
                // Move the modal element to document.body so Bootstrap's backdrop and stacking work correctly.
                try {
                    if (modalEl && modalEl.parentNode && modalEl.parentNode !== document.body) {
                        document.body.appendChild(modalEl);
                    }
                } catch (err) {
                    // ignore move errors and rely on z-index fallback above
                    console.warn('Could not move modal to body:', err);
                }

                if (!saveBtn || !form || !modalEl) return;



            });
        })();
    </script>
    <script>
        $(document).ready(function(){
            $('#add').click(function(){
                $('#exampleModalLabel').text('Add User');
                $('#update').hide();
                $('#saveProductBtn').show();
                $('#productForm').attr('action',`{{url('/dashboard/addUsers')}}`)
                $('#productForm')[0].reset();
            });
            $('#edit').click(function(){
                $('#exampleModalLabel').text('Edit User');
                $('#update').show();
                $('#saveProductBtn').hide();

                const row=$(this).closest('tr');
                const id=row.find('td:eq(0)').text().trim();
                const name=row.find('td:eq(1)').text().trim();
                const email=row.find('td:eq(2)').text().trim();
                const role=row.find('td:eq(3)').text().trim();

                $('#name').val(name);
                $('#email').val(email);
                $('#role').val(role);
                $('#productForm').attr('action',`{{url('/dashboard/editUser/${id}')}}`)
            })
        })
    </script>
</div>
@endsection