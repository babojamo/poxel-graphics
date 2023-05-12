<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GetQuotation;

class GetQuotationController extends Controller
{
    public function index(Request $request) {

        $others = ($request->has('service') && $request->service === 'others');

        $order_types = [
            'Basketball Jersey Upper Only',
            'Basketball Jersey Set',
            'T-shirt',
            'Poloshirt',
            'Longsleeves',
            'Longsleeves with hood',
            'Jacket',
            'Pants',
            'Tube Mask',
            'Armsleeves',
            'Pillow',
            'Mug',
            'Lanyard',
            'Cap (Trucker Cap)',
            'Cloth Banner'
        ];

        $other_order_types = [
            'Tarpaulin',
            'Sticker',
            'Teardrop Banner',
            'Feather Banner',
            'Roll Up Banner',
            'X-Banner',
            'Panaflex',
            'Sticker Signage',
            'Acrylic Signage',
        ];

        $printing_types = [
            'Full Sublimation',
            'Spot Sublimation',
            'Half Sublimation',
            'Print & Press Only',
            'Mug Printing',
            'Lanyard Printing',
            'Cap (Trucker Cap) Printing',
        ];

        $fabrics = [
            'Cooltext 170gsm',
            'Cooltext 200gsm',
            'Nike Fabric',
            'Coolmax',
        ];

        $colar_types = [
            'Round Neck',
            'V-Neck',
            'Turtle Neck',
            'Poloshirt Collar',
            'Poloshirt Collar with Chest Zipper',
            'Chinese Collar',
            'N/A',
        ];

        $sticker_types = [
            'Label',
            'Laminated',
            'Reflectorized'
        ];

        return view('quote', [
            'others' => $others,
            'order_types' => $order_types,
            'printing_types' => $printing_types,
            'fabrics' => $fabrics,
            'colar_types' => $colar_types,
            'other_order_types' => $other_order_types,
            'sticker_types' => $sticker_types,
        ]);
    }

    public function send(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required',
            'email_address' => 'required|email',
            'contact' => 'required',
            'service' => 'required',
            'order_type' => 'required',
            'quantity' => 'required',
            'size' => 'nullable',
            'printing_type' => 'required_if:service,sublimation',
            'fabric' => 'required_if:service,sublimation',
            'collar_type' => 'required_if:service,sublimation',
            'sticker_type' => 'required_if:service,others',
            'reference' => 'file|nullable',
            'deadline' => 'nullable',
            'remarks' => 'nullable',
        ]);
        
        Mail::to(config('app.poxel.quotation_receiver'))->send(new GetQuotation($request));
 
        return redirect()->back()->with('success', 'Thank you for your message! We appreciate your interest in our services and we are glad to hear that we will be able to provide you with a quotation soon.');
    }
}
