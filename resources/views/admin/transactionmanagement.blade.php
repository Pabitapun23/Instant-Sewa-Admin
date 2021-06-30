@extends('layouts.master')

@section('title')
    User Manage | Instant Sewa
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Transaction Management</h4>
            <p class="card-category">Here all the transactions are managed</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Payment ID
                </th>
                <th>
                  Payer ID
                </th>
                <th>
                  Payer Email
                </th>
                <th>
                  Cart ID
                </th>
                <th>
                  Amount
                </th>
                <th>
                  Currency
                </th>
                <th>
                    Payment Status
                </th>
                <th>
                    Created At
                </th>
                <th>
                    Updated At
                </th>
              </thead>
              <tbody>
                <?php foreach ($serviceprovider as $key){?>
                <tr>
                  <td>
                    <?php echo $key->id ?>
                  </td>
                  <td>
                    <?php echo $key->username ?>
                  </td>
                  <td>
                    <?php echo $key->phoneno; ?>
                  </td>
                  <td>
                    <?php echo $key->email; ?>
                  </td>
                  <td>
                    <?php echo $key->address_address ?>
                  </td>
                  <td>
                    <?php echo $key->rating ?>
                  </td>
                  <td>
                    <?php echo $key->occupation ?>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <span>
         {{ $serviceprovider-> links()}}
        </span>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
