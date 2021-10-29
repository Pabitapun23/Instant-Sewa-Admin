@extends('layouts.nosidebar')

@section('title')
    Edit Page | Instant Sewa
@endsection


@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Services Management - Edit Page &nbsp
            </h4>
          </div>
          <div class="card-body">
            <form action="{{ url('service-management-update/'.$services->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Subcategory:</label><br>
                        <input type="text" name="name" class="form-control" value="{{ $services->name }}">
                      </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Description:</label><br>
                        <textarea name="description" class="form-control">{{ $services->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Quantity:</label><br>
                        <input type="text" name="quantity" class="form-control" value="{{ $services->quantity }}">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Image:</label><br>
                        <input type="text" name="image" class="form-control" value="{{ $services->image }}">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Sub_Category_ID:</label><br>
                        <input type="text" name="sub_categories_id" class="form-control" value="{{ $services->sub_categories_id }}">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Payment:</label><br>
                        <input type="text" name="payment" class="form-control" value="{{ $services->payment }}">
                    </div>
                </div>
                <div class="modal-footer">
                  <a href="{{ url('service-management/')}}" class="btn btn-secondary" data-dismiss="modal">BACK</a>
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
