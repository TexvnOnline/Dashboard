
@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
          <h3>{{$tourists_count}}<sup style="font-size: 20px"></sup></h3>

            <p>Lugares turísticos</p>
          </div>
          <div class="icon">
            <i class="fas fa-city"></i>
            
          </div>
          <a href="{{route('tourists.index')}}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
          <h3>{{$restaurants_count}}<sup style="font-size: 20px"></sup></h3>
            

            <p>Restaurantes</p>
          </div>
          <div class="icon">
            <i class="fas fa-utensils"></i>
            
            </div>
          <a href="{{route('restaurants.index')}}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$hotels_count}}<sup style="font-size: 20px"></sup></h3>

            <p>Hospedajes</p>
          </div>
          <div class="icon">

            <i class="fas fa-hotel"></i>

          </div>
          <a href="{{route('hotels.index')}}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
          <h3>{{$events_count}}<sup style="font-size: 20px"></sup></h3>

            <p>Eventos</p>
          </div>
          <div class="icon">
             <i class="fas fa-calendar-week"></i>
          </div>
          <a href="{{route('events.index')}}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      
    </div>
    <!-- /.row -->
    <!-- Main row -->
    
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->



@endsection
