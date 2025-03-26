@extends('master')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- Back to Brand List Button -->
            <div class="row mb-2">
                <div class="col-12">
                    <a href="{{ route('brand_list') }}" class="btn btn-secondary float-end">
                        <i class="fas fa-arrow-left"></i> Back to Brand List
                    </a>
                </div>
            </div>

            <!-- Brand Create Form -->
            <div class="container mt-5">
                <h2>Create New Brand</h2>
                <form action="{{route('brand_store')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <!-- Brand Name -->
                    <div class="mb-3">
                        <label for="brandName" class="form-label">Brand Name</label>
                        <input name="name" type="text" class="form-control" id="brandName"
                            placeholder="Enter brand name" required />
                    </div>

                    <!-- Brand Description -->
                    <div class="mb-3">
                        <label for="brandDescription" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="brandDescription" rows="3"
                            placeholder="Enter brand description" required></textarea>
                    </div>

                    <!-- Brand Logo Upload -->
                    <div class="mb-3">
                        <label for="brandLogo" class="form-label">Brand Logo</label>
                        <input name="logo" class="form-control" type="file" id="brandLogo" required />
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div class="form-check">
                            <input name="status" class="form-check-input" type="radio" id="statusActive" value="active"
                                checked />
                            <label class="form-check-label" for="statusActive">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input name="status" class="form-check-input" type="radio" id="statusInactive"
                                value="inactive" />
                            <label class="form-check-label" for="statusInactive">
                                Inactive
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create Brand</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection