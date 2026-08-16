<?php

namespace App\Http\Controllers\Admin\Invoices;

use App\Http\Controllers\Admin\Admin;
use App\Models\Admin\Client\ClientModel;
use App\Models\Admin\Invoices\InvoiceModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class InvoicesController extends Admin
{

    public function index()
    {
        $clients = ClientModel::all();
        return view('admin.sales_voucher.index', compact('clients'));
    }

    public function datatable(Request $request)
    {
        $query = InvoiceModel::with('client')->orderByDesc('id');

        if ($request->filled('from_date')) {
            $query->whereDate(
                'invoice_date',
                '>=',
                $request->from_date
            );
        }

        // To date
        if ($request->filled('to_date')) {
            $query->whereDate(
                'invoice_date',
                '<=',
                $request->to_date
            );
        }

        // Client
        if ($request->filled('client_id')) {
            $query->where(
                'client_id',
                $request->client_id
            );
        }

        return datatables()
            ->of($query)

            ->addColumn('client_name', function ($row) {
                return $row->client
                    ? e($row->client->name)
                    : '-';
            })

            ->editColumn('invoice_date', function ($row) {

                if (!$row->invoice_date) {
                    return '-';
                }

                return \Carbon\Carbon::parse($row->invoice_date)
                    ->format('d-m-Y');
            })

            ->editColumn('amount', function ($row) {

                return number_format(
                    $row->amount ?? 0,
                    2
                );
            })

               ->addColumn('status_badge', function ($row) {

            switch ((string) $row->status) {

                case '1':
                    $text = 'Open';
                    $class = 'badge-warning';
                    break;

                case '2':
                    $text = 'Closed';
                    $class = 'badge-success';
                    break;

                case '0':
                    $text = 'Cancelled';
                    $class = 'badge-danger';
                    break;

                default:
                    $text = 'Pending';
                    $class = 'badge-secondary';
                    break;
            }

            return '<span class="status-badge ' .
                $class .
                '">' .
                e($text) .
                '</span>';
        })

             ->addColumn('approval_badge', function ($row) {

            switch ((string) $row->approval) {

                case 'Approved':
                case '1':
                    $text = 'Approved';
                    $class = 'badge-success';
                    break;

                case 'Rejected':
                case '2':
                    $text = 'Rejected';
                    $class = 'badge-danger';
                    break;

                default:
                    $text = 'Pending';
                    $class = 'badge-warning';
                    break;
            }

            return '<span class="status-badge ' .
                $class .
                '">' .
                e($text) .
                '</span>';
        })

            ->addColumn('updated_by_name', function ($row) {

                return $row->updated_by ?? '-';
            })

            ->rawColumns([
                'status_badge',
                'approval_badge'
            ])

            ->make(true);
    }
}
