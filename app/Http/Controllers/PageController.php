<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('pages.about.about');
    }

    public function contact() {
        return view('pages.about.contact');
    }

    public function teams() {
        return view('pages.about.teams');
    }

    public function policies() {
        return view('pages.about.policies');
    }

    public function submissions() {
        return view('pages.about.submissions');
    }

    public function sponsorship() {
        return view('pages.about.sponsorship');
    }

    public function site() {
        return view('pages.about.site');
    }

    public function system() {
        return view('pages.about.system');
    }

    public function statistics() {
        return view('pages.about.statistics');
    }
}
