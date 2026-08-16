<?php

namespace App\Models\Admin\Invoices;

use App\Models\Admin\Client\ClientModel;
use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
    protected $table = 'tblinvoices';
    protected $fillable = [
        'id',
        'number',
        'client_id',
        'invoice_date',
        'currency',
        'currency_rate',
        'subtotal',
        'discount',
        'discount_type',
        'tax_name',
        'tax_rate',
        'round_off',
        'round_off_ledger',
        'additional_charges',
        'additional_charges_ledger',
        'amount',
        'ref_no',
        'ledger_based',
        'acc_ledger',
        'status',
        'approval',
        'updated_by',
        'notes',
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'amount' => 'decimal:2',
    ];

    public function client()
    {
        return $this->belongsTo(ClientModel::class);
    }
}
