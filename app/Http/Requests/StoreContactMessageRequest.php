<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactMessageRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'phone' => ['nullable', 'string', 'max:30'],
            'message' => ['required', 'string', 'max:3000'],
            'consent' => ['accepted'],
        ];
    }

    /**
     * Get the custom validation messages in Hungarian.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Kérjük, adja meg a nevét.',
            'name.max' => 'A név legfeljebb 120 karakter lehet.',
            'email.required' => 'Kérjük, adja meg az email címét.',
            'email.email' => 'Kérjük, érvényes email címet adjon meg.',
            'phone.max' => 'A telefonszám legfeljebb 30 karakter lehet.',
            'message.required' => 'Kérjük, írja le üzenetét.',
            'message.max' => 'Az üzenet legfeljebb 3000 karakter lehet.',
            'consent.accepted' => 'Az üzenet elküldéséhez el kell fogadnia az adatvédelmi tájékoztatót.',
        ];
    }
}
