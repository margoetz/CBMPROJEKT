<?php declare(strict_types=1);

/**
 * Renders the specified template with the provided data.
 *
 * @param string $template The name of the template file to render.
 * @param array  $data     An associative array of data to be used within the template. Optional.
 *
 * @return void
 */
function render(string $template, array $data = []): void
{
    extract($data);

    require APP_TEMPLATES . '/' . $template;
}
