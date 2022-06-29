<?php

namespace App\Http\Controllers\Frontend\Others\Info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\Info\Info;
use App\Models\Live\Channel;

class InfoController extends Controller
{
    public function InfoView()
    {
        $data ['allData'] = Channel::all();
        return view('frontend.code-section.modal.live1.info',$data);
    }

    public function Info(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = new Info();
        $data->channel_id = $request->channel_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();

        return redirect()->route('info.view');
    }
}
