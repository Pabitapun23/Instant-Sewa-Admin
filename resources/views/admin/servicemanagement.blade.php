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
                    <label for="recipient-name" class="col-form-label" style="font-size: 14px">Sub_Category_ID:</label>
                      <select name="sub_categories_id" class="form-control" id="recipient-name" style="height:27px; width:50px; padding-left:20px;">
                        <option name="sub_categories_id" value="1">1</option>
                        <option name="sub_categories_id" value="2">2</option>
                        <option name="sub_categories_id" value="3">3</option>
                      </select>
                      <br>
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
                <th class="w-10p">
                  ID
                </th>
                <th class="w-10p">
                  Category
                </th>
                <th class="w-10p">
                  Services
                </th>
                <th class="w-10p">
                  Description
                </th>
                <th class="w-10p">
                  Quantity
                </th>
                <th class="w-10p">
                  Image
                </th>
                <th class="w-10p">
                </th>
                <th class="w-10p">
                </th>
              </thead>
              <tbody>
                <?php foreach ($servicemgmnt as $key){?>
                    <tr>
                      <td>
                        <?php echo $key->id ?>
                      </td>
                      <td>
                          Electrical
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
                        <?php echo $key->image ?>
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
