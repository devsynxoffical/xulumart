@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Menu (Categories Shown on the Menu Page)</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Menu</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">

    <!-- Add New -->
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Add Menu Item</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('store-menu.store') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="e.g. Men's, or Shirt" value="{{ old('title') }}" required>
                    @error('title')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Parent (leave blank for a top-level menu)</label>
                    <select name="parent_id" class="form-control">
                      <option value="">-- Top Level --</option>
                      @foreach($parentOptions as $p)
                        <option value="{{ $p->id }}">{{ $p->title }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>&nbsp;</label>
                    <div class="custom-control custom-switch" style="margin-top:8px;">
                      <input type="checkbox" class="custom-control-input" id="active_new" name="is_active" value="1" checked>
                      <label class="custom-control-label" for="active_new">Active (shown on site)</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description (optional - shown only for top-level items with no sub-items, e.g. "Eco Friendly Bags")</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- List -->
    @foreach($menus as $menu)
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title mb-0">
            {{ $menu->title }}
            @if(!$menu->is_active) <span class="badge badge-secondary">Inactive</span> @endif
          </h3>
          <div>
            <a href="#editModal{{ $menu->id }}" class="btn btn-primary btn-sm" data-toggle="modal" title="Edit"><i class="fas fa-edit"></i> Edit</a>
            <a href="#deleteModal{{ $menu->id }}" class="btn btn-danger btn-sm" data-toggle="modal" title="Delete"><i class="fas fa-trash"></i> Delete</a>
          </div>
        </div>
        <div class="card-body table-responsive">
          @if($menu->description)
            <p class="text-muted">{{ $menu->description }}</p>
          @endif
          @if($menu->child->count() > 0)
            <table class="table table-bordered table-sm">
              <thead><tr><th>Sub-item</th><th style="width:140px;">Status</th><th style="width:160px;">Action</th></tr></thead>
              <tbody>
                @foreach($menu->child as $sub)
                  <tr>
                    <td>{{ $sub->title }}</td>
                    <td>{{ $sub->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                      <a href="#editModal{{ $sub->id }}" class="btn btn-primary btn-sm" data-toggle="modal" title="Edit"><i class="fas fa-edit"></i></a>
                      <a href="#deleteModal{{ $sub->id }}" class="btn btn-danger btn-sm" data-toggle="modal" title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                  <!-- Edit Modal (sub-item) -->
                  <div class="modal fade" id="editModal{{ $sub->id }}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Edit - {{ $sub->title }}</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('store-menu.update', $sub->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label>Title *</label>
                              <input type="text" name="title" class="form-control" value="{{ $sub->title }}" required>
                            </div>
                            <div class="form-group">
                              <label>Parent</label>
                              <select name="parent_id" class="form-control">
                                <option value="">-- Top Level --</option>
                                @foreach($parentOptions as $p)
                                  <option value="{{ $p->id }}" @if($sub->parent_id == $p->id) selected @endif>{{ $p->title }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <input type="text" name="description" class="form-control" value="{{ $sub->description }}">
                            </div>
                            <div class="custom-control custom-switch mb-3">
                              <input type="checkbox" class="custom-control-input" id="active_edit{{ $sub->id }}" name="is_active" value="1" @if($sub->is_active) checked @endif>
                              <label class="custom-control-label" for="active_edit{{ $sub->id }}">Active</label>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary">Save Changes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Delete Modal (sub-item) -->
                  <div class="modal fade" id="deleteModal{{ $sub->id }}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Delete "{{ $sub->title }}"?</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('store-menu.destroy', $sub->id) }}" method="POST">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </tbody>
            </table>
          @else
            <p class="text-muted mb-0">No sub-items yet.</p>
          @endif
        </div>
      </div>

      <!-- Edit Modal (top-level item) -->
      <div class="modal fade" id="editModal{{ $menu->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit - {{ $menu->title }}</h5>
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('store-menu.update', $menu->id) }}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Title *</label>
                  <input type="text" name="title" class="form-control" value="{{ $menu->title }}" required>
                </div>
                <div class="form-group">
                  <label>Parent</label>
                  <select name="parent_id" class="form-control">
                    <option value="">-- Top Level --</option>
                    @foreach($parentOptions as $p)
                      @if($p->id != $menu->id)
                        <option value="{{ $p->id }}">{{ $p->title }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" name="description" class="form-control" value="{{ $menu->description }}">
                </div>
                <div class="custom-control custom-switch mb-3">
                  <input type="checkbox" class="custom-control-input" id="active_edit{{ $menu->id }}" name="is_active" value="1" @if($menu->is_active) checked @endif>
                  <label class="custom-control-label" for="active_edit{{ $menu->id }}">Active</label>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary">Save Changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete Modal (top-level item) -->
      <div class="modal fade" id="deleteModal{{ $menu->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete "{{ $menu->title }}"? This also deletes its sub-items.</h5>
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('store-menu.destroy', $menu->id) }}" method="POST">
                @csrf
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Permanent Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach

  </div>
</section>
@endsection
