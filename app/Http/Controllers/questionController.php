<?php

namespace App\Http\Controllers;

use App\Area;

use App\Category;

use App\Question;

use Illuminate\Http\Request;

class questionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::join('categories', 'questions.id_category', '=', 'categories.id_category')
            ->join('areas', 'areas.id_area', '=', 'categories.id_area')
            ->get();

        return view('questions.questions', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // Obtener todas las areas con al menos una categoría
        $categories = Area::join('categories', 'areas.id_area', '=', 'categories.id_area')
            ->orderBy('areas.area')
            ->orderBy('categories.category')
            ->groupBy('areas.id_area', 'areas.area', 'categories.category', 'categories.id_category')
            ->get();

        return view('questions.createQuestions', compact('areas', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Question::create([
            'id_category' => $request -> id_category,
            'question' => $request -> question,
            'type' => $request -> type,
            'status' => ($request -> status == null) ? 0:1
        ]);

        return redirect('questions');
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
        Question::findOrFail($id)->delete();

        return redirect('questions');
    }
}
