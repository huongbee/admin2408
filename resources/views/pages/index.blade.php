@extends('layout.layout')
@section('content')   
<section id="main-content">
    <section class="wrapper">
      <div class="panel panel-body">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>
                    Danh sách ĐH 
                    @if($status==0)
                    chưa xác nhận
                    @elseif($status==1)
                    đã xác nhận
                    @elseif($status==2)
                    hoàn tất
                    @else 
                    bị huỷ
                    @endif
                    </b>
                </div>
                <div class="panel-body">
                    @if(count($bills)>0)
                    <table class="table">
                        <thead>
                            <th>Mã hoá đơn</th>
                            <th>Ngày đặt</th>
                            <th>Khách hàng</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Sản phẩm</th>
                            <th>Tổng tiền</th>
                            <th>Ghi chú</th>
                            @if($status==0 || $status==1)
                            <th>Tuỳ chọn</th>
                            @endif
                        </thead>
                        <tbody>
                            @foreach($bills as $bill)
                            <tr>
                                <td>HD-{{$bill->id}}</td>
                                <td>{{date('d-m-Y H:i:s',strtotime($bill->date_order))}}</td>
                                <td>
                                    <p>{{$bill->customer->name}}</p>
                                    <p>{{$bill->customer->phone}}</p>
                                    <p>{{$bill->customer->address}}</p>
                                </td>
                                <td>....</td>
                                <td>
                                    @foreach($bill->product as $product)
                                    <div>
                                        <p>{{$product->name}}</p>
                                        <p><img src="products-images/{{$product->image}}" height="80px"></p>
                                        <hr>
                                    </div>
                                    @endforeach
                                </td>
                                <td>....</td>

                                <td>....</td>
                                @if($status==0 || $status==1)
                                <td>
                                <button style="width:100%" class="btn btn-sm btn-danger btn-cancel" data-id="{{$bill->id}}">Huỷ đơn hàng</button>
                                    <br>
                                    @if($status==1)
                                    <button style="width:100%" class="btn btn-sm btn-success">Hoàn tất</button>
                                    @endif
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$bills->links()}}

                    @else
                    Chưa có đơn hàng
                    @endif
                </div>
            </div>
        </section>
      </div>
    </section>
</section>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    
                </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                <button type="button" class="btn btn-primary">Tiếp tục</button>
            </div>
        </div>
    </div>
  </div>
<script>
$(document).ready(function(){
    $('.btn-cancel').click(function(){
        var idBill = $(this).attr('data-id')
        $('.modal-title').text('ĐH HD-'+idBill+' sẽ chuyển sang trạng thái huỷ!')
        $('#myModal').modal('show')

    })
})
</script>

@endsection