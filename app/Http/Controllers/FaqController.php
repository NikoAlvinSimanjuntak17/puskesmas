<?php
namespace App\Http\Controllers;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('faqs.index', compact('faqs'));
    }
}
