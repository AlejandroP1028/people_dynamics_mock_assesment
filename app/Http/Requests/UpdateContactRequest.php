<?php
namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class UpdateContactRequest extends FormRequest
{
public function authorize(): bool { return true; }
public function rules(): array
{
return [
'name' => ['required','string','max:255'],
'email' => ['required','email','max:255'],
'phone' => ['nullable','string','max:50'],
'notes' => ['nullable','string','max:1000'],
];
}
protected function prepareForValidation(): void
{
$this->merge([
'name' => strip_tags((string) $this->input('name')),
'email' => strip_tags((string) $this->input('email')),
'phone' => strip_tags((string) $this->input('phone')),
'notes' => strip_tags((string) $this->input('notes')),
]);
}
}