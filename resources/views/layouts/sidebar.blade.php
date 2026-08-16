<div class="sidebar" id="sidebar">
    <div class="logo">
        SUJITH
    </div>
    <button class="mobile-close" id="closeBtn">
        <i class="fa fa-xmark"></i>
    </button>
    <ul>
        <li>
            <a href="#">
                <i class="fa fa-gauge"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#accountMenu" aria-expanded="false">
                <i class="fa fa-file-invoice-dollar"></i>
                <span>Accounting Vouchers</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="accountMenu">
                <li>
                    <a href="{{ route('invoices.list') }}">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Sales Voucher</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('purchase.invoices.list') }}">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Purchase Voucher</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Journal</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Credit Note</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Debit Note</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Receipt Voucher</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Payment Voucher</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Contra</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-chart-line"></i>
                <span>Chart Of Accounts</span>
            </a>
        </li>
         <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#blogMenu" aria-expanded="false">
                <i class="fa fa-blog"></i>
                <span>Blog</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="blogMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>All Blog</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Tags</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Commands</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#productMenu" aria-expanded="false">
                <i class="fa fa-boxes-stacked"></i>
                <span>Products</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="productMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>All Products</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Deals</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Brands</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Coupons</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Units</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#ordersMenu" aria-expanded="false">
                <i class="fa fa-bag-shopping"></i>
                <span>Orders</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="ordersMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>All Orders</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Cancel Request</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#enquiresMenu" aria-expanded="false">
                <i class="fa fa-envelope-open-text"></i>
                <span>Enquires</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="enquiresMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Contact Enquires</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#salesMenu" aria-expanded="false">
                <i class="fa fa-shopping-cart"></i>
                <span>Sales</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="salesMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Customer</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Proposal</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Packing List</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Delivery Voucher</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Invoice</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Credit Note</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Proforma Invoice</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#purchaseMenu" aria-expanded="false">
                <i class="fa fa-basket-shopping"></i>
                <span>Purchase</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="purchaseMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Vendor</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Quotation</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Purchase Order</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Good Receive Note</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Invoice</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Debit Note</span>
                    </a>
                </li>
            </ul>
        </li>
         <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#faqsMenu" aria-expanded="false">
                <i class="fa fa-circle-question"></i>
                <span>Faqs</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="faqsMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>All Faqs</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Categories</span>
                    </a>
                </li>
            </ul>
        </li>
         <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#pagesMenu" aria-expanded="false">
                <i class="fa fa-file-lines"></i>
                <span>Pages</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="pagesMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>All Pages</span>
                    </a>
                </li>
            </ul>
        </li>
         <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#adsMenu" aria-expanded="false">
                <i class="fa fa-rectangle-ad"></i>
                <span>Manage Ads</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="adsMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Ads</span>
                    </a>
                </li>
            </ul>
        </li>
         <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#usersMenu" aria-expanded="false">
                <i class="fa fa-user-group"></i>
                <span>Users</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="usersMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span> All Users</span>
                    </a>
                </li>
            </ul>
        </li>
         <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#customersMenu" aria-expanded="false">
                <i class="fa fa-users"></i>
                <span>Customers</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="customersMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span> All Customers</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#reportMenu" aria-expanded="false">
                <i class="fa fa-chart-column"></i>
                <span>Reports</span>
                <i class="fa fa-angle-down ms-auto"></i>
            </a>

            <ul class="collapse submenu" id="reportMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Trial Balance</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Balance Sheet</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-circle fa-xs"></i>
                        <span>Profit and Loss</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-gear"></i>
                <span>Settings</span>
            </a>
        </li>
    </ul>
</div>
