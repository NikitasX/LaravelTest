<?php

namespace App\Http\Controllers;

use App\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UrlController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        // This method displays a paginated index
        // of the currently authenticated user's
        // short urls, including both the short and
        // the long version of the url
        // with a delete action
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'url_to_short' => ['required', 'url'],
        ]);

        $array = explode(".", parse_url($request['url_to_short'], PHP_URL_HOST));
        $tld = '.'. end($array);

        $shorturl = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 1, 8);

        $dataAfterShort = [
            'original_url' => $request['url_to_short'],
            'short_url' => $shorturl.$tld
        ];

        if(Auth::check()) {
            auth()->user()->urls()->create($dataAfterShort);
        } else {
            ShortUrl::create($dataAfterShort);
        }
    }

    public function show(ShortUrl $short_url)
    {
        return $short_url->original_url;
    }

    public function destroy()
    {
        // This method destroys the entity
    }
}
