@extends('admin.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Slider Settings</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('index') }}" target="_blank">Home</a></li>
          <li class="breadcrumb-item active">Slider</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
	<div class="container-fluid">

        <!-- Add New Slide -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add New Slide</h3>
              </div>
              <div class="card-body">
                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Slide Image (Recommended: 1903 x 520 px, max 5MB, jpg/png/webp)</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" required>
                        @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Link (where this slide should redirect when clicked)</label>
                        <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" placeholder="https://...">
                        @error('link')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">Add Slide</button>
                    </div>
                  </div>
                </form>
              </div>
        </div>

        <!-- Existing Slides -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Existing Slides ({{ $sliders->count() }})</h3>
              </div>
              <div class="card-body table-responsive">
                @if($sliders->count() == 0)
                    <p class="text-muted mb-0">No slides yet. Add your first slide above.</p>
                @endif
                <div class="row">
                  @foreach($sliders as $slider)
                    <div class="col-md-6 col-lg-4 p-2">
                      <div class="card">
                        <img src="{{ asset('images/slider/'. $slider->image) }}" class="card-img-top" style="height:160px;object-fit:cover;">
                        <div class="card-body">
                            <!-- Update this specific slide's image/link -->
                            <form action="{{ route('slider.update') }}" method="POST" enctype="multipart/form-data" class="mb-2">
                                @csrf
                                <input type="hidden" name="position" value="{{ $slider->id }}">
                                <div class="form-group">
                                    <label class="small">Replace Image</label>
                                    <input type="file" name="image" class="form-control form-control-sm" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label class="small">Link</label>
                                    <input type="text" name="link" value="{{ $slider->link }}" class="form-control form-control-sm">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                            </form>
                            <!-- Delete this slide -->
                            <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('Delete this slide?');">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Delete Slide</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <!-- /.card-body -->
        </div>
        <!-- /.card -->
	</div>
</section>
@endsection

@section('scripts')
	<script>

</script>
@endsection