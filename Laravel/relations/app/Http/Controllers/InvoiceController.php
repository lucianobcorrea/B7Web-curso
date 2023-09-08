<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {

        $invoices = Invoice::with('address', 'user')->get();
        return $invoices;
    }

    public function create(Request $request)
    {

        $rawData = $request->only(['description', 'value', 'user_id', 'address_id']);
        $invoice = Invoice::create($rawData);

        return $invoice;
    }

    public function findOne(Request $request)
    {

        $invoice = Invoice::find($request->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }
}
