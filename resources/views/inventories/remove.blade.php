@extends('base')

@section('content')

    <h1 style="text-align: center">Remove Item</h1>
    <hr>

    <div class="text-center">
        <div class="col-md-4 mx-auto">
            {!! Form::model($inventories, ['url'=>'/remove-inv/' . $inventories->id]) !!}
                <div class="infos">
                    <div class="mb-2">
                        {!! Form::label("name", "Name") !!}
                        {!! Form::text("name", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-2">
                        {!! Form::label("description", "Description") !!}
                        {!! Form::text("description", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-2">
                        {!! Form::label("value", "Value") !!}
                        {!! Form::number("value", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-2">
                        {!! Form::label("status", "Status:") !!}
                        {!! Form::text("status", null, ['class'=>'form-control']) !!}
                    </div>

                </div>
            </div>

            {!! Form::close() !!}

            <h4>Are you sure you want to remove this item?</h4>

            <form action="{{url('/confirmremoval-inv/'.$inventories->id)}}" method="post">
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="form-group mx-auto">
                    <button href="" class="btn btn-danger m-1" type="submit"> <i class="fa fa-check" aria-hidden="true"></i> &nbsp; Yes</button>
                    <a href="{{url('/inventories')}}" class="btn btn-secondary m-1"> <i class="fa fa-times" aria-hidden="true"></i> &nbsp; No</a>
                </div>

            </form>
        </div>
    </div>
@endsection
