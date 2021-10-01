<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchEntitiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lat'          => ['required', 'numeric', 'min:-90', 'max:90'],
            'lng'          => ['required', 'numeric', 'min:-180', 'max:180'],
            'radius'       => ['required', 'integer', 'min:1', 'max:500'],
            'country'      => ['required', 'size:2'],
            'categories'   => ['required', 'array'],
            'categories.*' => ['required', 'exists:categories,id'],
        ];
    }

    public function prepareForValidation()
    {
        $input = $this->only(['lat', 'lng', 'radius', 'country', 'categories']);

        $input['radius'] = intval($input['radius'] ?? config('places.defaultSearchRadius'));
        $input['categories'] ??= [];

        $this->replace($input);
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'radius.min'   => __('api.validate.radius.min'),
            'radius.max'   => __('api.validate.radius.max'),
            'categories.*' => __('api.validate.categories'),
            'country.size' => __('api.validate.country'),
        ];
    }
}
