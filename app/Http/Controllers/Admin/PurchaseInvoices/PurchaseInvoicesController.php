<?php

namespace App\Http\Controllers\Admin\PurchaseInvoices;

use App\Http\Controllers\Admin\Admin;


class PurchaseInvoicesController extends Admin
{

    public function index()
    {
        return view('admin.purchase_voucher.index');
    }
}
