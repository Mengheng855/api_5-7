@extends('layouts.master')
@section('title', 'Admin Dashboard - Products')
@section('content')
<div class="mb-4">
    <h2 class="mb-1">Dashboard Overview</h2>
</div>
<div class="row g-4">
    <div class="col-lg-12">
        <div class="data-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Orders</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-circle me-1"></i> Add User
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Title</th>
                            <th>Sub title</th>
                            <th>Price</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getData as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->title }}</td>
                            <td>{{$data->sub_title }}</td>
                            <td>{{$data->price }}</td>
                            <td>{{$data->description }}</td>
                            <td><img src="{{$data->image}}" alt="" width="60px" height="60px" class="rounded-circle"></td>
                            <td>
                                <button class="btn btn-danger" type="submit">Delete</button>
                                <button class="btn btn-warning" type="submit">Edit</button>
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
                <form id="productForm" method="POST" action="{{url('/dashboard/addProduct')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header border-0 bg-dark text-white rounded-top-4 px-4 py-3">
                        <h5 class="modal-title fw-bold" id="exampleModalLabel">
                            <i class="bi bi-box-seam me-2"></i> Add Product
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body px-4 py-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label text-dark fw-semibold">Product title</label>
                                <input type="text" class="form-control rounded-3" id="name" name="title" placeholder="Enter product title">
                            </div>
                            <div class="col-md-6">
                                <label for="sku" class="form-label text-dark fw-semibold">Sub-title</label>
                                <input type="text" class="form-control rounded-3" id="sub_title" name="sub_title" placeholder="Enter product sub-title">
                            </div>
                            <div class="col-md-12">
                                <label for="price" class="form-label text-dark fw-semibold">Price</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" step="1" class="form-control rounded-end-3" id="price" name="price" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-12">
                                    <label for="description" class="form-label text-dark fw-semibold">Description</label>
                                    <textarea class="form-control rounded-3" id="description" name="description" cols="9" rows="4" placeholder="Short description"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="image" class="form-label text-dark fw-semibold">Image</label>
                                    <input class="form-control" type="file" id="image" name="image">
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
                        </div>
                </form>
            </div>
        </div>
    </div>


    <style>
        /* If other layout elements create stacking contexts, the modal can appear underneath.
           Force higher z-index as a safe fallback. */
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

</div>
@endsection