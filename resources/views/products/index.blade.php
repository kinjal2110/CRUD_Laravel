@extends('products.layout')



@section('content')

<div class="row">
<br>
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h1>Family Medicine Practice</h1>
            <br>
        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif
<br>

<h3 class="text-center text-primary">Patient Information</h3>
<table class="table table-bordered">

    <tr>
        <th>SNo.</th>
        <th>First name</th>

        <th> Last Name</th>

        <th>BirthDate</th>

        <th>dayTime Phone</th>
        <th>Evening Phone</th>
        <th>first time visit?</th>
        <th width="280px">Action</th>

    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ ++$i }}</td>


        <td>{{ $product->fname }}</td>
        <td>{{ $product->lname }}</td>

        <td>{{ $product->birthdate }}</td>
        <td>{{ $product->dayTime }}</td>
        <td>{{ $product->eveningTime }}</td>
        <td>{{ $product->choose }}</td>

        <td>

            <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                <a class="btn-sm btn-info" href="{{ route('products.show',$product->id) }}" method="POST">Show</a>



                <a class="btn-sm btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>



                @csrf

                @method('DELETE')



                <button type="submit" class="btn btn-danger btn-sm">Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

<br>

<h3 class="text-center text-primary">Appointment Information</h3>
<table class="table table-bordered">

    <tr>
        <th>SNo.</th>
        <th>Date</th>

        <th> Time</th>



        <th>Reason for visit</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $product->date }}</td>
        <td>{{ $product->time }}</td>
        <td>{{ $product->reason }}</td>

        <td>

            <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                <a class="btn-sm btn-info" href="{{ route('products.show',$product->id) }}" method="POST">Show</a>



                <a class="btn-sm btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>



                @csrf

                @method('DELETE')



                <button type="submit" class=" btn btn-danger btn-sm">Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

{!! $products->links() !!}



@endsection