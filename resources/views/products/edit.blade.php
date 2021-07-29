@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">


<div class="header-1">Patient Information</div>

        <strong>First Name:</strong><br>

<input type="text" name="fname" value="{{ $product->fname }}"><br>

<strong>Last Name:</strong><br>

<input type="text" name="lname"  value="{{ $product->lname }}"><br>

<strong>Birth Date:</strong><br>

<input type="date" name="birthdate"  value="{{ $product->birthdate }}"><br>

<strong>Daytime Phone:</strong><br>

<input type="text" placeholder="(xxx) xxx-xxxx" name="dayTime"  value="{{ $product->dayTime }}"><br>


<strong>Evening Phone:</strong><br>

<input type="text" placeholder="(xxx) xxx-xxxx" name="eveningTime"  value="{{ $product->eveningTime }}"><br>

<strong>Is this your first time visiting our office? </strong><br>
<input type="radio" id="yes" name="choose" value="yes"    {{ $product->choose == 'yes' ? 'checked' : '' }}>
<label for="yes">Yes</label>
<input type="radio" id="no" name="choose" value="no " value="{{ $product->choose }}"  {{ $product->choose == 'no' ? 'checked' : '' }}>
<label for="no">No</label><br>


 
<div class="header-1">Appointmen Information</div>

<strong>Date:</strong><br>
<input type="date" name="date"  value="{{ $product->date }}"><br>

<strong>Time</strong><br>
<input type="time" name="time" value="{{ $product->time }}">
<br>



<strong>Please describe the reason for this visit</strong><br>

<textarea name="reason" cols="40" rows="5" value="{{ $product->reason }}">{{ $product->reason }}</textarea><br>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   </div>
    </form>
@endsection