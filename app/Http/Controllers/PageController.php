<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title="Reviewer";
    	return view('pages.index')->with('title',$title);
    }
    public function topic(){
        $data = array(
            'title' => 'Topic',
            'contents' => ['Nervous System','Respiratory System','Circulatory System','Digestive System','Skeletal System']
         );
    	return view('pages.topic')->with($data);
    }
    public function nervous(){
        $ns = array (
            'title' => 'Nervous System',
            'contents' => ['Central Nervous System','Peripheral Nervous System']
        );
        return view('topics.nervous')->with($ns);
    }
    public function respiratory(){
        $rs= array (
            'title' => 'Respiratory System',
            'contents' => ['Conducting Zone','Respiratory Zone']
        );
        return view('topics.nervous')->with($rs);
    }
    public function circulatory(){
        $cs= array (
            'title' => 'Circulatory System',
            'contents' => ['Cardiovascular System','Lymphatic System']
        );
        return view('topics.nervous')->with($cs);
    }


}
