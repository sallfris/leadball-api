<?php
/**
 * ApiException
 * PHP version 5
 *
 * @category Class
 * @package  sallfris\Leadball\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Leadball messaging service - OpenAPI 3.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.25.5
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace sallfris\Leadball\Client;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  sallfris\Leadball\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeaderSelector
{
    
    /**
     * @param string[] $accept
     * @param string[] $contentTypes
     * @return array
     */
    public function selectHeaders($accept, $contentTypes)
    {
        $headers = [];
        
        $acceptHeader = $this->selectAcceptHeader($accept);
        if ($acceptHeader !== null) {
            $headers['Accept'] = $acceptHeader;
        }
        
        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);
        return $headers;
    }
    
    /**
     * @param string[] $accept
     * @return array
     */
    public function selectHeadersForMultipart($accept)
    {
        $headers = $this->selectHeaders($accept, []);
        
        unset($headers['Content-Type']);
        return $headers;
    }
    
    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    private function selectAcceptHeader(array $accept): ?string
    {
        if (empty($accept) || (count($accept) === 1 && $accept[0] === '')) {
            return null;
        }
    
        if (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        }
    
        return implode(',', $accept);
    }
    
    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $contentType Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader($contentType)
    {
        if (empty($contentType) || (count($contentType) === 1 && $contentType[0] === '')) {
            return 'application/json';
        }
    
        if (preg_grep("/application\/json/i", $contentType)) {
            return 'application/json';
        }
    
        return implode(',', $contentType);
    }
}

