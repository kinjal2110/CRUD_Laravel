@extends('products.layout')


@section('content')




<div class="row">
<br>
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h1>Family Medicine Practice</h21>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

        </div>

    </div>

</div>







<form action="{{ route('products.store') }}" method="POST">

    @csrf



    <div class="row">


    <div class="header-1">Patient Information</div>



        <strong>First Name:</strong><br>

        <input type="text" name="fname" ><br>
<span class="validation small">@error('fname'){{$message}}@enderror</span><br>
        <strong>Last Name:</strong><br>

        <input type="text" name="lname"><br>

        <span class="validation small">@error('lname'){{$message}}@enderror</span><br>
        <strong>Birth Date:</strong><br>

        <input type="date" name="birthdate"><br>

        <span class="validation small">@error('birthdate'){{$message}}@enderror</span><br>
        <strong>Daytime Phone:</strong><br>

        <input type="text" placeholder="(xxx) xxx-xxxx" name="dayTime" minlength="10" maxlength="10"><br>


        <span class="validation small">@error('dayTime'){{$message}}@enderror</span><br>
        <strong>Evening Phone:</strong><br>

        <input type="text" placeholder="(xxx) xxx-xxxx" name="eveningTime" minlength="10" maxlength="10"><br>

        <span class="validation small">@error('eveningTime'){{$message}}@enderror</span><br>
        <strong>Is this your first time visiting our office? </strong><br>
        <input type="radio" id="yes" name="choose" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="choose" value="no">
        <label for="no">No</label>
        <br><span class="validation small">@error('choose'){{$message}}@enderror</span><br>
    <br>
    <div class="header-1">Appointmen Information</div>

    <strong>Date:</strong><br>
<input type="date" name="date"><br>

<span class="validation small">@error('date'){{$message}}@enderror</span><br>
<strong>Time: </strong><br>
<input type="time" name="time" >
<br>

<span class="validation small">@error('time'){{$message}}@enderror</span><br>


<strong>Please describe the reason for this visit</strong><br>

<textarea name="reason" id="" cols="40" rows="5"></textarea><br>


<span class="validation small">@error('reason'){{$message}}@enderror</span><br>

        <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection



  