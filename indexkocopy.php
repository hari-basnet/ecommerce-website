<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>This is tutorial page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>


  <div class="container" id="mainbody">
    <!--top header section-->
    <div class="container" id="topheader">
      <div id="logotext"></div>


    </div>

    <!-- navigation menu  -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" id="brandName">XYZ pasal</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mens <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Shirt</a></li>
              <li><a href="#">Pants</a></li>
              <li><a href="#">Shoes</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
          </li>
          <li><a href="#">Page 2</a></li>
        </ul>
        <!--search bar and submit button-->
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search our page...">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <!--signup and login button-->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
    <!-- header wraper and whatever -->
    <div id="headerWrapper">
      <div id="logobodytext"></div>
    </div>

    <div class="container-fluid">
      <!-- left side bar  -->
      <div class="col-md-2">Left sider bar</div>


      <!-- main content  -->
      <div class="col-md-8">
        <div class="row">
          <h2 class="text-center">Feature Products</h2>
          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="images/products/JN10001.png" alt="Levis Jeans"class="img-thumb">
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="images/products/JN10001.png" alt="Levis Jeans"class="img-thumb">
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Long sleeve shirt</h4>
            <img src="images/products/blackshirt.png" alt="Long sleeve shirt"class="img-thumb">
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Fancy shoes</h4>
            <img src="images/products/SH10001.png" alt="Fancy shoes"class="img-thumb">
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Girls Jeans</h4>
            <img src="images/products/GJ10001.png" alt="Girls Jeans"class="img-thumb">
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Mens Hood</h4>
            <img src="images/products/HD10001.png" alt="Mens Hood"class="img-thumb">
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

        </div>
      </div>

      <!-- right side bar  -->
      <div class="col-md-2">Right sider bar</div>

    </div>

    <footer class="col-md-12 text-center" id="footer">&copy; Copyright 2013-2015 XYZ Oy</footer>

    <!-- Details modal  -->
    <div class="modal fade details-1" id="details-1" tabinex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button  type="button" data-dismiss="modal" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title text-center">Levis Jeans</h4>
          </div>
          <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                      <div class="center-block">
                        <img src="images/products/JN10001.png" alt="Levis Jeans" class="details img-responsive">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <h4>Details</h4>
                      <p>These Jeans are amazing! They are straight leg. Fits great!!!</p>
                      <hr>
                      <p>Price: $34.99</p>
                      <p>Brand: Levis</p>
                      <form  action="add_cart.php" method="post">
                        <div class="form-group">
                          <div class="col-xs-3">
                            <label for="quantity">Quantity:</label>
                            <input type="text" class="form-control" id="quantity" name="quantity">
                          </div>
                          <div class="col-xs-9">

                          </div>
                          <p>Available: 3</p>
                        </div>
                        <div class="form-group">
                          <label for="size">Size: </label>
                          <select class="form-control" name="size" id="size">
                            <option value="28">28</option>
                            <option value="30">30</option>
                            <option value="32">32</option>
                            <option value="36">36</option>

                          </select>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dissmiss="modal" type="button" >Close</button>
            <button class="btn btn-warning" type="submit" ><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</button>

          </div>
        </div>
      </div>
    </div>


    <!--making the animation of the object logo-->
    <script>

    jQuery(window).scroll(function(){
      var vscroll = jQuery(this).scrollTop();
      jQuery('#logobodytext').css({
        "transform":"translate(0px, "+vscroll/2+"px)"
      });
      // jQuery(window).scroll(function(){
      //   var vscroll = jQuery(this).scrollTop();
      //   jQuery('#back-flower').css({
      //     "transform":"translate("vscroll/5+"px, "+vscroll/12+"px)"
      //   });
      //   jQuery(window).scroll(function(){
      //     var vscroll = jQuery(this).scrollTop();
      //     jQuery('#logobodytext').css({
      //       "transform":"translate(0px, "+vscroll/2+"px)"
      //     });
    });
  </script>
</div>

</body>

</html>
