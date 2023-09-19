<main class="main">
  <div class="page-header breadcrumb-wrap">
    <div class="container">
      <div class="breadcrumb">
        <a href="index-2.html" rel="nofollow">Home</a>
        <span></span> Shop
        <span></span> Wishlist
      </div>
    </div>
  </div>
  <section class="mt-50 mb-50">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table shopping-summery text-center">
              <thead>
                <tr class="main-heading">
                  <th scope="col" colspan="2">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Stock Status</th>
                  <th scope="col">Action</th>
                  <th scope="col">Remove</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($wishlist_data as $wishlist) { ?>
                  <tr>
                    <td class="image product-thumbnail"><img src="<?= $wishlist['image'] ?>" alt="#"></td>
                    <td class="product-des product-name">
                      <h5 class="product-name"><a href="<?= base_url() ?>Home/product_detail/<?= $wishlist['url'] ?>?type=<?= base64_encode($wishlist['type_id']) ?>"><?= $wishlist['product_name'] ?></a></h5>
                      <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                      </p>
                    </td>
                    <td class="price" data-title="Price"><span>₹<?= $wishlist['price'] ?> </span></td>
                    <td class="text-center" data-title="Stock">
                      <? if ($wishlist['stock'] == 1) { ?>
                        <span class="text-success font-weight-bold">In Stock</span>

                      <? } else { ?>
                        <span class="text-danger font-weight-bold">Out of Stock</span>

                      <? } ?>
                    </td>
                    <td class="text-right" data-title="Cart">
                      <button class="btn btn-sm"><i class="fi-rs-shopping-bag mr-5"></i>Add to cart</button>
                    </td>
                    <td class="action" data-title="Remove"><a href="#"><i class="fi-rs-trash"></i></a></td>
                  </tr>
                <?php $i++;
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>