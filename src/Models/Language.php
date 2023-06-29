<?php

namespace Elshaden\NovaTranslator\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'nova_localization_languages';
    protected $fillable = [
        'nova_localization_id',
        'language',
        'translation',

    ];

    protected $hidden = [

    ];



    public function localization()
    {
        return $this->belongsTo(Localization::class, 'nova_localization_id');
    }
    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Language';
}
