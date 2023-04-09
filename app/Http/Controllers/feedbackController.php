<?php

namespace App\Http\Controllers;

use App\Models\demandes;
use App\Models\feedback_articles;
use Illuminate\Http\Request;
use App\Models\feedback_clients;

class feedbackController extends Controller
{
    public $clientHasFeedback = false;
    public $partnerHasFeedback = false;

    public function create($demandeId, $id)
    {
        if (auth()->user()->role == 1)
            return view("feedback/feedbackPartner", ['demandeId' => $demandeId, 'id' => $id]);

        if (auth()->user()->role == 2)
            return view("feedback/feedbackClient", ['demandeId' => $demandeId, 'id' => $id]);
    }
    public function store(Request $request)
    {
        if (auth()->user()->role == 1) {
            feedback_clients::create([
                'partner_id' => auth()->user()->id,
                'client_id' => $request['user_id'],
                'nb_stars' => $request['star'],
                'comment' => $request['comment'],
            ]);
            
            demandes::findOrFail($request['demande_id'])->update([
                'feedbackClient' => 'done',
            ]);

            return redirect('/profile/' . $request['user_id']);
        }

        if (auth()->user()->role == 2) {
            feedback_articles::create([
                'annonce_id' => $request['annonce_id'],
                'user_id' => auth()->user()->id,
                'nb_stars' => $request['star'],
                'comment' => $request['comment'],
            ]);

            demandes::findOrFail($request['demande_id'])->update([
                'feedbackArticle' => 'done',
            ]);

            return redirect('/article/' . $request['annonce_id']);
        }
    }
}