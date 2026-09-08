@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 font-weight-bold">Products Management</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary card-outline">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title font-weight-bold"><i class="fas fa-boxes mr-1"></i> All Products ({{ $products->count() }})</h3>
        <div class="card-tools ml-auto">
          <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm font-weight-bold"><i class="fas fa-plus mr-1"></i> Add New Product</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive">
        <table id="example2" class="table table-bordered table-hover align-middle">
          <thead class="bg-light">
            <tr>
              <th style="width: 50px;">#</th>
              <th style="width: 70px;">Image</th>
              <th>Product Details</th>
              <th>Category & Brand</th>
              <th>Price & Discount</th>
              <th>Stock</th>
              <th>Badges</th>
              <th>Status</th>
              <th style="width: 140px; text-align: center;">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td class="text-center p-1">
                  <img src="{{ \App\Helpers\Media::url('product', $product->image) }}" class="rounded border shadow-sm" width="60" height="60" style="object-fit: cover;" alt="{{ $product->title }}">
                </td>
                <td>
                  <strong>{{ $product->title }}</strong>
                  <div class="small text-muted">
                    SKU: <code>{{ $product->code ?? 'N/A' }}</code>
                  </div>
                </td>
                <td>
                  <div><span class="badge badge-info">{{ optional($product->category)->title ?? 'Uncategorized' }}</span></div>
                  @if($product->brand)
                    <div class="small text-muted mt-1"><i class="fas fa-tag mr-1"></i>{{ $product->brand->title }}</div>
                  @endif
                </td>
                <td>
                  <div class="font-weight-bold text-dark">${{ number_format((float)($product->price ?? 0), 2) }}</div>
                  @if($product->discount_price && $product->discount_price < $product->price)
                    <div class="small text-danger font-weight-bold">
                      Sale: ${{ number_format((float)$product->discount_price, 2) }}
                    </div>
                  @endif
                </td>
                <td>
                  @if(($product->qty ?? 0) <= 0)
                    <span class="badge badge-danger">Out of Stock</span>
                  @elseif(($product->qty ?? 0) < 5)
                    <span class="badge badge-warning">Low: {{ $product->qty }}</span>
                  @else
                    <span class="badge badge-light border">{{ $product->qty }} in stock</span>
                  @endif
                </td>
                <td>
                  @if($product->deal_of_day)
                    <span class="badge badge-danger" title="Deal Of The Day"><i class="fas fa-fire"></i> Deal</span>
                  @endif
                  @if($product->flash_sale)
                    <span class="badge badge-warning" title="Flash Sale"><i class="fas fa-bolt"></i> Flash</span>
                  @endif
                  @if($product->is_new)
                    <span class="badge badge-success">New</span>
                  @endif
                  @if($product->is_special)
                    <span class="badge badge-primary">Special</span>
                  @endif
                </td>
                <td>
                  <span class="badge badge-{{ $product->is_active == 1 ? 'success' : 'secondary' }}">
                    {{ $product->is_active == 1 ? 'Active' : 'Inactive' }}
                  </span>
                </td>
                <td class="text-center">
                  <div class="btn-group btn-group-sm">
                    <a href="{{ route('single.product', $product->id) }}" target="_blank" class="btn btn-outline-info" title="View on Frontend"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary" title="Edit Product"><i class="fas fa-edit"></i></a>
                    <a href="#deleteModal{{ $product->id }}" class="btn btn-danger" data-toggle="modal" title="Delete"><i class="fas fa-trash"></i></a>
                  </div>

                  <!-- Delete product Modal -->
                  <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                          <h5 class="modal-title font-weight-bold"><i class="fas fa-exclamation-triangle mr-1"></i> Confirm Delete</h5>
                          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-left">
                          <p>Are you sure you want to delete product <strong>"{{ $product->title }}"</strong>?</p>
                          <p class="text-muted small">This will also delete associated variation options and gallery images.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                          <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm font-weight-bold">Delete Product</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "order": [[ 0, "asc" ]]
    });
  });
</script>
@endsection