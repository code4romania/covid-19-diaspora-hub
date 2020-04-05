<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
        $countries = collect(config('places.countries'))
            ->map(fn ($country) => Str::lower($country));

        return [
            'query'   => ['required', 'string', 'min:3'],
            'radius'  => ['required', 'integer', 'min:1', 'max:500'],
            'country' => ['nullable', 'string', Rule::in($countries)],
        ];
    }

    public function prepareForValidation()
    {
        $input = $this->only(['query', 'radius', 'country']);

        if (isset($input['country'])) {
            $input['country'] = Str::lower($input['country']);
        } else {
            $input['country'] = null;
        }

        $input['radius'] = intval($input['radius'] ?? 100);

        $this->replace($input);
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'radius.min' => __('api.validate.radius.min'),
            'radius.max' => __('api.validate.radius.max'),
        ];
    }
}
