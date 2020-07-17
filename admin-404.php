<?php


$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$errorMiddleware->setErrorHandler(\Slim\Exception\HttpNotFoundException::class, function (
    \Psr\Http\Message\ServerRequestInterface $request,
    \Throwable $exception,
    bool $displayErrorDetails,
    bool $logErrors,
    bool $logErrorDetails
) {
    $response = new \Slim\Psr7\Response();
    
    echo"Pagina nao encontrada";

    return $response->withStatus(404);
});

?>