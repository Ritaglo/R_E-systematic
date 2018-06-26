@extends('users.bishop.bishop');

@section('main-content')
<section id="main-content">
        <section class="wrapper">
                <h1>Reports</h1>
                @if(count($reports) >0)
                    @foreach($reports as $report)
                        <div class="well">
                        <h3>{{$report->title}}</h3>
                        <small>written on {{$report->created_at}}</small>
                        </div>
                    @endforeach
                @else 
                    <p>No posts found</p>
                
                @endif
        </section>
</section> 
@endsection