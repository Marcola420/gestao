<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Client;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('client')->latest()->get();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('payments.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'amount' => 'required|numeric',
            'status' => 'required',
            'method' => 'nullable',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')
            ->with('success', 'Pagamento registrado!');
    }

    public function edit(Payment $payment)
    {
        $clients = Client::all();
        return view('payments.edit', compact('payment', 'clients'));
    }

    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());

        return redirect()->route('payments.index')
            ->with('success', 'Pagamento atualizado!');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payments.index')
            ->with('success', 'Pagamento removido!');
    }
}