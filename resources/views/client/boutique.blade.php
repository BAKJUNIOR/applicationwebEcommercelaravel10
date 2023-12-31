@extends('client_layout.master')  <!-- Hérite tout ce qui est dans le dossier client_layout.master-->

@section('title')
    Boutique
@endsection

@section('content')  <!-- Le contenu dynamique-->
       
   <!-- Start Shop Page  -->
   <div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center text-sm-left">
                            <p>Showing all 4 results</p>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="product-categorie-box">
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    
                                  @foreach ($products as $product)
                                      
                                  <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <div class="type-lb">
                                                <p class="new">Nouveau</p>
                                            </div>
                                            <img src="{{asset('storage/product_images/'.$product->product_image)}}" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                                <a class="cart" href="{{url('AjouterPanier/'.$product->id)}}">Ajouter au panier</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h4>{{$product->product_name}}</h4>
                                            <h5> {{$product->product_price}} FCFA</h5>
                                        </div>
                                    </div>
                                </div>

                                  @endforeach
                                    
                                   

                                </div>
                            </div>
                            
                     <div role="tabpanel" class="tab-pane fade" id="list-view">
                           
                        @foreach ($products as $product)
                            
                        <div class="list-view-box">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <div class="type-lb">
                                                <p class="sale">Sale</p>
                                            </div>
                                            <img src="{{asset('storage/product_images/'.$product->product_image)}}" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                    <div class="why-text full-width">
                                        <h4>{{$product->product_name}}</h4> 
                                        <h5> <del> 60.00 FCFA </del> {{$product->product_price}} FCFA</h5>
                                        <p>{{$product->product_detaille}}</p>
                                        <a class="btn hvr-hover" href="{{url('AjouterPanier/'.$product->id)}}">Ajouter au panier</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                                    
                            </div>





                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="search-product">
                        <form action="#">
                            <input class="form-control" placeholder="Search here..." type="text">
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>Categories</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men1" aria-expanded="true" aria-controls="sub-men1">Fruits & Drinks <small class="text-muted">(100)</small>
                            </a>
                            </div>
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men2" aria-expanded="false" aria-controls="sub-men2">Vegetables 
                            <small class="text-muted">(50)</small>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->


@endsection

   
   
   
   