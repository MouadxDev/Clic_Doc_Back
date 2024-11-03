<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Entite;
use App\Models\Ordonnance;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Ordonnance::join("consultations as c","c.id",'=',"ordonnances.consultation_id")
        ->groupBy("ordonnances.consultation_id")
        ->join("patients as p" , "p.id",'=',"c.patient_id")
        ->select("p.name","p.surname","c.uid","p.avatar","c.doctor_id","c.motif",DB::raw("count(*) as medocs"))
        ->where("c.doctor_id","=",auth()->user()->id);
        if(request()->has("patient_id"))
        {
            $model->where("c.patient_id","=",request()->patient_id);
        }
        if(request()->has("toGet"))
            return $model->paginate(request()->toGet);
        else
        {
            return $model->get();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ordonnance = new Ordonnance();
        $ordonnance -> consultation_id = request()->consultation_id;
        $ordonnance -> medicament_id = request()->medicament_id;
        $ordonnance -> posologie = request()->posologie;
        $ordonnance -> commentaire = request()->commentaire;
        $ordonnance -> save();

        return $ordonnance;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Ordonnance::join("medicaments as m","m.id",'=',"ordonnances.medicament_id")
        ->where("ordonnances.consultation_id","=",$id)
        ->select("m.nom as medicament","ordonnances.*")
        ->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ordonnance = Ordonnance::find($id);
        $ordonnance ->delete();
        return ["message"=>"Supression avec succès"];
    }

    public function imprimer(string $id)
    {
        $data["ordonnance"] = Ordonnance::join("medicaments as m","m.id",'=',"ordonnances.medicament_id")
        ->where("ordonnances.consultation_id","=",$id)
        ->select("m.nom as medicament","ordonnances.*")
        ->get();
        $consult = Consultation::find($id);
        $data["patient"] = Patient::find($consult->patient_id);
        $data["docteur"] = User::find($consult->doctor_id);
        $data["entite"] = Entite::find($data["docteur"]->entity_id);

        return view("ordonnance",$data);
    }
}
