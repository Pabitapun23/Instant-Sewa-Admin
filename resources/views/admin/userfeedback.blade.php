@extends('layouts.master')

@section('title')
    User Feedback | Instant Sewa
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">User Feedback Management</h4>
            <p class="card-category">Here all the feedbacks of users are managed</p>
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
                  Username
                </th>
                <th>
                  Feedback
                </th>
                <th>
                  Email
                </th>
                <th>
                  Created At
                </th>
                <th>
                  Updated At
                </th>
                <th>
                </th>
              </thead>
              <tbody>
                <?php foreach ($feedback as $key){?>
                <tr>
                  <td>
                    <?php echo $key->id ?>
                  </td>
                  <td>
                    <?php echo $key->username ?>
                  </td>
                  <td>
                    <?php echo $key->feedback; ?>
                  </td>
                  <td>
                    <?php echo $key->email; ?>
                  </td>
                  <td>
                    <?php echo $key->created_at ?>

                    </td>
                  <td>
                    <?php echo $key->updated_at ?>
                  </td>
                  <td>
                    <form action="{{ url('user-feedback-delete/'.$key->id)}}" method="POST">
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
         {{ $feedback-> links()}}
        </span>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
