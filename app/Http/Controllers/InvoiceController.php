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

            // Pass updated data to the invoice view as a named variable
            return view('invoice', ['activity' => $activity]);
        } else {
            // Invoice not found, return view with status 'Invoice Not Found'
            return view('invoice', ['activity' => null, 'status' => 'Invoice Not Found']);
        }
    }
}
