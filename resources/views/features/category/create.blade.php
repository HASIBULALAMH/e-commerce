@extends('master')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <a href="{{url('/category_list')}}" class="btn btn-primary float-end">
                        <i class="fas fa-plus"></i> Add New Category
                    </a>
                </div>
            </div>
            <div class="container mt-5">
                <h2>Create New Category</h2>
                <form action="{{url('/category_store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Category Name -->
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input name="name" type="text" class="form-control" id="categoryName"
                            placeholder="Enter category name" required />
                    </div>

                    <!-- Category Description -->
                    <div class="mb-3">
                        <label for="categoryDescription" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="categoryDescription" rows="3"
                            placeholder="Enter category description" required></textarea>
                    </div>

                    <!-- Category Image -->
                    <div class="mb-3">
                        <label for="categoryImage" class="form-label">Category Image</label>
                        <input name="image" class="form-control" type="file" id="categoryImage" />
                    </div>



                    <!-- Display Order -->
                    <div class="mb-3">
                        <label for="displayOrder" class="form-label">Display Order</label>
                        <input name="display_order" type="number" class="form-control" id="displayOrder"
                            placeholder="Enter display order" required />
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div class="form-check">
                            <input name="status" class="form-check-input" type="radio" name="status" id="statusActive"
                                value="active" checked />
                            <label class="form-check-label" for="statusActive">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusInactive"
                                value="inactive" />
                            <label class="form-check-label" for="statusInactive">
                                Inactive
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection