@extends('layouts.app')
<div class="header pheader">
    @include('navbar')
</div>
<br />
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 div_cats">
            <h1>Products</h1>
            <hr />
            <ul>
                @foreach ($cats as $cat)
                <li>

                    <h3> <a href="/cats/{{$cat->id}}">  {{$cat->title}}  </a></h3>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                    @foreach ($products as $product)
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <img src="/images/{{$product->image}}" height="400vh" class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title"> {{$product->title}}</h5>
                            <p class="card-text">
                                    {{$product->des}}
                            </p>
                            <div class="text-center">
                                <a href="#" style="text-decoration: none" class="btnlink">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
