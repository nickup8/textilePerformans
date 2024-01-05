<?php

namespace Nikolaysirotkin\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Winter\Storm\Support\Facades\Input;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'contact form',
            'description' => 'contact form'
        ];
    }

    public function onSend()
    {
        $vars = ['name' => Input::get('name'), 'phone' => Input::get('name')];

        Mail::send('nikolaysirotkin.contact::mail.message', $vars, function ($message) {

            $message->to('admin@domain.tld', 'Admin Person');
            $message->subject('Новое сообщение с сайта Текстильный перформанс');
        });
    }
}
