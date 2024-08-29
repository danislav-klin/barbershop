<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'date' => 'required',
            'radio-1' => 'required',
            'master' => 'required',
            'service' => 'required',
            'name' => 'required|min:3',
            'phone' => 'required',
            'email' => 'required',
            'comment' => 'min:5|nullable',
            'total_price' => 'string'
        ];
    }
    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'date.required' => 'дата обязательна!',
            'radio-1.required' => 'выберите время!',
            'master.required' => 'выберите мастера!',
            'service.required' => 'выберите услугу!',
            'name.required' => 'имя обязательна!',
            'name.min' => 'минимум 3 символа!',
            'phone.required' => 'напишите номер телефона!',
            'email.required' => 'почта обязательна!',
            'comment.min' => 'минимум 5 символа!',
        ];
    }

}
