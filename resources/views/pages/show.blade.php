

@extends('app')


@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">{{$article->title}}

<a href="{{action('PagesController@edit', [$article->id])}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                  </div>

                  <div class="panel-body">

	<div class="body">{{$article->body}}</div>


  <span class="hiddenFeeling" ><span class="textFeeling">{{$article->feeling}}</span></span>






</div>
</div>
</div>
</div>
</div>

@stop
