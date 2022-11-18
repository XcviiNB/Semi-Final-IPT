@extends('base')

@section('content')

    <h2 style='text-align: center'>Items</h2>

    <div style='text-align: center'>
        <a href="{{url('/inventories/add')}}" class="btn btn-primary text-light" >Add Item</a>
    </div>
    &nbsp;

    <div class="container">
        <table class="table table-bordered table-hover border-secondary">
            <thead class="bg-primary text-center">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Value</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventories as $inventory)
                <tr>
                    <td>{{$inventory->name}}</td>
                    <td class="text-center">{{$inventory->description}}</td>
                    <td class="text-end">{{$inventory->value}}</td>
                    <td class="text-center">{{$inventory->status}}</td>
                    <td class="text-center">
                        <a href="{{url('/edit-inv/' .$inventory->id)}}" class="btn btn-success">
                            <i class="fa-regular fa-pen-to-square text-center"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{url('/remove-inv/' .$inventory->id)}}" class="btn btn-danger text-dark">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>
@endsection
