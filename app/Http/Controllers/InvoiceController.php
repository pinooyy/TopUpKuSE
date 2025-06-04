<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityHistory;

class InvoiceController extends Controller
{
    public function show($invoice_number)
    {
        // Update status to 'paid' for the given invoice number
        $activity = ActivityHistory::where('invoice_number', $invoice_number)->first();

        if ($activity) {
            $activity->status = 'paid';
            $activity->save();

            // Pass updated data to the invoice view
            return view('invoice', $activity->toArray());
        } else {
            // Invoice not found, return view with status 'Not Found'
            return view('invoice', ['status' => 'Invoice Not Found']);
        }
    }
}
