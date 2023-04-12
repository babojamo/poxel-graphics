@extends('layouts.app')
@section('content')
 
<!-- create-item-area -->
<div class="pt-180 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <aside class="create-item-sidebar">
                    <h4 class="title">Service/Product</h4>
                    <div class="top-collection-item mb-0">
                        
                        <div class="collection-item-thumb">
                            <a href="market-single.html"><img src="assets/img/others/top_collection06.jpg" alt=""></a>
                        </div>
                        <div class="collection-item-content">
                            <h5 class="title"><a href="market-single.html">Basketball Jersey</a></h5>
                        </div>
                        
                    </div>
                </aside>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="method-wrap">
                    <h4 class="title">Select method</h4>
                    <ul class="method-list">
                        <li><a href="#" class="active"><i class="flaticon-tag"></i> Fixed Price</a></li>
                        <li><a href="#"><i class="flaticon-timer"></i> Time Auctions</a></li>
                        <li><a href="#"><i class="flaticon-add-user"></i> Open For Bids</a></li>
                    </ul>
                </div>
                <form action="#" class="create-item-form">
                    <div class="form-grp">
                        <label for="file">Upload file</label>
                        <input id="file" type="file">
                    </div>
                    <div class="form-grp">
                        <label for="price">Price</label>
                        <input id="price" type="text" placeholder="Enter price for one item (ETH)">
                    </div>
                    <div class="form-grp">
                        <label for="title">Title</label>
                        <input id="title" type="text" placeholder="Enter price for one item (ETH)">
                    </div>
                    <div class="form-grp">
                        <label for="desc">Description</label>
                        <textarea name="message" id="desc" placeholder="e.g. This is very limited item"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-grp">
                                <label for="royalties">Royalties</label>
                                <input id="royalties" type="text" placeholder="(10%)">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-grp">
                                <label for="size">Size</label>
                               
                                <select name="" id="">
                                    <option value="Test">Test</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn">Create Item</button>
                </form>
            </div>
        </div>
    </div>
</div>
 
@endsection