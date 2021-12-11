<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller {

    function __invoke(FeedbackRequest $request) { 
        $validated = $request->validated();  //происходит валидация данных по правилам, созданным нами в FeedbackRequest
        $feedback = new Feedback; //создает экземпляр модели
        //здесь происходит перенос данных из формы в модель
        $feedback->name = $request->name; 
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->save(); //сохраняются данные в бд
        return view("feedback", ["msg"=>"Спасибо за обратную связь!"]); //возвращаем шаблон с доп параметрами
    }

}
