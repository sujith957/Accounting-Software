@extends('layouts.header')

@section('content')
    @include('layouts.sidebar')

    <div class="main" id="main">

        @include('layouts.navbar')

        <x-list title="Sales Voucher" add-url="" add-text="Add Sales Voucher">
            <x-slot:filters>
                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">
                            From Date
                        </label>
                        <input type="date" id="from_date" class="form-control">
                    </div>

                    <div class="col-md-3">

                        <label class="form-label">
                            To Date
                        </label>

                        <input type="date" id="to_date" class="form-control">

                    </div>


                    <div class="col-md-3">

                        <label class="form-label">
                            Customer
                        </label>

                        <select id="client_id"  class="form-select selectpicker">
                            @foreach ($clients as $client )
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="col-md-3 d-flex align-items-end">

                        <button type="button" id="filterBtn" class="btn btn-primary me-2">
                            Filter
                        </button>

                        <button type="button" id="resetBtn" class="btn btn-light">
                            Reset
                        </button>

                    </div>
                </div>

            </x-slot:filters>

            <x-slot:table>
                <table id="salesVoucherTable" class="table table-hover align-middle w-100">
                    <thead>
                        <tr>
                            <th width="30"><input type="checkbox" id="selectAll"></th>
                            <th>#</th>
                            <th>Number</th>
                            <th>Customer</th>
                            <th>Invoice Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Approval</th>
                            <th>Updated By</th>
                        </tr>
                    </thead>
                </table>
            </x-slot:table>

        </x-list>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

            let table = $('#salesVoucherTable').DataTable({
                processing: true,

                serverSide: true,

                ajax: {

                    url: "{{ route('sales-vouchers.datatable') }}",

                    data: function(d) {

                        d.from_date = $('#from_date').val();

                        d.to_date = $('#to_date').val();

                        d.client_id = $('#client_id').val();

                    }

                },

                order: [
                    [1, 'desc']
                ],

                pageLength: 25,

                lengthMenu: [
                    [10, 25, 50, 100],
                    [10, 25, 50, 100]
                ],

                columns: [

                    {
                        data: null,

                        orderable: false,

                        searchable: false,

                        render: function(data, type, row) {

                            return `
                                <input
                                    type="checkbox"
                                    class="row-checkbox"
                                    value="${row.id}"
                                >
                            `;

                        }

                    },

                    {
                        data: 'id',

                        name: 'id'
                    },

                    {
                        data: 'number',
                        name: 'number',

                        render: function(data, type, row) {

                            return `
                                <div class="voucher-number-wrapper">

                                    <div class="voucher-number">
                                        ${data ?? ''}
                                    </div>

                                    <div class="table-actions">

                                        <a href="/sales-vouchers/${row.id}"
                                        class="action-view">
                                            View
                                        </a>

                                        <span>|</span>

                                        <a href="/sales-vouchers/${row.id}/edit"
                                        class="action-edit">
                                            Edit
                                        </a>

                                        <span>|</span>

                                        <a href="javascript:void(0)"
                                        class="action-delete deleteSalesVoucher"
                                        data-id="${row.id}">
                                            Delete
                                        </a>

                                    </div>

                                </div>
                            `;
                        }
                    },

                    {
                        data: 'client_name',

                        name: 'client.name'
                    },

                    {
                        data: 'invoice_date',

                        name: 'invoice_date'
                    },

                    {
                        data: 'amount',

                        name: 'amount',

                        className: 'text-end'
                    },

                    {
                        data: 'status_badge',

                        name: 'status',

                        orderable: false
                    },

                    {
                        data: 'approval_badge',

                        name: 'approval',

                        orderable: false
                    },

                    {
                        data: 'updated_by_name',

                        name: 'updated_by'
                    }

                ],

                language: {

                    search: "",

                    searchPlaceholder: "Search..."

                }

            });

            $('#filterBtn').on('click', function() {

                table.ajax.reload();

            });


            $('#resetBtn').on('click', function() {

                $('#from_date').val('');

                $('#to_date').val('');

                $('#vendor_id').val('');

                table.ajax.reload();

            });

            $('#selectAll').on('change', function() {

                $('.row-checkbox').prop(
                    'checked',
                    this.checked
                );

            });

            $(document).on(
                'click',
                '.deleteSalesVoucher',
                function() {

                    let id = $(this).data('id');

                    if (!confirm(
                            'Are you sure you want to delete this Sales Voucher?'
                        )) {
                        return;
                    }


                    $.ajax({

                        url: "{{ url('sales-vouchers') }}/" + id,

                        type: "DELETE",

                        data: {

                            _token: "{{ csrf_token() }}"

                        },

                        success: function(response) {

                            if (response.success) {

                                table.ajax.reload(
                                    null,
                                    false
                                );

                                alert(response.message);

                            } else {

                                alert(
                                    response.message ||
                                    'Unable to delete voucher.'
                                );

                            }

                        },

                        error: function(xhr) {

                            alert(
                                'Something went wrong.'
                            );

                        }

                    });

                }
            );

        });
    </script>
@endsection
