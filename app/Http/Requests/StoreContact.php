<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }
  
  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages() {
    return [
      'name.required'     => 'Come ti possiamo chiamare?',
      'email.required'    => 'Come ti possiamo contattare?',
      'email.email'       => 'Sembra che l\'email inserita non sia valida',
      'service_id.exists' => 'Il Servizio inserito non è valido',
      'message.required'  => 'Cosa ci vuoi dire/chiedere?',
    ];
  }
  
  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules() {
    return [
      "name"       => ["required", "string"],
      "email"      => ["required", "string", "email"],
      "service_id" => ["nullable", "exists:services,id"],
      "message"    => ["required", "string"],
      "phone"      => ["nullable", "string"],
    ];
  }
}
