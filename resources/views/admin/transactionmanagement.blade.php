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
                  Cart Name
                </th>
                <th>
                  Payer Name
                </th>
                <th>
                  Payer Email
                </th>
                <th>
                  Payee Name
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
                <?php foreach ($payment as $key){?>
                <tr>
                  <td>
                    <?php echo $key->payment_id ?>
                  </td>
                  <td>
                    <?php echo $key->cartname ?>
                  </td>
                  <td>
                    <?php echo $key->payer_name; ?>
                  </td>
                  <td>
                    <?php echo $key->payer_email; ?>
                  </td>
                  <td>
                    <?php echo $key->payee_name ?>
                  </td>
                  <td>
                    <?php echo $key->amount ?>
                  </td>
                  <td>
                    <?php echo $key->currency ?>
                  </td>
                  <td>
                    <?php echo $key->payment_status ?>
                      
                    </td>
                  <td>
                    <?php echo $key->created_at ?>
                      
                    </td>
                  <td>
                    <?php echo $key->updated_at ?>
                    </td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <span>
         {{ $payment-> links()}}
        </span>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
