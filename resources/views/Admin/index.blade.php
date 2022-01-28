
@extends('layouts.admin')
@section('title','home')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />

@endsection

@section('content')
  <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- eCommerce statistic -->
     <div class="row">
      <div class="col-xl-4 col-lg-6 col-12">
        <div class="card pull-up">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="info">{{$Userscount}}</h3>
                  <h6>Users</h6>
                </div>
                <div>
                  <i class="icon-user info font-large-2 float-right"></i>
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-12">
        <div class="card pull-up">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="success">200</h3>
                  <h6>Comments</h6>
                </div>
                <div>
                  <i class="icon-user-follow success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-12">
        <div class="card pull-up">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="danger">100</h3>
                  <h6>Posts Count</h6>
                </div>
                <div>
                  <i class="icon-heart danger font-large-2 float-right"></i>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>



    </div>




    <?php $currentTime = getdate();   ?>
    <h1 class="clock"></h1>
    <div class="response"></div>


@endsection


@section('js')



<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>


@endsection
