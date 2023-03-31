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

                <li class="menu-title" key="t-apps">admin</li>

                {{-- <li>
                    <a href="calendar" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">@lang('translation.Calendar')</span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a href="chat" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">@lang('translation.Chat')</span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a href="apps-filemanager" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span class="badge rounded-pill bg-success float-end"
                            key="t-new">@lang('translation.New')</span>
                        <span key="t-file-manager">@lang('translation.File_Manager')</span>
                    </a>
                </li> --}}

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
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet" key="t-wallet">@lang('translation.Wallet')</a></li>
                        <li><a href="crypto-buy-sell" key="t-buy">@lang('translation.Buy_Sell')</a></li>
                        <li><a href="crypto-exchange" key="t-exchange">@lang('translation.Exchange')</a></li>
                        <li><a href="crypto-lending" key="t-lending">@lang('translation.Lending')</a></li>
                        <li><a href="crypto-orders" key="t-orders">@lang('translation.Orders')</a></li>
                        <li><a href="crypto-kyc-application" key="t-kyc">@lang('translation.KYC_Application')</a></li>
                        <li><a href="crypto-ico-landing" key="t-ico">@lang('translation.ICO_Landing')</a></li>
                    </ul> --}}
                </li>

                <li>
                    <a href="" class="">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">@lang('translation.Email')</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox" key="t-inbox">@lang('translation.Inbox')</a></li>
                        <li><a href="email-read" key="t-read-email">@lang('translation.Read_Email')</a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span class="badge rounded-pill badge-soft-success float-end"
                                    key="t-new">@lang('translation.New')</span>
                                <span key="t-email-templates">@lang('translation.Templates')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic"
                                        key="t-basic-action">@lang('translation.Basic_Action')</a></li>
                                <li><a href="email-template-alert"
                                        key="t-alert-email">@lang('translation.Alert_Email')</a></li>
                                <li><a href="email-template-billing"
                                        key="t-bill-email">@lang('translation.Billing_Email')</a></li>
                            </ul>
                        </li>
                    </ul> --}}
                </li>

                <li>
                    <a href="javascript: void(0);" class="">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">rekap</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list" key="t-invoice-list">@lang('translation.Invoice_List')</a></li>
                        <li><a href="invoices-detail" key="t-invoice-detail">@lang('translation.Invoice_Detail')</a>
                        </li>
                    </ul> --}}
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
