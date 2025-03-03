<?php

namespace App\Http\Controllers\Certification\Bundle;

use App\CertificationBundle;
use App\Document;
use App\Download;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class BundleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bundles = CertificationBundle::withCount('certifications')->latest()->paginate(10);

        return view('front/certification/bundle/index', compact('bundles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CertificationBundle  $bundle
     * @return \Illuminate\Http\Response
     */
    public function show(CertificationBundle $bundle)
    {
        return view('front/certification/bundle/show', compact('bundle'));
    }

    /**
     * Download document.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function document(Request $request)
    {
        $document = Document::find($request->document_id);

        Download::create( array_merge($request->all(), ['document' => $document->name]) );

        return Storage::download($document->path, $document->name);
    }
}
