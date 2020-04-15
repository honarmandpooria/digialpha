<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SaveDataFromJsonParserController extends Controller
{

    public function saveUsers()
    {
        /*GET USERS FROM JSON PARSER WEBSITE*/
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('https://jsonplaceholder.typicode.com/users');
        $users = $request->getBody()->getContents();

        /*CONVERT JSON TO PHP ARRAY*/
        $users = json_decode($users, true);


        /*SAVE USERS*/
        foreach ($users['id'] as $user) {
            $userArray[$user] = array(
                "id" => $user->id,
                "name" => $user->name,
                "username" => $user->username,
                "email" => $user->email,
                "phone" => $user->phone,
                "website" => $user->website,
            );

            User::create($userArray[$user]);
        }
        return response(['message' => 'Users saved'], Response::HTTP_CREATED);
    }

    public function savePosts()
    {
        /*GET POSTS FROM JSON PARSER WEBSITE*/
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('https://jsonplaceholder.typicode.com/posts');
        $posts = $request->getBody()->getContents();

        /*CONVERT JSON TO PHP ARRAY*/
        $posts = json_decode($posts, true);


        /*SAVE USERS*/
        foreach ($posts['id'] as $post) {
            $postArray[$post] = array(
                "userId" => $post->userId,
                "id" => $post->id,
                "title" => $post->title,
                "body" => $post->body,
            );

            Post::create($postArray[$post]);
        }
        return response(['message' => 'Posts saved'], Response::HTTP_CREATED);
    }



}
