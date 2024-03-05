<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Mail\NewCandidateMail;
use App\Mail\NotifNewCandidateMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidateRequest $request)
    {
        $resume = $request->resume->store('resumes', 'public');
        $cid = $request->cid->store('cids', 'public');
        $avatar = $request->avatar->store('avatars', 'public');
        
        $candidate = new Candidate();
        $candidate->name = $request->name . ' ' . $request->first_name;
        $candidate->birthday = $request->birthday;
        $candidate->sex = $request->sex;
        $candidate->email = $request->email;
        $candidate->tel = $request->tel;
        $candidate->city = $request->city;
        $candidate->address = $request->address;
        $candidate->diploma = $request->diploma;
        $candidate->experience = $request->experience;
        $candidate->resume = $resume;
        $candidate->cid = $cid;
        $candidate->avatar = $avatar;

        if ($candidate->save()) {
            Mail::to($request->email)->send(new NewCandidateMail());
            Mail::to('rh@vibecro-corp.tech')->send(new NotifNewCandidateMail($candidate));
            Mail::to('contact@vibecro-corp.tech')->send(new NotifNewCandidateMail($candidate));
            Alert::success('Félicitations', 'Votre candidature a bien été envoyée.');
            return redirect(route('home'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
