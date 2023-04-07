    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Products</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control" id="default-04"
                                                        placeholder="Quick search by id">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                                        data-bs-toggle="dropdown">Status</a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>New Items</span></a></li>
                                                            <li><a href="#"><span>Featured</span></a></li>
                                                            <li><a href="#"><span>Out of Stock</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a href="#" data-target="addProduct"
                                                    class="toggle btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-plus"></em></a>
                                                <a href="#" data-target="addProduct"
                                                    class="toggle btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add Product</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="pid">
                                                    <label class="custom-control-label" for="pid"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm"><span>Image</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Domain</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Name</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Category</span></div>
                                            <div class="nk-tb-col"><span>SKU</span></div>
                                            <div class="nk-tb-col"><span>Price</span></div>
                                            <div class="nk-tb-col"><span>Type</span></div>
                                            <div class="nk-tb-col"><span>Status</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Book Name</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Actions</span></div>
                                        </div>
                                        @foreach (json_decode($data) == null ? [] : json_decode($data) as $item => $val)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="pid1">
                                                        <label class="custom-control-label" for="pid1"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">
                                                        <div class="gallery">
                                                            <a class="gallery-image popup-image"
                                                                href="{{ $val->thumbnail }}">
                                                                <img class="rounded-top thumb"
                                                                    src="{{ $val->thumbnail }}" alt="">
                                                            </a>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">{{ $val->domain }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="title text-capitalize">{{ $val->name }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="title">{{ $val->category }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub">{{ $val->sku }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub">₹ {{ $val->price }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead">{{ $val->type }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub">{{ $val->status }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <div class="form-group">
                                                        @php
                                                            $eng = $val->book_name[0] ?? '';
                                                            $hin = $val->book_name[1] ?? '';
                                                        @endphp
                                                        <div class="form-control-wrap">
                                                            <input type="text" disabled
                                                                class="form-control form-control-sm"
                                                                placeholder="English Medium"
                                                                value="{{ $eng }}">
                                                        </div>
                                                        <div class="form-control-wrap">
                                                            <input type="text" disabled
                                                                class="form-control form-control-sm"
                                                                placeholder="Hndi Medium"
                                                                value="{{ $hin }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                        <li class="me-n1">
                                                            <div class="dropdown">
                                                                <a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="#">
                                                                                <em class="icon ni ni-file-plus"></em>
                                                                                <span>Generate Thumbnail</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="">
                                                                                <em class="icon ni ni-reload"></em>
                                                                                <span>Regenerate Thumbnail</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <em
                                                                                    class="icon ni ni-file-download"></em>
                                                                                <span>Download PDF</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct"
                        data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">New Product</h5>
                                <div class="nk-block-des">
                                    <p>Add information and add new product.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="product-title">Product Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="product-title">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="regular-price">Regular Price</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="regular-price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="sale-price">Sale Price</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="sale-price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="stock">Stock</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="stock">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="SKU">SKU</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="SKU">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="category">Category</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="category">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tags">Tags</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="tags">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="upload-zone small bg-lighter my-2">
                                        <div class="dz-message">
                                            <span class="dz-message-text">Drag and drop file</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                            New</span></button>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
