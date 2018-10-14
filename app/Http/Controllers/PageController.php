<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = "Published Articles: PRoUSt Volume 1 Number 1 April 2018";
        $content = "We are pleased to announce that Psychological Research on Urban Society (PRoUSt) has published the first volume and number in April 2018.";
        $announcements = collect([
            [
                'title' => $title,
                'content' => $content,
            ],
            [
                'title' => $title,
                'content' => $content,
            ]]);
        return view('index')->with('announcements', $announcements);
    }

    public function search() {
        return view('pages.search');
    }

    public function announcement() {
        $title = "Published Articles: PRoUSt Volume 1 Number 1 April 2018";
        $content = "We are pleased to announce that Psychological Research on Urban Society (PRoUSt) has published the first volume and number in April 2018.";
        $announcements = collect([
            [
                'title' => $title,
                'content' => $content,
            ],
            [
                'title' => $title,
                'content' => $content,
            ]]);
        return view('pages.announcement')->with('announcements', $announcements);
    }

    public function test() {
        return view('test');
    }
    
    public function browse() {
        return view('pages.browse');
    }

    public function issue() {
        return view('pages.issue');
    }

    public function detail() {
        return view('pages.content_detail');
    }
}
