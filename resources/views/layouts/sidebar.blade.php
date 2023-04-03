<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="/" class="waves-effect">
                        <i class="bx bx-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a  class="has-arrow waves-effect">
                        <i class="bx bx-spreadsheet"></i>
                        <span>Data Table</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('seller.index') }}"> <i class="bx bxs-user-rectangle"></i>Seller</a></li>
                        <li><a href="{{ route('supplier.index') }}"> <i class="bx bxs-truck"></i>Supplier</a></li>
                        <li><a href="{{ route('barang.index') }}"> <i class="bx bxs-package"></i>Barang</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('kasir.index') }}" class="waves-effect">
                        <i class="bx bx-store"></i>
                        <span>Kasir</span>
                    </a>
                </li>

                {{-- <li class="menu-title" key="t-apps">admin</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store-alt"></i>
                        <span key="bx bx-store-alt">toko</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href={{ route('seller.create') }} class="bx bx-add-to-queue">Seller</a></li>
                        <li><a href={{ route('barang.create') }} class="bx bx-add-to-queue">Jajan</a></li>
                        <li><a href={{ route('supplier.create') }} class="bx bx-add-to-queue">Supplier</a></li>

                    </ul>
                </li>

                <li>
                    <a href={{ route('supplier.create') }} class="">
                        <i class="bx bx-male"></i>
                        <span key="bx bx-male">Supplier</span>
                    </a>

                </li>
                <li>
                    <a href={{ route('seller.create') }} class="">
                        <i class="bx bx-male"></i>
                        <span key="bx bx-male">Seller</span>
                    </a>
                </li>

                <li>
                    <a href="" class="">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">@lang('translation.Email')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">rekap</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
