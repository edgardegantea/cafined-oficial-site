<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Post;
use App\Models\Publication;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }


    public function about()
    {
        return view('frontend.info.about');
    }


    public function contact()
    {
        return view('frontend.info.contact');
    }
	
	
	public function foros()
    {
		$activities = Post::orderBy('id', 'desc')->where('category_id', 33)->where('is_published', 1)->paginate(6);
        return view('frontend.info.forum', compact('activities'));
	}
	

    public function faq()
    {
        return view('frontend.info.faq');
    }


    public function terms()
    {
        return view('frontend.info.terms');
    }

    public function privacy()
    {
        return view('frontend.info.privacy');
    }

    public function equipo()
    {
        $equipo = User::where('type', 'colaborador')->orWhere('type', 'tesista')->orWhere('type', 'lider')->orderBy('type', 'asc')->get();
        return view('frontend.info.equipo', compact('equipo'));
    }


    public function proyectos()
    {
        return view('frontend.info.proyectos');
    }


    public function saberes360privacidad()
    {
        return view('frontend.info.saberes360privacidad');
    }


    public function orientatecprivacidad()
    {
        return view('frontend.info.orientatecprivacidad');
    }



    public function produccioncientifica()
    {
        $publications = Publication::orderBy('year', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('frontend.info.produccioncientifica', compact('publications'));
    }





    public function proyectoorientatec()
    {
        return view('frontend.info.proyectoorientatec');
    }


    public function orientatec()
    {
        return view('frontend.info.proyectos.orientatec');
    }


    public function saberes360()
    {
        return view('frontend.info.proyectos.saberes360');
    }


}
