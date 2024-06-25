<?php
if (!function_exists('generateInitials')) {
    function generateInitials($name) {
        $initials = '';
        $words = explode(' ', $name);
        foreach ($words as $word) {
            $initials .= strtoupper(substr($word, 0, 1)) . '+';
        }
        // Eliminar el último signo de +
        return rtrim($initials, '+');
    }
}

