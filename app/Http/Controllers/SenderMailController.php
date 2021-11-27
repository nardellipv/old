<?php

namespace App\Http\Controllers;

use App\SenderMail;
use Illuminate\Http\Request;

class SenderMailController extends Controller
{
    public function index()
    {
        $emails = SenderMail::all();

        return view('admin.senderEmail.index', compact('emails'));
    }

    public function updateSenderMailActive(Request $request, $id)
    {
        $email = SenderMail::find($id);
        $email->active = 'Y';
        $email->save();


        toastr()->success('Envio de Email Activado Correctamente', 'Envio de Email Modificada', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function updateSenderMailDeactive(Request $request, $id)
    {
        $email = SenderMail::find($id);
        $email->active = 'N';
        $email->save();


        toastr()->success('Envio de Email Desactivado Correctamente', 'Envio de Email Modificada', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }
}
