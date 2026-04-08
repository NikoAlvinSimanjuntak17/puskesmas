<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $items = News::orderByDesc('published_at')->paginate(15);
        return view('admin.news.index', compact('items'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'title'        => 'required',
            'excerpt'      => 'nullable',
            'body'         => 'required',
            'published_at' => 'nullable|date',
            'author'       => 'nullable',
        ]);

        $data['slug'] = Str::slug($data['title']);

        News::create($data);

        return redirect()->route('admin.news.index');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $r, News $news)
    {
        $data = $r->validate([
            'title'        => 'required',
            'excerpt'      => 'nullable',
            'body'         => 'required',
            'published_at' => 'nullable|date',
            'author'       => 'nullable',
        ]);

        $data['slug'] = Str::slug($data['title']);

        $news->update($data);

        return back()->with('success', 'Updated');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return back();
    }
}
