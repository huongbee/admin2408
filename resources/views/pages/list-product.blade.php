@extends('layout.layout')
@section('content')   
<section id="main-content">
    <section class="wrapper">
      <div class="panel panel-body">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>
                    Danh sách sản phẩm loại <i>{{$type->name}}</i>
                    </b>
                </div>
                <div class="panel-body">
                    @if(count($listProduct)>0)
                    <table class="table">
                        <thead>
                            <th>Mã SP</th>
                            <th>Tên SP</th>
                            <th>Đơn giá</th>
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>Tổng tiền</th>
                            <th>Ghi chú</th>
                            <th>Tuỳ chọn</th>
                        </thead>
                        <tbody>
                            @foreach($listProduct as $product)
                            <tr>
                                <td>SP-{{$product->id}}</td>
                                <td>
                                    {{$product->name}}
                                </td>
                                <td>
                                    {{number_format($product->price)}}
                                </td>
                                <td>
                                <img src="products-images/{{$product->image}}" height="80px">
                                </td>
                                <td>
                                    
                                </td>
                                <td></td>

                                <td>....</td>
                                <td>
                                    <button class="btn btn-primary" style="width:100%">
                                        <a href="" style="color:#fff">
                                            Cập nhật
                                        </a>
                                    </button>
                                    <button style="width:100%" class="btn btn-danger">
                                        Xoá
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$listProduct->links()}}

                    @else
                    Chưa có sản phẩm
                    @endif
                </div>
            </div>
        </section>
      </div>
    </section>
</section>

@endsection