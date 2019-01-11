@extends('layout.layout')
@section('content')   
<section id="main-content">
    <section class="wrapper">
      <div class="panel panel-body">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>
                    Cập nhật sản phẩm <i>{{$product->name}}</i>
                    </b>
                </div>
                <div class="panel-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Tên sản phẩm:</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="price">Đơn giá:</label>
                                    <input type="text" class="form-control" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="name">Khuyến mãi kèm theo:</label>
                                    <input type="text" class="form-control" name="promotion">
                                </div>
                                
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Chọn loại:</label>
                                    <select name="type" class="form-control">
                                        <option value="">Loai A</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label for="price">Đơn giá khuyến mãi:</label>
                                    <input type="text" class="form-control" name="promotion_price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="price">Mô tả:</label>
                                    <textarea  class="form-control" name="promotion_price"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="file" name="image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="status"> Sản phẩm đặc biệt?</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="new"> Sản phẩm mới?</label>
                                    </div>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                </div>
            </div>
        </section>
      </div>
    </section>
</section>

@endsection