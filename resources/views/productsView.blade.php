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
                {{-- @foreach ($cats as $cat) --}}
                <li>
                    {{-- {{$cat->title}} --}}
                    <h2>cat title</h2>
                </li>
                {{-- @endforeach --}}
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="/images/117110-OP4377-233.jpg" height="400vh" class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>
                            <div class="text-center">
                                <a href="#" style="text-decoration: none" class="btnlink">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
