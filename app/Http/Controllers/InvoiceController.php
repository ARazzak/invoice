<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function get_all_invoice()
    {
        $invoices = Invoice::all();
        return view('invoice', compact('invoices'));
    }
    
}
