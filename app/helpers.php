<?php

if (!function_exists('is_locale_am')) {
    function is_locale_am(): bool {
        return app()->getLocale() === 'am';
    }
}
