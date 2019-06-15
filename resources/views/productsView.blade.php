@extends('layouts.app')
@include('navbar')
<div class="container">
    <div class="row">
            <div class="col-md-4">
                <h1>Products</h1>
            <hr>
            <ul>
                {{-- @foreach ($cats as $cat) --}}
<li>
     {{-- {{$cat->title}} --}}
     <h2>cat title</h2>
</li>
                {{-- @endforeach --}}
            </ul>
            </div>
            <div class="col-md-8">
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="">
                                <img src="/images/117110-OP4377-233.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="">
                            <img src="/images/117110-OP4377-233.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
            </div>
                </div>

            </div>
    </div>

</div>
