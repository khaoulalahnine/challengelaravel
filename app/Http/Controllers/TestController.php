<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TestController extends Controller
{
    public function index ()
    {
        return "je suis le controleur TestController";
    }
    public function show()
{
    return view('accueil');
}

public function khaoula(){
    return "khaoula api route";
} 

public function showArticle($id)
{
    return "Vous consultez l’article $id";
}

}





