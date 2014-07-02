<?php
include __DIR__ . '/../include.php';

try {
    $example = new Raptor\CSRF\Example('Save Content CSRF');
    echo json_encode($example->save());
} catch (Raptor\ClientException $exception) {
    http_response_code(400);
    echo json_encode($exception->getMessage());
} catch (Raptor\ServerException $exception) {
    http_response_code(500);
    echo json_encode($exception->getMessage());
}
