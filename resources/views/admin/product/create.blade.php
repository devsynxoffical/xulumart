@extends('admin.layouts.master')
@section('content')
  <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Create Product</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" target="_blank">Home</a></li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content"> 
  <div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
		      @csrf
			    <div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Title *</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" required>
			            @error('title')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Category </b></label>
				    <div class="col-sm-10">
				    	<select id="category_id" name="category_id" class="select2 form-control @error('category_id') is-invalid @enderror">
				    		<option value="">Please Select a Category</option>
				    		@foreach($categories as $category)
				    		<option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->title }}</option>
				    		@endforeach
				    	</select>
			            @error('category_id')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Sub Category </b></label>
				    <div class="col-sm-10">
				    	<select id="sub_category" name="sub_category_id" class="select2 form-control @error('sub_category_id') is-invalid @enderror">
				    		<option value="">Please Select a Sub Category</option>
				    		
				    	</select>
			            @error('sub_category_id')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Brand </b></label>
				    <div class="col-sm-10">
				    	<select name="brand_id" class="select2 form-control @error('brand_id') is-invalid @enderror">
				    		@foreach($brands as $brand)
				    		<option value="{{ $brand->id }}" {{ $brand->id == old('brand_id') ? 'selected' : '' }}>{{ $brand->title }}</option>
				    		@endforeach
				    	</select>
			            @error('brand_id')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
                
                {{--
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Unit Type</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="unit" value="{{ old('unit') }}" placeholder="Piece" class="form-control @error('unit') is-invalid @enderror">
			            @error('unit')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Size</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="size" value="{{ old('size') }}" class="form-control @error('size') is-invalid @enderror">
			            @error('size')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Color</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="color" value="{{ old('color') }}" class="form-control @error('color') is-invalid @enderror">
			            @error('color')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Febric</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="febric" value="{{ old('febric') }}" class="form-control @error('febric') is-invalid @enderror">
			            @error('febric')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Tubs</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="tubs" value="{{ old('tubs') }}" class="form-control @error('tubs') is-invalid @enderror">
			            @error('tubs')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Handel</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="handel" value="{{ old('handel') }}" class="form-control @error('handel') is-invalid @enderror">
			            @error('handel')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				
				--}}
				
				
                
                {{--
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Weight (Kg)</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="weight" value="{{ old('weight') }}" class="form-control @error('weight') is-invalid @enderror" required>
			            @error('weight')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				--}}

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Thumbnail *</b></label>
				    <div class="col-sm-10">
				      <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
			            @error('image')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b> Hover Image </b></label>
				    <div class="col-sm-10">
				      <input type="file" name="hover_image" class="form-control @error('hover_image') is-invalid @enderror">
				      <small class="form-text text-muted">Optional - shown on hover in product listings.</small>
			            @error('hover_image')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
 
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b> Gallery </b></label>
				    <div class="col-sm-10">
				      <input type="file" name="gallery[]" class="form-control @error('gallery') is-invalid @enderror" multiple accept="image/*">
				      <small class="form-text text-muted">Optional - additional product images.</small>
			            @error('gallery')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span> 
			            @enderror
				    </div>
				</div>
				
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Product ID</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="code" value="{{ old('code') }}" class="form-control @error('code') is-invalid @enderror">
			            @error('code')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

				<!-- <div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Type</b></label>
				    <div class="col-sm-10">
				    	<label><input type="radio" name="type" value="single" checked> Single </label>
				    	<label><input type="radio" name="type" value="variation"> Variation </label>
				      
			            @error('type')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div> -->
		      	
		      	<div id="single">
		      
		      	<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Price *</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror">
			            @error('price')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

				{{-- <div class="form-group row">
				    <label><input type="checkbox" name="is_sale" value="1" class=""> Active Offer</label>
				</div> --}}

				<div class="form-group row">
				    <label><input type="checkbox" name="is_new" value="1" class=""> Is New Arrival </label>
				</div>

				<div class="form-group row">
				    <label><input type="checkbox" name="is_special" value="1" class=""> Is Special Offer</label>
				</div>

				<div class="form-group row">
				    <label><input type="checkbox" name="flash_sale" value="1" class=""> Flash Sale</label>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Discount Price *</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="discount_price" value="{{ old('discount_price') }}" class="form-control @error('discount_price') is-invalid @enderror">
			            @error('discount_price')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
			
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Quantity *</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="qty" value="{{ old('qty') }}" class="form-control @error('qty') is-invalid @enderror">
			            @error('qty')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

				<!-- ================= Sizes / Variations ================= -->
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Sizes / Variations</b></label>
				    <div class="col-sm-10">
				        <p class="text-muted" style="font-size:12px;margin-bottom:8px;">
				            Optional. Add a row per size/option (e.g. S, M, L, XL) with its own price and stock.
				            If you add at least one row here, a size selector will automatically appear on this
				            product's page. Leave empty to sell the product without sizes.
				        </p>
				        <table class="table table-bordered" id="variation-table">
				            <thead>
				                <tr>
				                    <th style="width:35%;">Size / Label</th>
				                    <th style="width:25%;">Price</th>
				                    <th style="width:25%;">Stock Qty</th>
				                    <th style="width:15%;"></th>
				                </tr>
				            </thead>
				            <tbody id="variation-rows"></tbody>
				        </table>
				        <button type="button" id="add-variation-row" class="btn btn-outline-primary btn-sm">+ Add Size</button>
				    </div>
				</div>
				<script>
				document.addEventListener('DOMContentLoaded', function () {
				    var tbody = document.getElementById('variation-rows');
				    document.getElementById('add-variation-row').addEventListener('click', function () {
				        var tr = document.createElement('tr');
				        tr.innerHTML = '<td><input type="text" name="variant[]" class="form-control" placeholder="e.g. M"></td>' +
				            '<td><input type="number" step="0.01" name="variant_price[]" class="form-control"></td>' +
				            '<td><input type="number" name="variant_qty[]" class="form-control"></td>' +
				            '<td><button type="button" class="btn btn-danger btn-sm remove-variation-row">&times;</button></td>';
				        tbody.appendChild(tr);
				    });
				    tbody.addEventListener('click', function (e) {
				        if (e.target.classList.contains('remove-variation-row')) {
				            e.target.closest('tr').remove();
				        }
				    });
				});
				</script>
				<!-- ================= /Sizes / Variations ================= -->
				
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Features</b></label>
				    <div class="col-sm-10">
				    	<textarea class="form-control @error('features') is-invalid @enderror" name="features">
				    	    <table class="table table-bordered" style="border-collapse: collapse; width: 100%;">
                                <tbody>
                                <tr>
                                    <td style="width: 50%;">Company</td>
                                    <td style="width: 50%;">&nbsp; Laramart </td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;">Size</td>
                                    <td style="width: 50%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;">Febric</td> 
                                    <td style="width: 50%;"></td>
                                </tr> 
                                <tr>
                                    <td style="width: 50%;">Tubs</td>
                                    <td style="width: 50%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;">Handel</td>
                                    <td style="width: 50%;"></td>
                                </tr>
                                </tbody>
                            </table>
				    	</textarea>
			            @error('features')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Description *</b></label>
				    <div class="col-sm-10">
				    	<textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
			            @error('description')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Short Description </b></label>
				    <div class="col-sm-10">
				    	<textarea class="form-control @error('short_description') is-invalid @enderror" name="short_description"></textarea>
			            @error('short_description')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Tags</b></label>
				    <div class="col-sm-10">
				    	<input type="text" name="tags" value="{{ old('tags') }}" class="form-control @error('tags') is-invalid @enderror" >
			            @error('tags')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Meta Title</b></label>
				    <div class="col-sm-10">
				    	<input type="text" name="meta_title" value="{{ old('meta_title') }}" class="form-control @error('meta_title') is-invalid @enderror" >
			            @error('meta_title')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Meta Description</b></label>
				    <div class="col-sm-10">
				    	<input type="text" name="meta_description" value="{{ old('meta_description') }}" class="form-control @error('meta_description') is-invalid @enderror" >
			            @error('meta_description')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Meta Keywords</b></label>
				    <div class="col-sm-10">
				    	<input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}" class="form-control @error('meta_keywords') is-invalid @enderror" >
			            @error('meta_keywords')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
				</div>

				<div id="variation" style="display: none;">
					<livewire:producttype /> 
				</div>
				
		      <div class="form-group">
		        <button type="submit" class="btn btn-primary">Save</button>
		      </div>
		    </form>
		</div>	
	</div>
  </div>
</section>
@endsection

@section('scripts')
<script>
    $('#category_id').change(function(){
        var category_id = $(this).val();
        if (category_id == ''){
            category_id = -1;
        }
        var option = "";
        var url = "{{ url('/') }}";

        $.get( url + "/get-sub-category/"+category_id, function( data ) {
            data = JSON.parse(data);
            data.forEach(function (element) {
                option += "<option value='"+ element.id +"'>"+ element.title + "</option>";
            });
            //console.log(option);
            $('#sub_category').html(option);
        });

    });
</script>
<script>
    $(document).ready(function() {
        $("input[type='radio']").change(function() {
            if ($(this).val() == "variation") {
                $("#variation").show();
            } 
            else {
                $("#variation").hide();
            }

            if ($(this).val() == "single") {
                $("#single").show();
            } 
            else {
                $("#single").hide();
            }
        });
    });
</script>
@endsection