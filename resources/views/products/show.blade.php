@extends('products.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

<form action="{{ route('products.show',$product->id) }}" method="POST">

    <div class="header-1">Patient Information</div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name:</strong>
            {{ $product->fname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name:</strong>
            {{ $product->lname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Birth Date:</strong>
            {{ $product->birthdate}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Daytime Phone:</strong>
            {{ $product->dayTime }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Evening Phone:</strong>
            {{ $product->eveningTime }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Is this your first time visiting our office? </strong>
            {{ $product->choose }}
        </div>
    </div>
</div>
<div class="container">
        <div class="header-1">Appointmen Information</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date: </strong>
                {{ $product->date}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time: </strong>
                {{ $product->time }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>reason for this visit:</strong>
                {{ $product->reason }}
            </div>
        </div>
    </div>
</form>
@endsection