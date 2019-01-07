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
                            <tr>
                                <td>HD12345</td>
                                <td>....</td>
                                <td>....</td>
                                <td>....</td>
                                <td>....</td>
                                <td>....</td>
                                <td>....</td>
                                @if($status==0 || $status==1)
                                <td>
                                    Huỷ đơn hàng
                                    <br>
                                    @if($status==1)
                                    Hoàn tất
                                    @endif
                                </td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
      </div>
    </section>
</section>
@endsection