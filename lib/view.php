<?php

function html_escape(string $string, string $encoding = 'UTF-8') : string
{
    if ($string === '') {
        return '';
    }

    return htmlspecialchars($string, ENT_QUOTES, $encoding);
}


function e(string $string) : string
{
    return html_escape($string);
}
function error_for(
  string $field,
  array $errors,
  string $format = '<div class="my-2 px-2 text-red-600 bg-red-100 rounded">%s</div>'
) : string
{
  if (isset($errors[$field])) {
      return sprintf($format, $errors[$field]);
  }

  return '';
}
