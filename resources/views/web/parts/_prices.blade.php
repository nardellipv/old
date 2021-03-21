<div class="price" id="price">
    <div class="col-md-6 w3l_about_bottom_left">
    </div>
    <div class="col-md-6 w3l_about_bottom_right">
        <div class="title-agileits1">
            <h3>Lista de Precios</h3>
        </div>
        <p>Lo mejor que tenemos para ofrecer a todos los que cruzan nuestras puertas.</p>
        <div class="price-list">
            @foreach($products as $product)
            <div class="wthree-grids-price">
                <h4>{{ $product->name }}</h4>
                <h5> ${{ $product->price }}</h5>
                <div class="clearfix"> </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="clearfix"> </div>
</div>