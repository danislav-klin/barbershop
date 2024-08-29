<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordRequest;
use App\Models\Customer;
use App\Models\Record;
use App\Models\Servic;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $services = Servic::all();

        return view('pages.main', ['services' => $services]);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function barbers()
    {
        return view('pages.barbers');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function contacts()
    {
        return view('pages.contacts');
    }
    public function prices()
    {
        $services = Servic::all();

        return view('pages.prices', ['services' => $services]);
    }

    public function form()
    {
        return view('form.main');
    }

    public function record(RecordRequest $request)
    {
        $validated = $request->validated();

        $record = new Record();

        $record->date = $validated['date'];
        $record->time = $validated['radio-1'];
        $record->master = $validated['master'];
        $record->service = $validated['service'];
        $record->name_klient = $validated['name'];
        $record->phone = $validated['phone'];
        $record->email = $validated['email'];
        $record->comment = $validated['comment'];
        $record->total_price = $validated['total_price'];

        $record->save();

        return redirect()->route('form.main')->with('success', 'заявка успешно отправлена');

    }

    public function customer(Request $req)
    {
        $data = $req->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'min:5|nullable',
        ]);

        $customer = Customer::create($data);

        return redirect(route('contacts'))->with('success', 'Сообщение отправлено');

    }
}
