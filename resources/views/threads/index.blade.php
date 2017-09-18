@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($threads as $thread)
                <article>
                    <div>
                        <h4>
                            {{ $thread->title }}
                        </h4>
                    </div>
                    <div class="body">
                        {{ $thread->body }}
                    </div>
                </article>
            @endforeach
                    <!--<h3 class="panel-heading">Lorem</h3>
                    Aliquam laoreet ultricies arcu non rhoncus. Cras dapibus elementum volutpat. Duis dictum sapien at nibh viverra, eget lacinia est efficitur. Proin imperdiet ipsum ac mi consectetur, nec consequat orci ultricies. In sollicitudin condimentum leo, id placerat urna convallis ac. Duis quis vehicula dolor, quis pretium urna. Ut id sapien sit amet augue commodo euismod sed a mi. In metus diam, blandit in faucibus imperdiet, tristique finibus diam. Proin eu enim tristique, pulvinar risus ullamcorper, rutrum quam. Integer non magna purus.
                    <div class="panel-body"></div>
                    <div class="panel panel-default"></div>
                    <h3 class="panel-heading">Ipselum</h3>
                    Ut vel lectus sit amet leo varius blandit. Praesent in lectus vitae ante eleifend porta ac vitae arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus viverra augue at porta scelerisque. Quisque aliquam pulvinar diam sed placerat. Donec non lectus at sapien tempus fermentum vel quis ex. Praesent suscipit massa vitae rutrum pellentesque. Nam sed nulla massa.-->
                </div>
        </div>
    </div>
</div>
@endsection
