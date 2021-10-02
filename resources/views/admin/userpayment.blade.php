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
                    <label for="recipient-name" class="col-form-label">Amount:</label><br>
                    <input type="text" name="name" class="form-control" id="recipient-name">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Okay</button>
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
                  User-id
                </th>
                <th class="w-10p">
                  Username
                </th>
                <th class="w-10p">
                  Fullname
                </th>
                <th class="w-10p">
                  Remaining Payment
                </th>
                <th class="w-10p">
                </th>
              </thead>
              <tbody>
                <?php foreach ($serviceproviders as $key){?>
                    <tr>
                      <td>
                        <?php echo $key->id ?>
                      </td>
                      <td>
                          <?php echo $key->username ?>
                      </td>
                      <td>
                        <?php echo $key->fullname ?>
                      </td>
                      <td>
                        <?php echo $key->payment_remaining; ?>
                      </td>
                        <td>
                            <button type="button" class="btn btn-primary float-center" data-toggle="modal" data-target="#exampleModal">Pay</button>
                      </td>
                    </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <span>
            {{ $serviceproviders-> links()}}
        </span>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')

@endsection
