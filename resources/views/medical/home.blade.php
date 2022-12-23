@extends('base')

@section('title')
Best Medical Websites For Your Clinic @stop

@section('meta_desc') @stop

@section('meta_keywords')@stop

@section('content')
<link href="{{asset('assets/css/medical/home.css')}}" rel="stylesheet">
<section>
  <div class="container">
  	<div class="row">
  	  <div class="col-md-6">
  	  	<div class="template-box">
  	  	  <div class="template-img">
  	  	  	<img src="{{asset('assets/img/medical/home/dento.png')}}" class="img-fluid">
  	  	  </div>
          <div class="template-view">
            <a href="{{route('medicalDento')}}">View Demo</a>
          </div>
  	  	</div>
  	  </div>
      <div class="col-md-6">
        <div class="template-box">
          <div class="template-img">
            <img src="{{asset('assets/img/medical/home/childcare.png')}}" class="img-fluid">
          </div>
          <div class="template-view">
            <a href="{{route('medicalChildcare')}}">View Demo</a>
          </div>
        </div>
      </div>
  	</div>
  </div>	
</section>
@endsection