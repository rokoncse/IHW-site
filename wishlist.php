<?php include('header.php'); ?>

<div class="main-container col2-left-layout">
                    <div class="main">
                        <div class="container">
                            <div class="container-inner">
                                <div class="row">
                                    <div class="col-left sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="block block-account">
                                            <div class="block-title">
                                                <strong><span>My Account</span></strong>
                                            </div>
                                            <div class="block-content">
                                                <ul>
                                                    <li><a href="#">Account Dashboard</a>
                                                    </li>
                                                    <li><a href="#">Account Information</a>
                                                    </li>
                                                    <li><a href="#">Address Book</a>
                                                    </li>
                                                    <li><a href="#">My Orders</a>
                                                    </li>
                                                    <li><a href="#">Billing Agreements</a>
                                                    </li>
                                                    <li><a href="#">Recurring Profiles</a>
                                                    </li>
                                                    <li><a href="#">My Product Reviews</a>
                                                    </li>
                                                    <li><a href="#">My Tags</a>
                                                    </li>
                                                    <li class="current"><strong>My Wishlist</strong>
                                                    </li>
                                                    <li><a href="#">My Applications</a>
                                                    </li>
                                                    <li class="last"><a href="#">My Downloadable Products</a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.block-content -->
                                        </div><!-- /.block-account -->
                                    </div><!-- /.sidebar -->
                                    <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <div class="my-account">
                                            <div class="my-wishlist">
                                                <div class="page-title title-buttons">
                                                    <h1>My Wishlist</h1>
                                                </div>

                                                <form id="wishlist-view-form" method="post">
                                                    <fieldset>
                                                        <input name="form_key" type="hidden" value="xgL8hG8dBD28ZNMt" />
                                                        <table class="data-table" id="wishlist-table">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Product Details and Comment</th>
                                                                    <th>Add to Cart</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr id="item_2">
                                                                    <td>
                                                                        <a class="product-image" href="" title="Cras neque metus">
                                                                            <img src="images/product/113x113/24.jpg" width="113" height="113" alt="Cras neque metus" />
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <h3 class="product-name"><a href="product-detail.html" title="Cras neque metus">Cras neque metus</a></h3>
                                                                        <div class="description std">
                                                                            <div class="inner">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. </div>
                                                                        </div>
                                                                        <textarea name="description[2]" rows="3" cols="5" title="Comment" placeholder="Please, enter your comments..."></textarea>
                                                                    </td>
                                                                    <td>
                                                                        <div class="cart-cell">
                                                                            <div class="price-box">
                                                                                <span class="regular-price" id="product-price-9">
                                                                                <span class="price">$155.00</span> </span>
                                                                            </div>

                                                                            <div class="add-to-cart-alt">
                                                                                <input type="text" class="input-text qty validate-not-negative-number" name="qty[2]" value="2" />
                                                                                <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                </button>
                                                                            </div>
                                                                            <p><a class="link-edit" href="#">Edit</a></p>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="#" title="Remove Item" class="btn-remove btn-remove2">Remove item</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table><!-- /#wishlist-table -->
                                                        <div class="buttons-set buttons-set2">
                                                            <button type="submit" name="save_and_share" title="Share Wishlist" class="button btn-share"><span><span>Share Wishlist</span></span>
                                                            </button>

                                                            <button type="button" title="Add All to Cart" class="button btn-add"><span><span>Add All to Cart</span></span>
                                                            </button>

                                                            <button type="submit" name="do" title="Update Wishlist" class="button btn-update"><span><span>Update Wishlist</span></span>
                                                            </button>
                                                        </div><!-- /.buttons-set2 -->
                                                    </fieldset>
                                                </form><!-- /#wishlist-view-form -->

                                                <form id="wishlist-allcart-form" method="post">
                                                    <input name="form_key" type="hidden" value="xgL8hG8dBD28ZNMt" />
                                                    <div class="no-display">
                                                        <input type="hidden" name="wishlist_id" id="wishlist_id" value="3" />
                                                        <input type="hidden" name="qty" id="qty" value="" />
                                                    </div>
                                                </form><!-- /#wishlist-allcart-form -->
                                            </div><!-- /.my-wishlist -->
                                            <div class="buttons-set">
                                                <p class="back-link"><a href="#"><small>&laquo; </small>Back</a>
                                                </p><!-- /.buttons-set -->
                                            </div>
                                        </div><!-- /.my-account -->
                                    </div><!-- /.col-main -->
                                </div>
                            </div><!-- /.container-inner -->
                        </div><!-- /.container -->
                    </div><!-- /.main -->
                </div>
				<?php include('footer.php'); ?>