<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use App\Http\Resources\UsersWithAlbumsResource;
use App\Http\Resources\UsersWithPostsResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /*
     * DIGI ALPHA TEST
     * These 3 functions will return api format of requested features with 202 responses using laravel resources.
     *
     *
     *
     * */

    public function index()
    {
        $users = User::latest()->get();
        return UsersResource::collection($users);
    }


    public function usersWithPosts()
    {
        $users = User::latest()->get();
        return UsersWithPostsResource::collection($users);
    }

    public function usersWithAlbums()
    {
        $users = User::latest()->get();
        return UsersWithAlbumsResource::collection($users);
    }


}
