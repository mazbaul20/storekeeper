@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0 align-items-center">
            <li class="breadcrumb-item">
              <a href="#">
                <ion-icon name="home-outline"></ion-icon>
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
      </div>
  </div>
  <!--end breadcrumb-->
  <div class="d-flex gap-1">
    {{-- total sales for today --}}
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title text-center">Today</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center">Tk {{ $todaysSales ?? '0' }}</h6>
      </div>
    </div>
    {{-- total sales for yesterday --}}
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title text-center">Yesterday</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center">Tk {{ $yesterdaysSales ?? '0' }}</h6>
      </div>
    </div>
    {{-- total sales for this month --}}
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title text-center">This Month</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center">Tk {{ $thisMonthsSales ?? '0' }}</h6>
      </div>
    </div>
    {{-- total sales for last month --}}
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title text-center">Last Month</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center">Tk {{ $lastMonthsSales ?? '0' }}</h6>
      </div>
    </div>
  </div>
@endsection