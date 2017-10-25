@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{ $thread->title }}</h4></div>

                <div class="panel-body">
                    {{ $thread->body }}
                </div>
            </div>
            <form method="POST" action="/threads/{{ $thread->id }}/comment">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea style="resize: none;" rows="1" name="body" class="form-control" placeholder="Skrifaðu eitthvað fallegt"></textarea>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button style="width: 100%;" class="btn btn-primary">Reply</button>
                        </div>
                    </div>
                </div>
            </form>

            @foreach($thread->comments as $comment)
                <div class="panel panel-default">
                    <div class="panel-heading"><h5>{{ $comment->user_id }}</h5></div>

                    <div class="panel-body">
                        {{ $comment->body }}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection