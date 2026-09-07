@extends('admin.layouts.master')
@section('content')
  <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Home About</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" target="_blank">Home</a></li>
          <li class="breadcrumb-item active">About</li>
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
			<form action="{{ route('setting.home.about.store') }}" method="POST" enctype="multipart/form-data">
		      @csrf
			    <div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Title</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="title" value="{{ old('title', $home_about->title ?? '') }}" class="form-control @error('title') is-invalid @enderror" required>
			            @error('title')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

            
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Description</b></label>
				    <div class="col-sm-10">
				    	<textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description', $home_about->description ?? '') }}</textarea>
			            @error('description')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>

                <div class="form-group row">
				    <label class="col-sm-2 col-form-label"><b>Youtube Link</b></label>
				    <div class="col-sm-10">
				      <input type="text" name="youtube_link" value="{{ old('youtube_link', $home_about->youtube_link ?? '') }}" class="form-control @error('youtube_link') is-invalid @enderror" required>
			            @error('youtube_link')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
				    </div>
				</div>
	
				</div>

				
		      <div class="form-group mx-3">
		        <button type="submit" class="btn btn-primary">Save</button>
		      </div>
		    </form>
		</div>	
	</div>
  </div>
</section>
@endsection

@section('scripts')

@endsection