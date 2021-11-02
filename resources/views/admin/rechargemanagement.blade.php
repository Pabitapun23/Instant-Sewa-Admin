@extends('layouts.master')

@section('title')
    Recharge Management | Instant Sewa
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Recharge Management
              {{-- <div class="card-category float-right">
                <input type="text" value="" class="search" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                </button>
              </div> --}}
           </h4>
           <p class="card-category">Here all the recharges are managed</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Payment ID
                </th>
                <th>
                  Service Provider Name
                </th>
                <th>
                  Payment Recharge
                </th>
                <th>
                  Currency
                </th>
                <th>
                  Platform
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
                <?php foreach ($recharge as $key){?>
                <tr>
                  <td>
                    <?php echo $key->payment_id ?>
                  </td>
                  <td>
                    <?php echo $key->service_provider_name ?>
                  </td>
                  <td>
                    <?php echo $key->payment_recharge; ?>
                  </td>
                  <td>
                    <?php echo $key->currency ?>
                  </td>
                  <td>
                    <?php echo $key->platform ?>
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
         {{ $recharge-> links()}}
        </span>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
