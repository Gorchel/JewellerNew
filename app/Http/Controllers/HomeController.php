<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ATehnix\VkClient\Client;
use ATehnix\VkClient\Auth;

class HomeController extends Controller
{
    public function index(Request $request) {
        $this->setHomeLocale($request);

        return view('home');
    }

    public function getHtml(Request $request, $template) {
        $this->setHomeLocale($request);

        switch($template) {
            case 'production':
                return view('production');
            case 'social':
                $owner_id = -37860595;

                $api = new Client;
                $api->setDefaultToken("e8463c62e8463c62e8463c62cee80896aaee846e8463c62b10f156563856954d44b7b2f");
                $response = $api->request('wall.get', ['owner_id' => $owner_id, 'count' => 30])['response'];

                $photoArray = [];

                if (count($response['items']) > 0) {
                    foreach ($response['items'] as $item) {
                        $vk_id =  $item['id'];
                        if (isset($item['attachments']) && count($item['attachments']) > 0) {
                            foreach ($item['attachments'] as $attachment) {
                                if (isset($attachment['photo']['photo_807'])) {
                                    if (isset($attachment['photo']['owner_id'])) {
                                        $vk_from_id = $attachment['photo']['owner_id'];
                                    } else {
                                        $vk_from_id = $owner_id;
                                    }

                                    $vk_pid = $attachment['photo']['id'];

                                    $photoArray[] = [
                                        $attachment['photo']['photo_807'],
                                        'http://vk.com/jeweller_studio?z=photo'.$vk_from_id.'_'.$vk_pid.'%2Fwall'.$owner_id . '_'.$vk_id,
                                    ];
                                }
                            }
                        }
                    }
                }

                return view('social', ['photoArray' => $photoArray]);
            case 'about':
                return view('about');
        }
    }

    protected function setHomeLocale(Request $request) {
        if ($request->has('locale')) {
            \App::setLocale($request->get('locale'));
        } else {
            \App::setLocale('ru');
        }
    }
}
