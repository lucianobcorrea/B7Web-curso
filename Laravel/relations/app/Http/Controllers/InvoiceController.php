<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request) {

        $invoices = Invoice::all();
        return $invoices;
    }

    public function create(Request $request) {

        $rawData = $request->only(['description', 'value', 'user_id', 'address_id']);
        $invoice = Invoice::create($rawData);

        return $invoice;
    }
}