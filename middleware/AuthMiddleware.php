<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AuthMiddleware {
    
    public function __invoke(Request $request, Response $response, $next) {
        // Check if authentication token is present in request headers
        $token = $request->getHeaderLine('Authorization');

        if (!$token) {
            // No token provided, return unauthorized response
            return $response->withStatus(401)->withJson(['error' => 'Unauthorized']);
        }

        // Validate authentication token (e.g., JWT)

        // If token is invalid, return unauthorized response
        // Otherwise, continue to the next middleware or route handler
        // $decodedToken = validateToken($token);
        // if (!$decodedToken) {
        //     return $response->withStatus(401)->withJson(['error' => 'Invalid token']);
        // }

        // Example: You may also extract user ID from the token and add it to the request object for later use
        // $request = $request->withAttribute('userId', $decodedToken['userId']);

        // Call the next middleware or route handler
        $response = $next($request, $response);

        return $response;
    }
}
