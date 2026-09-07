@extends('admin.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Deal Of The Day</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Deal</li>
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
                <form action="{{ route('gallery.deal.day.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    
                   <div class="col-md-6">
                     <div class="form-group">
                       <label class="form-label">Count Down Date</label>
                       <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"  required>
                       @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                     </div>
                   </div>

                   <div class="col-md-12 mt-4">
                     <div class="form-group">
                       <button class="btn btn-primary">Start Count Down</button>
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

</script>
@endsection