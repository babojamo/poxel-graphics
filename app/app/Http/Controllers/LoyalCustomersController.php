<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service as PoxelService;

class LoyalCustomersController extends Controller
{
    public function index() {
        $customers = [
            asset('assets/img/clients/cebc.png'),
            asset('assets/img/clients/inner_wheel.png'),
            asset('assets/img/clients/palawan_pawnshop.png'),
            asset('assets/img/clients/shell.png'),
            asset('assets/img/clients/dpwh.png'),
            asset('assets/img/clients/j_t.png'),
            asset('assets/img/clients/pldt.png'),
            asset('assets/img/clients/sto_nino_mactan_college.png'),
            asset('assets/img/clients/everyday_pharmacy.png'),
            asset('assets/img/clients/mactan_grains_terminal.png'),
            asset('assets/img/clients/prince_ssd.png'),
            asset('assets/img/clients/harley_davidson.png'),
            asset('assets/img/clients/mazda.png'),
            asset('assets/img/clients/rdak.png'),
            asset('assets/img/clients/heritage.png'),
            asset('assets/img/clients/mitsubishi.png'),
            asset('assets/img/clients/roz_lab.png'),
        ];

        return view('about.partners', [
            'customers' => $customers
        ]);
    }
}
