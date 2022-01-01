<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    protected $authorRepository;
    public function __construct(AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    public function index()
    {
        $authors = $this->authorRepository->getAll();
        return view('author.list',compact('authors'));
    }

    public function showFormCreate()
    {
        return view('author.create');
    }

    public function create(Request $request)
    {
        $this->authorRepository->create($request);
        return redirect('authors');
    }

    public function show($id)
    {
        $author = $this->authorRepository->getById($id);
        return view('author.detail',compact('author'));
    }

    public function delete($id)
    {
        $this->authorRepository->deleteById($id);
        return redirect('authors');
    }

    public function edit($id)
    {
        $author = $this->authorRepository->getById($id);
        return view('author.update',compact('author'));
    }

    public function update($id,Request $request)
    {
        $this->authorRepository->update($id,$request);
        return redirect("authors");
    }


}
