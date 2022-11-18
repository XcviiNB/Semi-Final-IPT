@extends('base')

@section('content')

    <h1 style="text-align:center">Edit Item</h1>

    <div class="row">
        <div class="col-md-4 mx-auto">
            {!! Form::model($inventories, ['url'=>'/edit-inv/' . $inventories->id, 'method'=>'put']) !!}

            <div class="mb-2">
                {!! Form::label("name", "Name") !!}
                {!! Form::text("name", null, ['class'=>'form-control'])!!}
            </div>

            <div class="mb-2">
                {!! Form::label("description", "Description") !!}
                {!! Form::text("description", null, ['class'=>'form-control'])!!}
            </div>

            <div class="mb-2">
                {!! Form::label("value", "Value") !!}
                {!! Form::number("value", null, ['class'=>'form-control'])!!}
            </div>

            <div class="mb-2">
                {!! Form::label("status", "Status") !!}
                {!! Form::text("status", null, ['class'=>'form-control'])!!}
            </div>

            <button class="btn btn-primary" type="submit">Apply Changes</button>

            {!! Form::close() !!}
        </div>
    </div>

@endsection
