@extends("admin_dashboard.layouts.app")

@section("style")
<link href="{{ asset('admin_dashboard_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">eCommerce</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="p-4 card-body">
                <h5 class="card-title">Add New Post</h5>
                <hr />
                <div class="mt-4 form-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-4 border rounded border-3">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Post Title</label>
                                    <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Post Slug</label>
                                    <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Post Excerpt</label>
                                    <textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Post Category</label>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="p-3 border rounded">
                                                <div class="mb-3">
                                                    <select class="single-select">

                                                        @foreach ($categories as $key => $category)
                                                        <option value="{{ $key }}">{{ $category }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Post Content</label>


                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Product Images</label>
                                    <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-4 border rounded border-3">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputPrice" class="form-label">Price</label>
                                        <input type="email" class="form-control" id="inputPrice" placeholder="00.00">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCompareatprice" class="form-label">Compare at Price</label>
                                        <input type="password" class="form-control" id="inputCompareatprice" placeholder="00.00">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCostPerPrice" class="form-label">Cost Per Price</label>
                                        <input type="email" class="form-control" id="inputCostPerPrice" placeholder="00.00">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputStarPoints" class="form-label">Star Points</label>
                                        <input type="password" class="form-control" id="inputStarPoints" placeholder="00.00">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputProductType" class="form-label">Product Type</label>
                                        <select class="form-select" id="inputProductType">
                                            <option></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputVendor" class="form-label">Vendor</label>
                                        <select class="form-select" id="inputVendor">
                                            <option></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputCollection" class="form-label">Collection</label>
                                        <select class="form-select" id="inputCollection">
                                            <option></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputProductTags" class="form-label">Product Tags</label>
                                        <input type="text" class="form-control" id="inputProductTags" placeholder="Enter Product Tags">
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-primary">Save Product</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
@endsection

@section("script")
<script src="{{ asset('admin_dashboard_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script src="{{ asset('admin_dashboard_assets/plugins/select2/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function () {
		$('#image-uploadify').imageuploadify();
    })

    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>
@endsection