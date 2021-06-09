@extends('layouts.app')

@section('content')
<div class="container">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    
   
  

<div>
    <table class="table ">
    <thead class="thead-dark">
        <tr>
        <th> The weather of {{$date}} is: </th>
        <th>
        @foreach($weather['weather'] as  $w)
        <img src="http://openweathermap.org/img/wn/{{  $w['icon'] }}.png" alt="">
           @endforeach         </th>
        </tr>
    </thead>
    <tbody>
        <tr>
        
        <td > Weather</td>
        <td>  @foreach($weather['weather'] as  $w)
         {{  $w['description'] }}
           @endforeach</td>
        
        </tr>
        <tr>
       
        <td>Temperature</td>
        <td> 
         {{  $weather['main']['temp'] -273.15}} degrees celsius
         </td>
    
        </tr>
        <tr>
        <td>Feels like</td>
        <td> 
         {{  $weather['main']['feels_like']-273.15 }} degrees celsius
         </td>
        </tr>
        
      
        <tr>
        <td>Humidity</td>
        <td> 
         {{  $weather['main']['humidity'] }}%
         </td>
        </tr>
        <tr>
        <td>Wind speed</td>
        <td> 
         {{  $weather['wind']['speed'] }} kilometers/hour
         </td>
        </tr>
    </tbody>
    </table>
    <div><a href="https://openweathermap.org/current" class="link-primary">https://openweathermap.org/current</a>  </div>
</div>
</div>
@endsection
