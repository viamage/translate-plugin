<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Prefix the default Locale
    |--------------------------------------------------------------------------
    |
    | Should the default locale be prefixed by the plugin?
    |
    | ( For now only used in the alternate-hreflang component )
    |
    */
    'prefixDefaultLocale' => env('TRANSLATE_PREFIX_DEFAULT_LOCALE', true),

    /*
    |--------------------------------------------------------------------------
    | Cache timeout in minutes
    |--------------------------------------------------------------------------
    |
    | By default all translations are cached for 24 hours (1440 min).
    | This setting allows to change that period with given amount of minutes.
    |
    | ( For example 43200 for 30 days or 525600 for one year )
    |
    */
    'cacheTimeout'        => env('TRANSLATE_CACHE_TIMEOUT',1440),

];
