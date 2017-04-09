@extends('layouts.theme')

@section('working_area')
    @if(!empty($articles))

        @foreach($articles as $article)
    <div class="col-lg-4">
        <div class="portlet">
            <div class="portlet-heading bg-primary">
                <h3 class="portlet-title">
                    {{$article->title}}
                </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="zmdi zmdi-refresh"></i></a>
                    <a data-toggle="collapse" data-parent="#accordion1" href="ui-cards.html#bg-primary1"><i class="zmdi zmdi-minus"></i></a>
                    <a href="ui-cards.html#" data-toggle="remove"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="bg-primary1" class="panel-collapse collapse in">
                <div class="portlet-body">
                        {{$article->body}}
                </div>
                <hr>

                <p>Written  by: {{$article->user->name}}</p>
                <br>

                <div class="comments">

                    <ul class="list-group">
                        @foreach ($article->comments as $comment)

                        <li class="list-group-item">
                        <strong>
                            {{$article->created_at->diffForHumans()}}:
                        <strong>

                            {{$comment->body}}
                        </li>
                        @endforeach

                    </ul>

                </div>

            </hr>

                <div class="card">
                    <div class="card-block">

                        <form method="POST" action="/articles/{{$article->id }}/comments">     
                            {{csrf_field()  }} 
                            <div class="form-group">
                                <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add comment</button>
                                </div>


                            </form>


                            
                        </div>

                    </div>
            </div>
        </div>
    </div>
@endforeach
    @endif


@endsection