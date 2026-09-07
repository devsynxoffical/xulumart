@extends('admin.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Banner Top</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Banner</li>
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
                <form action="{{ route('gallery.banner.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    
                   <div class="col-md-6">
                     <div class="form-group">
                       <label>Image*</label>
                       <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  required>
                       @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                     </div>
                   </div>

                   <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Link</label>
                      <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" >
                    </div>
                  </div>

                   <div class="col-md-12 mt-4">
                     <div class="form-group">
                       <button class="btn btn-primary">Save</button>
                     </div>
                   </div>
                  </div>

                </form>
              </div>

            </div>
            <!-- /.card -->
	</div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
	<script>
  <script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</script>
@endsection