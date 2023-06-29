<?php

namespace Elshaden\NovaTranslator\Models;

use Illuminate\Database\Eloquent\Model;

class Localization extends Model
{
    protected $table = 'nova_localizations';
    protected $fillable = [
        'group',
        'term',
      ];

    protected $hidden = [

    ];


    public function languages()
    {
        return $this->hasMany(Language::class, 'nova_localization_id');
    }

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Localization';
}
