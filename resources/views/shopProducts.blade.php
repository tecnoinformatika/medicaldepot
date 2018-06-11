@extends('layouts.app')
@section('content')
        <!-- Breadcrumbs start -->
        <div class="breadcrumbsshop breadcrumbs">
            <div class="breadcrumbsshop-overlay"></div>
            <div class="page-title">
                <h2>4 column</h2>
                <p>Work is easy when you have all tools around you!</p>
            </div>
            <ul class="crumb">
                <li><i class="fa fa-home"></i></li>
                <li><a href="index.html"><i class="fa fa-angle-double-right"></i> Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Shop</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Shop Right Sidebar</a></li>
            </ul>
        </div>
        <!-- Breadcrumbs end -->
        <div class="main-content" id="">
            <div class="page-content page-sidebar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-9">
                            <div class="row">
                            @foreach($items['Items']['Item'] as $product)
                            <div class="col-md-3">
                                <div class="item-product first">
                                    <div class="product-thumb">
                                        <div class="midd">
                                            <a href="#" onclick="document.forms['myForm{{$product['ASIN']}}'].submit();">
                                                <img  src="{{$product['MediumImage']['URL']}}" alt=""></a>
                                            <div class="n-content">
                                                <p>New</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-product">
                                        <input type="hidden" :value="item.img" value="{{$product['MediumImage']['URL']}}">
                                        <input type="hidden" v-model="item.id" id="asinDetailProduct-{{$product['ASIN']}}" name="asinDetailProduct" value="{{$product['ASIN']}}">
                                        <input type="hidden" id="asinMoreProducts{{$product['ASIN']}}" name="asinMoreProducts{{$product['ASIN']}}" value="{{ $product['ItemAttributes']['Title']}}"/>
                                        <h4 ><a href="#" onclick="document.forms['myForm{{$product['ASIN']}}'].submit();" v-model="item.name"> {{str_limit($product['ItemAttributes']['Title'] , 15)}}</a></h4>
                                        <p class="price" v-model="item.price">{{$product['ItemAttributes']['ListPrice']['FormattedPrice']}}</p>
                                        <input type="hidden"  v-model="item.qty" name="qty" value="1" >
                                        <div class="add-cart">
                                            <a v-on:click="addItem()" class="shop-btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            @endforeach
                            </div>
                             <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="sidebar">
                                <div class="widget">
                                    <h4>Top Rated Products</h4>
                                    <div class="sidebar-products">
                                        <img src="images/shop/2.jpg" alt="">
                                        <h3><a href="">Photo Camera</a></h3>
                                        <span>$300</span>
                                    </div>
                                    <div class="sidebar-products">
                                        <img src="images/shop/3.jpg" alt="">
                                        <h3><a href="">Photo Camera</a></h3>
                                        <span>$250</span>
                                    </div>
                                    <div class="sidebar-products">
                                        <img src="images/shop/6.jpg" alt="">
                                        <h3><a href="">Photo Camera</a></h3>
                                        <span>$170</span>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4>Tag cloud</h4>
                                    <div class="tags">
                                    <a href="#">Obesity</a>
                                    <a href="#">Desieases</a>
                                    <a href="#">Tips</a>
                                    <a href="#">Kids Health</a>
                                    <a href="#">Mothers</a>
                                    <a href="#">Eating</a>
                                    <a href="#">Emergency</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<script type="text/javascript">
        function submitform()
        {
             var theForm = document.forms['form1'];
             if (!theForm) {
                 theForm = document.form1;
             }
             theForm.submit();
        }
        </script>
        <script>
        function capturar()
        {
            // obtenemos e valor por el numero de elemento
            var porElementos=document.forms["form1"].elements[0].value;
            // Obtenemos el valor por el id
            var porId=document.getElementById("asinDetailProduct-").value;
            var porId=document.getElementById("asinMoreProducts-").value;
            
            // Obtenemos el valor por el Nombre
            var porNombre=document.getElementsByName("nombre")[0].value;
            // Obtenemos el valor por el tipo de tag
            var porTagName=document.getElementsByTagName("input")[0].value;
            // Obtenemos el valor por el nombre de la clase
            var porClassName=document.getElementsByClassName("formulario")[0].value;
     
            document.getElementById("resultado").innerHTML=" \
                Por elementos: "+porElementos+" \
                <br>Por ID: "+porId+" \
                <br>Por Nombre: "+porNombre+" \
                <br>Por TagName: "+porTagName+" \
                <br>Por ClassName: "+porClassName;
        }
        </script>
          
        
@endsection      
        

    
 