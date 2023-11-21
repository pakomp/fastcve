# Msn\Apis\FastCVE\StatusApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dBStatusStatusGet()**](StatusApi.md#dBStatusStatusGet) | **GET** /status | Db Status |


## `dBStatusStatusGet()`

```php
dBStatusStatusGet(): \Msn\Apis\FastCVE\Model\StatusOutput
```

Db Status

Get the current DB status update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Msn\Apis\FastCVE\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->dBStatusStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->dBStatusStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Msn\Apis\FastCVE\Model\StatusOutput**](../Model/StatusOutput.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
