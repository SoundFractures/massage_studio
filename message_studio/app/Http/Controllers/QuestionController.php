<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $new = DB::table('questions')->orderBy('created_at','desc')
        ->where([['seen', '=', 0],['answered','=',0]])
        ->get(); 
        $answered = DB::table('questions')->orderBy('updated_at','desc')
        ->where('answered', '=', 1)
        ->get();
        $questions = DB::table('questions')->orderBy('created_at','desc')
        ->where([['seen', '=', 1],['answered','=',0]])
        ->get();
        return view('ControlPanel.Views.Questions.index',['answered' => $answered, 'questions'=>$questions,'new' => $new]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        $question->firstName = $request->firstName;
        $question->lastName = $request->lastName;
        $question->body =$request->message;
        $question->email =$request->email;
        $question->category =$request->category;

        $question->save();
        return redirect('/contact');  //With message that the question was sent
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        return view("ControlPanel.Views.Questions.show")->with('question',$question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $question = Question::find($id);
        if($question->answered == 1){
            return redirect()->back();
        }

        if($question->seen == 0){
            $question->seen = 1;
            $question->save();
        }
        return view("ControlPanel.Views.Questions.edit")->with('question',$question);
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
        //Validate

        $question = Question::find($id);
        $question->answer= $request->answer;
        $question->answered =1;
        $question->save();

        return redirect('/questions/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect('/questions');
    }
}
