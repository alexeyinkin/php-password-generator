<?php declare(strict_types=1);

function generatePassword(int $length): string
{
    $result = '';

    while (mb_strlen($result) < $length)
    {
        $bytes = random_bytes(8);
        $base64 = base64_encode($bytes);

        $stripped = preg_replace('/[^2-9a-km-np-zA-HJ-NP-Z]/', '');
        $result .= $stripped;
    }

    return mb_substr($result, 0, $length);
}

print '<h1>' . generatePassword(8) . '</h1>';
