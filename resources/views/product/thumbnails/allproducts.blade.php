@foreach($products as $product)
<div class="row">
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="/../img/{{$product->image}}" alt="...">
      <div class="caption">
        <h3>{{$product->name}}</h3>
        <p>{{$product->description}}</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
@endforeach
