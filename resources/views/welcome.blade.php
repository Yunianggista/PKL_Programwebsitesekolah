@extends('layouts.nav')

@section('content')
<div class="wrapper row3">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <ol>
      <li>
        <h2><span>Slide 1</span></h2>
        <div><img src="{{ asset('images/1.jpg') }}" height="360" width="720" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 2</span></h2>
        <div><img src="{{ asset('images/2.jpg') }}" height="360" width="720" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 3</span></h2>
        <div><img src="{{ asset('images/3.jpg') }}" height="360" width="720" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 4</span></h2>
        <div><img src="{{ asset('images/4.jpg') }}" height="360" width="720" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 5</span></h2>
        <div><img src="{{ asset('images/5.jpg') }}" height="360" width="720" alt="" /></div>
      </li>
    </ol>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    
    <!-- ####################################################################################################### --> 
  </div>
</div>
@endsection
