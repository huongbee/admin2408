<aside>
    <div id="sidebar"  class="nav-collapse" style="z-index:1">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            
            <li class="sub-menu">
                <a class="@if(Request::segment(1)=='bill') active @endif" href="javascript:;" >
                    <i class=" fa fa-envelope"></i>
                    <span>Quản lý đơn hàng</span>
                </a>
                <ul class="sub">
                    <li><a  href="inbox.html">Inbox</a></li>
                    <li><a  href="inbox_details.html">Inbox Details</a></li>
                </ul>
            </li>
            <li>
                <a class="@if(Request::segment(1)=='add-product') active @endif"  href="{{route('add-product')}}" >
                    <i class="fa fa-plus"></i>
                    <span>Thêm sản phẩm</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@if(Request::segment(1)=='list-product') active @endif" href="javascript:;" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Danh sách loại</span>
                </a>
                <ul class="sub">
                    @foreach($menu as $m)
                    <li><a href="{{route('list-product',$m->id)}}">{{$m->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-shopping-cart"></i>
                    <span>Shop</span>
                </a>
                <ul class="sub">
                    <li><a  href="product_list.html">List View</a></li>
                    <li><a  href="product_details.html">Details View</a></li>
                </ul>
            </li>
            

            <!--multi level menu start-->
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-sitemap"></i>
                    <span>Multi level Menu</span>
                </a>
                <ul class="sub">
                    <li><a  href="javascript:;">Menu Item 1</a></li>
                    <li class="sub-menu">
                        <a  href="boxed_page.html">Menu Item 2</a>
                        <ul class="sub">
                            <li><a  href="javascript:;">Menu Item 2.1</a></li>
                            <li class="sub-menu">
                                <a  href="javascript:;">Menu Item 3</a>
                                <ul class="sub">
                                    <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                    <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--multi level menu end-->

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>