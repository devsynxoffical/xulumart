@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Create Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" target="_blank">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<section class="content"> 
  <div class="container-fluid">
    <div class="card card-primary card-outline">
      <div class="card-body">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row">
            <!-- Left Column: Main Product Info -->
            <div class="col-md-8">
              <div class="form-group">
                <label><b>Title *</b></label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="e.g. Apple MacBook Pro 16 M3 Max" required>
                @error('title')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><b>Category</b></label>
                    <select id="category_id" name="category_id" class="select2 form-control @error('category_id') is-invalid @enderror">
                      <option value="">-- Select Category --</option>
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><b>Sub Category</b></label>
                    <select id="sub_category" name="sub_category_id" class="select2 form-control @error('sub_category_id') is-invalid @enderror">
                      <option value="">-- Select Sub Category --</option>
                    </select>
                    @error('sub_category_id')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><b>Brand</b></label>
                    <select name="brand_id" class="select2 form-control @error('brand_id') is-invalid @enderror">
                      <option value="">-- Select Brand --</option>
                      @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->title }}</option>
                      @endforeach
                    </select>
                    @error('brand_id')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><b>Product SKU / ID</b></label>
                    <input type="text" name="code" value="{{ old('code') }}" placeholder="Auto-generated if left blank" class="form-control @error('code') is-invalid @enderror">
                    @error('code')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label><b>Regular Price ($) *</b></label>
                    <input type="number" step="0.01" name="price" value="{{ old('price') }}" placeholder="99.99" class="form-control @error('price') is-invalid @enderror" required>
                    @error('price')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label><b>Discount Price ($)</b></label>
                    <input type="number" step="0.01" name="discount_price" value="{{ old('discount_price') }}" placeholder="79.99" class="form-control @error('discount_price') is-invalid @enderror">
                    @error('discount_price')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label><b>Stock Quantity *</b></label>
                    <input type="number" name="qty" value="{{ old('qty', 10) }}" placeholder="10" class="form-control @error('qty') is-invalid @enderror" required>
                    @error('qty')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Sizes / Variations -->
              <div class="card card-secondary card-outline mt-3">
                <div class="card-header py-2">
                  <h3 class="card-title font-weight-bold" style="font-size: 15px;"><i class="fas fa-tags mr-1"></i> Product Variations / Sizes (Optional)</h3>
                </div>
                <div class="card-body">
                  <p class="text-muted small mb-2">Add variation rows (e.g. S, M, L, XL or 128GB, 256GB) with specific price and stock quantity if applicable.</p>
                  <table class="table table-sm table-bordered" id="variation-table">
                    <thead>
                      <tr class="bg-light">
                        <th style="width:40%;">Size / Option Label</th>
                        <th style="width:25%;">Price ($)</th>
                        <th style="width:25%;">Stock Qty</th>
                        <th style="width:10%; text-align:center;">Action</th>
                      </tr>
                    </thead>
                    <tbody id="variation-rows"></tbody>
                  </table>
                  <button type="button" id="add-variation-row" class="btn btn-outline-primary btn-sm mt-1"><i class="fas fa-plus mr-1"></i> Add Variation</button>
                </div>
              </div>

              <!-- Description & Features -->
              <div class="form-group mt-3">
                <label><b>Short Description</b></label>
                <textarea class="summernote form-control @error('short_description') is-invalid @enderror" name="short_description">{{ old('short_description') }}</textarea>
                @error('short_description')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <div class="form-group">
                <label><b>Full Description</b></label>
                <textarea class="summernote form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                @error('description')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <div class="form-group">
                <label><b>Features & Specifications Table</b></label>
                <textarea class="summernote form-control @error('features') is-invalid @enderror" name="features">{{ old('features', '<table class="table table-bordered" style="width:100%;"><tbody><tr><td style="width:40%;"><strong>Brand</strong></td><td>XuluMart</td></tr><tr><td><strong>Material / Type</strong></td><td>Premium Grade</td></tr><tr><td><strong>Warranty</strong></td><td>1 Year Official</td></tr></tbody></table>') }}</textarea>
                @error('features')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div>

            <!-- Right Column: Images, Badges, Promotion & SEO -->
            <div class="col-md-4">
              <!-- Images Card -->
              <div class="card card-outline card-info">
                <div class="card-header py-2">
                  <h3 class="card-title font-weight-bold" style="font-size: 15px;"><i class="fas fa-image mr-1"></i> Product Images</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label><b>Thumbnail Image *</b></label>
                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" accept="image/*" required>
                    <small class="text-muted d-block mt-1">Main product picture (JPG, PNG, WebP).</small>
                    @error('image')
                      <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>

                  <div class="form-group border-top pt-2">
                    <label><b>Hover Image (Optional)</b></label>
                    <input type="file" name="hover_image" class="form-control-file @error('hover_image') is-invalid @enderror" accept="image/*">
                    <small class="text-muted d-block mt-1">Shown on product card hover.</small>
                    @error('hover_image')
                      <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>

                  <div class="form-group border-top pt-2">
                    <label><b>Gallery Images (Optional)</b></label>
                    <input type="file" name="gallery[]" class="form-control-file @error('gallery') is-invalid @enderror" multiple accept="image/*">
                    <small class="text-muted d-block mt-1">Select multiple images for slider/gallery.</small>
                    @error('gallery')
                      <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Badges & Promotional Placement -->
              <div class="card card-outline card-warning mt-3">
                <div class="card-header py-2">
                  <h3 class="card-title font-weight-bold" style="font-size: 15px;"><i class="fas fa-bullhorn mr-1"></i> Promotion & Badges</h3>
                </div>
                <div class="card-body">
                  <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="is_new" name="is_new" value="1" {{ old('is_new', 1) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="is_new">✨ New Arrival (Featured Section)</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="is_sale" name="is_sale" value="1" {{ old('is_sale') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="is_sale">🏷️ On Sale / Special Discount</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="is_special" name="is_special" value="1" {{ old('is_special') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="is_special">⭐ Special Offer (Hot Deals)</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="flash_sale" name="flash_sale" value="1" {{ old('flash_sale') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="flash_sale">⚡ Flash Sale</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-2 border-top pt-2">
                    <input type="checkbox" class="custom-control-input" id="deal_of_day" name="deal_of_day" value="1" {{ old('deal_of_day') ? 'checked' : '' }}>
                    <label class="custom-control-label text-danger font-weight-bold" for="deal_of_day">🔥 Deal Of The Day (Homepage Hero)</label>
                  </div>

                  <div class="form-group mt-2">
                    <label class="small font-weight-bold">Deal Countdown End Date</label>
                    <input type="date" name="deal_of_day_count" value="{{ old('deal_of_day_count') }}" class="form-control form-control-sm @error('deal_of_day_count') is-invalid @enderror">
                    <small class="text-muted">Target expiry date for homepage live timer.</small>
                    @error('deal_of_day_count')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>

                  <div class="form-group border-top pt-2">
                    <label class="font-weight-bold">Publish Status</label>
                    <select class="custom-select" name="status">
                      <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Published (Active)</option>
                      <option value="0" {{ old('status') === '0' ? 'selected' : '' }}>Draft (Inactive)</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- SEO Meta -->
              <div class="card card-outline card-secondary mt-3">
                <div class="card-header py-2">
                  <h3 class="card-title font-weight-bold" style="font-size: 15px;"><i class="fas fa-search mr-1"></i> SEO & Search Meta</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="small">Tags (Comma-separated)</label>
                    <input type="text" name="tags" value="{{ old('tags') }}" class="form-control form-control-sm" placeholder="electronics, gadget, sale">
                  </div>

                  <div class="form-group">
                    <label class="small">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="form-control form-control-sm" placeholder="Meta title for Google">
                  </div>

                  <div class="form-group">
                    <label class="small">Meta Description</label>
                    <textarea name="meta_description" rows="2" class="form-control form-control-sm" placeholder="Brief search snippet">{{ old('meta_description') }}</textarea>
                  </div>

                  <div class="form-group">
                    <label class="small">Meta Keywords</label>
                    <input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}" class="form-control form-control-sm" placeholder="online shopping, discount">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('product.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left mr-1"></i> Back to Product List</a>
            <button type="submit" class="btn btn-success btn-lg px-4 font-weight-bold"><i class="fas fa-save mr-1"></i> Save & Publish Product</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  $(document).ready(function() {
    // Dynamic Subcategory AJAX
    $('#category_id').on('change', function() {
      var category_id = $(this).val();
      var subCategorySelect = $('#sub_category');
      
      if (!category_id) {
        subCategorySelect.html('<option value="">-- Select Sub Category --</option>').trigger('change');
        return;
      }

      var url = "{{ url('/get-sub-category') }}/" + category_id;
      $.get(url, function(data) {
        var options = '<option value="">-- Select Sub Category --</option>';
        try {
          var list = (typeof data === 'string') ? JSON.parse(data) : data;
          list.forEach(function(item) {
            options += '<option value="' + item.id + '">' + item.title + '</option>';
          });
        } catch(e) {
          console.error("Subcategory parse error:", e);
        }
        subCategorySelect.html(options).trigger('change');
      });
    });

    // Variations Table Row Handler
    var tbody = document.getElementById('variation-rows');
    var addBtn = document.getElementById('add-variation-row');
    if (addBtn && tbody) {
      addBtn.addEventListener('click', function() {
        var tr = document.createElement('tr');
        tr.innerHTML = '<td><input type="text" name="variant[]" class="form-control form-control-sm" placeholder="e.g. XL / Red / 256GB"></td>' +
          '<td><input type="number" step="0.01" name="variant_price[]" class="form-control form-control-sm" placeholder="Price"></td>' +
          '<td><input type="number" name="variant_qty[]" class="form-control form-control-sm" placeholder="Stock"></td>' +
          '<td class="text-center"><button type="button" class="btn btn-danger btn-sm remove-variation-row"><i class="fas fa-times"></i></button></td>';
        tbody.appendChild(tr);
      });

      tbody.addEventListener('click', function(e) {
        var target = e.target.closest('.remove-variation-row');
        if (target) {
          target.closest('tr').remove();
        }
      });
    }
  });
</script>
@endsection