<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:5|max:255",
            "description" => "required|min:30|max:255",
            "thumb" => "required|min:5|max:500",
            "price" => "required|min:1|numeric|max:255",
            "series" => "required|min:5|max:255",
            "sale_date" => "required|date",
            "type" => "required|min:5|max:255",
            "artists" => "required|min:5|max:255",
            "writers" => "required|min:5|max:255",
        ];
    }

    public function messages()
    {
        return[
            "title.required" => "Il titolo è un campo obbligatorio",
            "title.min" => "Il titolo deve avere almeno :min caratteri",
            "title.max" => "Il titolo non deve avere più di :max caratteri",
            "description.required" => "La descrizione è un campo obbligatorio",
            "description.min" => "La descrizione deve avere almeno :min caratteri",
            "description.max" => "La descrizione non deve avere più di :max caratteri",
            "thumb.required" => "L'immagine è un campo obbligatorio",
            "thumb.min" => "L'immagine deve avere almeno :min caratteri",
            "thumb.max" => "L'immagine non deve avere più di :max caratteri",
            "price.required" => "Il prezzo è un campo obbligatorio",
            "price.min" => "Il prezzo deve avere almeno :min caratteri",
            "price.max" => "Il prezzo non deve avere più di :max caratteri",
            "price.numeric" => "Il prezzo è un campo numerico",
            "series.required" => "La serie è un campo obbligatorio",
            "series.min" => "La serie deve avere almeno :min caratteri",
            "series.max" => "La serie non deve avere più di :max caratteri",
            "sale_date.required" => "La data di vendita è un campo obbligatorio",
            "sale_date.date" => "La data di vendita ha un formato sbagliato: seguire il YYYY-MM--DD",
            "type.required" => "Il Tipo è un campo obbligatorio",
            "type.min" => "Il Tipo deve avere almeno :min caratteri",
            "type.max" => "Il Tipo non deve avere più di :max caratteri",
            "artists.required" => "Gli Artisti è un campo obbligatorio",
            "artists.min" => "Gli Artisti deve avere almeno :min caratteri",
            "artists.max" => "Gli Artisti non deve avere più di :max caratteri",
            "writers.required" => "Gli Scrittori è un campo obbligatorio",
            "writers.min" => "Gli Scrittori deve avere almeno :min caratteri",
            "writers.max" => "Gli Scrittori non deve avere più di :max caratteri",
        ];
    }
}
