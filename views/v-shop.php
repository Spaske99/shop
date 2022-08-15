<div class="bg-image" style="background-image: url('./public/theme/img/wallpapers/wallpaper.jpg'); background-repeat: no-repeat; background-attachment: fixed; ">
  <main class="container pt-5 pb-5 ">
    <div class="container">
      <form class="row" action="./all-products-page.php" method="get">
        <div class="input-group mb-3">
          <input class="form-control text-center" type="search" placeholder="Search" name="filter" value="<?php echo htmlspecialchars($filter); ?>">
          <select class="btn btn-light sort" name="sort">
            <option value="" >Sort by</option>

            <option <?php if ($sort == 'price-asc') { echo htmlspecialchars("Selected"); } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_ASC); ?>">Price Asc</option>
            
            <option <?php if ($sort == 'price-desc') { echo htmlspecialchars("Selected"); } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_DESC); ?>">Price Desc</option>
          </select>       
          <button type="submit" class="btn btn-primary" type="button" id="button-addon2">Search</button>
        </div>
      </form> 
    </div>
    <div class="container">
      <div class="row">
        <?php foreach ($products as $product) { ?>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card mt-3">
              <div class="product-1 align-items-center pt-3 text-center">
                <a href="./single-product-page.php?page=<?php echo $product->id; ?>">
                  <img src="<?php echo $product->img ?>" class="d-block w-100" alt="WALL" class="rounded">
                </a>
                <h4 class="card-title mt-2 shop-title">
                  <?php echo $product->title; ?>
                </h4>
                <div class="cost mt-3 text-dark">
                  <h5 class="card-text price">
                    <?php echo htmlspecialchars($product->price) . " rsd"; ?>
                  </h5>
                  <div class="star mt-2 align-items-center">
                    <?php
                      for($i=0; $i<($product->stars); $i++) {
                    ?>
                      <i class="fa fa-star text-warning"></i>
                    <?php
                    }
                      for($j=0; $j<(5 - $i); $j++) {
                    ?>
                      <i class="fa fa-star"></i>
                    <?php
                    }
                    ?>
                  </div>    
                </div>
              </div>
              <div class="p-3 shoe text-center text-white mt-2 cursor">
                <button form="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" class="btn btn-primary">Add to cart 
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="-5 0 20 20">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                  </svg>
                </button>
                <form id="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" action="./all-products-page.php" method="post">
                  <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                </form>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>
</div>