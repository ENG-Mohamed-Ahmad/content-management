<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;

class ImageService
{
    public function storeImages(Request $request, Article $article)
    {
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads', 'public');
                $article->images()->create(['path' => $path]);
            }
        }
    }

    public function updateImages(Request $request, Article $article){
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads', 'public');
                $article->images()->create(['path' => $path]);
            }
        }
    }
}
