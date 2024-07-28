
<div class="col-lg-3 order-2 order-lg-1">
  <h5 class="text-uppercase mb-4">Categories</h5>

  <?php
    include "fun/conn.php";
    $select = "SELECT * FROM category WHERE parent =0";
    $query= $conn -> query($select);
    while($result = $query -> fetch_assoc()){
      $result_id = $result['id'];
      ?>
    

  
  <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold"><?= $result['name']?></strong></div>


  <?php


    $select_son="SELECT * FROM category WHERE parent = $result_id";
    $query_son = $conn -> query($select_son);
    while($result_son = $query_son -> fetch_assoc()){?>


  <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
    <li class="mb-2"><a class="reset-anchor" href="?id=<?= $result_son['id']?>"><?= $result_son['name']?></a></li>
  </ul>

  <?php } ?>


  <?php } ?>
    

  <h6 class="text-uppercase mb-4">Price range</h6>
  <div class="price-range pt-4 mb-5">
    <div id="range"></div>
    <div class="row pt-2">
      <div class="col-6"><strong class="small font-weight-bold text-uppercase">From</strong></div>
      <div class="col-6 text-right"><strong class="small font-weight-bold text-uppercase">To</strong></div>
    </div>
  </div>
  <h6 class="text-uppercase mb-3">Show only</h6>
  <div class="custom-control custom-checkbox mb-1">
    <input class="custom-control-input" id="customCheck1" type="checkbox">
    <label class="custom-control-label text-small" for="customCheck1">Returns Accepted</label>
  </div>
  <div class="custom-control custom-checkbox mb-1">
    <input class="custom-control-input" id="customCheck2" type="checkbox">
    <label class="custom-control-label text-small" for="customCheck2">Returns Accepted</label>
  </div>
  <div class="custom-control custom-checkbox mb-1">
    <input class="custom-control-input" id="customCheck3" type="checkbox">
    <label class="custom-control-label text-small" for="customCheck3">Completed Items</label>
  </div>
  <div class="custom-control custom-checkbox mb-1">
    <input class="custom-control-input" id="customCheck4" type="checkbox">
    <label class="custom-control-label text-small" for="customCheck4">Sold Items</label>
  </div>
  <div class="custom-control custom-checkbox mb-1">
    <input class="custom-control-input" id="customCheck5" type="checkbox">
    <label class="custom-control-label text-small" for="customCheck5">Deals &amp; Savings</label>
  </div>
  <div class="custom-control custom-checkbox mb-4">
    <input class="custom-control-input" id="customCheck6" type="checkbox">
    <label class="custom-control-label text-small" for="customCheck6">Authorized Seller</label>
  </div>
  <h6 class="text-uppercase mb-3">Buying format</h6>
  <div class="custom-control custom-radio">
    <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
    <label class="custom-control-label text-small" for="customRadio1">All Listings</label>
  </div>
  <div class="custom-control custom-radio">
    <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
    <label class="custom-control-label text-small" for="customRadio2">Best Offer</label>
  </div>
  <div class="custom-control custom-radio">
    <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
    <label class="custom-control-label text-small" for="customRadio3">Auction</label>
  </div>
  <div class="custom-control custom-radio">
    <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
    <label class="custom-control-label text-small" for="customRadio4">Buy It Now</label>
  </div>
</div>