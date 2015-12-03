<?php namespace Leelam\Payments\Http\Controllers;


class PaymentController extends BaseController{

    public function index()
    {
        return view('payments::payments.index');
    }

}