<?php

namespace App\Http\Requests\Admin\Medium;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateMedium extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize(): bool {
    return Gate::allows('admin.medium.edit', $this->medium);
  }
  
  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules(): array {
    return [
      'model_type'            => ['sometimes', 'string'],
      'model_id'              => ['sometimes', 'integer'],
      'uuid'                  => ['nullable', Rule::unique('media', 'uuid')->ignore($this->medium->getKey(), $this->medium->getKeyName()), 'string'],
      'collection_name'       => ['sometimes', 'string'],
      'name'                  => ['sometimes', 'string'],
      'file_name'             => ['sometimes', 'string'],
      'mime_type'             => ['nullable', 'string'],
      'disk'                  => ['sometimes', 'string'],
      'conversions_disk'      => ['nullable', 'string'],
      'size'                  => ['sometimes', 'integer'],
      'manipulations'         => ['sometimes', 'string'],
      'custom_properties'     => ['sometimes', 'string'],
      'generated_conversions' => ['sometimes', 'string'],
      'responsive_images'     => ['sometimes', 'string'],
      'order_column'          => ['nullable', 'integer'],
      'alt_text'              => ['required', 'string'],
      'caption'               => ['required', 'string'],
      'order'                 => ['nullable', 'integer'],
    ];
  }
  
  /**
   * Modify input data
   *
   * @return array
   */
  public function getSanitized(): array {
    $sanitized = $this->validated();
    
    
    //Add your code for manipulation with request data here
    
    return $sanitized;
  }
}
