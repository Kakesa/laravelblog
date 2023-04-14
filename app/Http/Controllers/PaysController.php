<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function index(){

        $table = [
            "RDC", "France", "Mali"
        ];
        $title = "Les pays";
        ["title" =>$title];
        return view('pays', compact('table'))->with('title');
    }

    public function show($id){
        $table = [
            "RDC", "France", "Mali"
        ];
        $title =$table[$id-1];
        return view('single',compact('title'));
  }
}
