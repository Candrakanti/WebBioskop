<?php

namespace App\Http\Controllers\Api\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Xendit;
class XenditController extends Controller
{
    private $token = 'xnd_development_3zHBFl5dZAos8wfZSV5f4m98sPyZeXBtkoWAxavkVa5ykHTty0RrRfw0QOQA9wN';
    public function getListVa() {
        $getVABanks = \Xendit\VirtualAccounts::getVABanks();
        
    }
}
