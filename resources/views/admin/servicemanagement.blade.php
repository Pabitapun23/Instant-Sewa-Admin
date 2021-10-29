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
        <form action="/save-services" method="POST" >
            {{ csrf_field() }}

            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Services:</label><br>
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
                    <label for="recipient-name" class="col-form-label" style="font-size: 14px">Sub Category Id:</label>
                      <select name="subCategoryId" class="form-control" id="recipient-name" style="height:27px; width:200px; padding-left:20px;">
                        <?php foreach ($subCategoriesId as $key){?><option name="subCategoryId" value="<?php echo $key ?>"><?php echo $key ?></option><?php }?>
                      </select>
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
            <button type="button" class="btn btn-white float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
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
                  Category
                </th>
                <th>
                  Services
                </th>
                <th>
                   Description
                </th>
                <th>
                   Quantity
                </th>
                <th>
                   Payment
                </th>
                <th>
                </th>
                <th>
                </th>
                <th>
                </th>
              </thead>
              <tbody>
                <?php foreach ($servicemgmnt as $key){?>
                    <tr>
                      <td>
                        <?php echo $key->id ?>
                      </td>
                      <td>
                        <?php echo $key->categoryname ?>
                      </td>
                      <td>
                        <?php echo $key->name ?>
                      </td>
                      <td>
                        <?php echo $key->description; ?>
                      </td>
                      <td>
                        <?php echo $key->email; ?>
                      </td>
                      <td>
                        <?php echo $key->quantity ?>
                      </td>
                      <td>
                        <?php echo $key->payment ?>
                      </td>
                      <td>
                        <a href="{{ url('service-management/'. $key->id)}}" class="btn btn-success">EDIT</a>
                      </td>
                      <td>
                        <form action="{{ url('service-management-delete/'.$key->id)}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                      </td>
                    </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <span>
            {{ $servicemgmnt-> links()}}
        </span>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')

@endsection
