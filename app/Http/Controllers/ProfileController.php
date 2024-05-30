<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($username)
    {
        // プロフィールデータの取得
        // ここでは仮のデータを使用しますが、実際にはデータベースからユーザーデータを取得します
        $profile = [
            'username' => $username,
            'image' => 'http://i.imgur.com/Qr71crq.jpg',
            'bio' => 'This is a sample bio for ' . $username . '.'
        ];

        return view('profile.show', compact('profile'));
    }
}
