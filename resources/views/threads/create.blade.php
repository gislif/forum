@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body:</label>
                        <div></div>
                        <textarea rows="6" cols="100"></textarea>
                        <div></div>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
