<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class OAuthLoginController extends Controller
{

    /**
     * GitHubの認証ページヘユーザーをリダイレクト
     *
     * @return \Illuminate\Http\Response
     */
  public function redirectToProvider()
  {
      return Socialite::driver('github')->redirect();
  }

    /**
     * GitHubからユーザー情報を取得
     *
     * @return \Illuminate\Http\Response
     */
   public function handleProviderCallback()
   {
        $user = Socialite::driver('github')->user();

        // $user->token;
   }

  /**
   * OAuth認証 リクエスト
   * @return mixed
   */
  public function getAuth() {
    $social = basename(parse_url($this->getUrl(), PHP_URL_PATH));
    return Socialite::driver($social)->redirect();
  }

  private function getUrl() {
    return (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  }
}
