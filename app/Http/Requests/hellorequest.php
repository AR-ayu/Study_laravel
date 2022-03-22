<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class hellorequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'hello'){
            return true;
        }else {
        return false;}
    }
    
    public function rules()
    {
        return [
            'name'=> 'required',
            'mail'=>'email',
            'age'=>'numeric|hello',
        ];
    }

    public function messages(){
        return[
            'name.required'=>'名前を入力してください。',
            'mail.email'=>'冊数を入力してください。',
            'age.numeric'=>'please write valid age',
            'age.hello'=>'sorry,invalid',
        ];
    }
}

