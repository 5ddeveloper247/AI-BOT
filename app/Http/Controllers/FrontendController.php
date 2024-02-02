<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('home');
    } 
    public function product(){
        return view('web.product');
    } 
    public function pricing(){
        return view('web.pricing');
    } 
    public function tools(){
        return view('web.tools');
    } 
    public function support(){
        return view('web.support');
    } 
    public function contact(){
        return view('web.contact');
    } 
    public function privacy(){
        return view('web.privacy');
    } 
    public function termCondition(){
        return view('web.term_condition');
    }
    public function plans(){
        return view('web.plans');
    } 
    public function payment(){
        return view('web.payment');
    } 
    public function chat(){
        return view('web.chat_dashboard');
    } 
}
