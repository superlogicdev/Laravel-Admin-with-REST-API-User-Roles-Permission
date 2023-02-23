@extends('inventory.layout')
@section('title', 'Add Product')
@section('content')
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-headphones bg-blue"></i>
                        <div class="d-inline">
                            <h5>Add Product</h5>
                            <span>Add new product in inventory</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Add Product</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="/inventory/products">
                        <input type="hidden" name="_token" value="R7Ddbbgxb1qEbQoTDakkow75fNl3gqY3q3qkjl94">                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="title">Title<span class="text-red">*</span></label>
                                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="Enter product title" required="">
                                        <div class="help-block with-errors"></div>


                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control html-editor h-205" rows="10"></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label>Product Images</label>
                                        <div class="input-images" data-input-name="product-images" data-label="Drag & Drop product images here or click to browse"></div>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Warehouse</label>
                                        <select class="form-control" name="warehouse" >
                                            <option selected="selected" value="" >Select Warehouse</option>
                                            <option value="1">Warehouse 1</option>
                                            <option value="2">Warehouse 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sku">SKU<span class="text-red">*</span></label>
                                        <input id="sku" type="text" class="form-control" name="sku" value="" placeholder="Enter Product SKU" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price<span class="text-red">*</span></label>
                                        <input id="price" type="text" class="form-control" name="price" value="" placeholder="Enter product price" required="">
                                        <div class="help-block with-errors"></div>


                                    </div>
                                    <div class="form-group">
                                        <label for="purchase_price">Purchase Price<span class="text-red">*</span></label>
                                        <input id="purchase_price" type="text" class="form-control" name="purchase_price" value="" placeholder="Enter product price" required="">
                                        <div class="help-block with-errors"></div>


                                    </div>
                                    <div class="form-group">
                                        <label for="offer_price">Offer Price</label>
                                        <input id="offer_price" type="text" class="form-control" name="offer_price" value="" placeholder="Enter offer price" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Qty<span class="text-red">*</span></label>
                                        <input id="qty" type="text" class="form-control" name="qty" value="" placeholder="Enter Product Qty" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock_alert">Stock Alert<span class="text-red">*</span></label>
                                        <input id="stock_alert" type="text" class="form-control" name="stock_alert" value="" placeholder="Enter Stock Alert" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>


                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">

                                        <label>Select Categories</label>
                                        <div class="border-checkbox-section ml-3">
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox1" value="1">
                                                <label class="border-checkbox-label" for="checkbox1">Electronics</label>
                                            </div>
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox2" value="2">
                                                <label class="border-checkbox-label" for="checkbox2">Computers</label>
                                            </div>
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox3" value="3">
                                                <label class="border-checkbox-label" for="checkbox3">Smart Home</label>
                                            </div>
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox4" value="4">
                                                <label class="border-checkbox-label" for="checkbox4">Arts &amp; Crafts</label>
                                            </div>
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox5" value="5">
                                                <label class="border-checkbox-label" for="checkbox5">Fashion</label>
                                            </div>
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox6" value="6">
                                                <label class="border-checkbox-label" for="checkbox6">Baby</label>
                                            </div>
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox7" value="7">
                                                <label class="border-checkbox-label" for="checkbox7">Health &amp; Care</label>
                                            </div>
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox8" value="8">
                                                <label class="border-checkbox-label" for="checkbox8">Others</label>
                                            </div>
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkbox9" value="9">
                                                <label class="border-checkbox-label" for="checkbox9">Mobile Accesories</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Shiping</label>
                                        <div class="border-checkbox-section ml-3">
                                            <div class="border-checkbox-group border-checkbox-group-success d-block">
                                                <input class="border-checkbox" type="checkbox" id="checkboxfree" value="free">
                                                <label class="border-checkbox-label" for="checkboxfree">Free Shipping</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tax_type">Tax Type<span class="text-red">*</span></label>
                                        <select name="tax_type" class="form-control">
                                            <option>Select</option>
                                            <option value="Inclusive">Inclusive</option>
                                            <option value="Exclusive">Exclusive</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input">Product Tag</label>
                                        <input type="text" id="tags" class="form-control h-100" value="">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
