<?php

namespace App\Http\Controllers;

use App\Cvs;
use App\Experiences;
use App\Projects;
use App\Whoami;
use App\WhoamiFr;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = "english")
    {

        $cv = $lang === "english" ? Cvs::find(2) : Cvs::find(1);

        $whoami = Whoami::get();
        $projects = Projects::get();
        $experiences = Experiences::get();
        return view($lang, [
            'cv' => $cv,
            "whoamis" => $whoami,
            "projects" => $projects,
            "experiences" => $experiences
        ]);
    }
    private function experienceThreat($experiences)
    {
        $exp = [];
        $result = [];
        foreach ($experiences as $key => $experience) {
            array_push($exp, $experience);
            if (count($exp) === 3) {
                array_push($result, $exp);
                $exp = [];
            }
        }
        return $result;
    }
    public function indexFr()
    {
        return $this->index("french");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
