@extends('layouts.master')

@section('title')
    Service Management | Instant Sewa
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/save-services" method="POST">
            {{ csrf_field() }}

            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Subcategory:</label><br>
                    <input type="text" name="name" class="form-control" id="recipient-name">
                  </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Description:</label><br>
                    <textarea name="description" class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Quantity:</label><br>
                    <input type="text" name="quantity" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Image:</label><br>
                    <input type="text" name="image" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Sub_Category_ID:</label><br>
                    <input type="text" name="sub_categories_id" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Payment:</label><br>
                    <input type="text" name="payment" class="form-control" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
        </form>
      </div>
    </div>
  </div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Services Management &nbsp
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
          </h4>
        </div>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Subcategory
                </th>
                <th>
                  Description
                </th>
                <th>
                  Quantity
                </th>
                <th>
                  Image
                </th>
                <th>
                </th>
                <th>
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Electricity
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    1
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    2
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Painting
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    1
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    4
                  </td>
                  <td>
                    Cleaning
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    3
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')

@endsection
