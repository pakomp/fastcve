# Msn\Apis\FastCVE\SearchApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchCAPECApiSearchCapecGet()**](SearchApi.md#searchCAPECApiSearchCapecGet) | **GET** /api/search/capec | Search Capec |
| [**searchCPEApiSearchCpeGet()**](SearchApi.md#searchCPEApiSearchCpeGet) | **GET** /api/search/cpe | Search Cpe |
| [**searchCVEApiSearchCveGet()**](SearchApi.md#searchCVEApiSearchCveGet) | **GET** /api/search/cve | Search Cve |
| [**searchCWEApiSearchCweGet()**](SearchApi.md#searchCWEApiSearchCweGet) | **GET** /api/search/cwe | Search Cwe |


## `searchCAPECApiSearchCapecGet()`

```php
searchCAPECApiSearchCapecGet($page_idx, $page_size, $keyword, $capec): mixed
```

Search Capec

API to search for CAPECs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Msn\Apis\FastCVE\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_idx = 0; // int | Results page index
$page_size = 10; // int | Results page size
$keyword = array('keyword_example'); // string[] | regexp to search for CPE in the description
$capec = array('capec_example'); // string[] | Related CAPEC IDs to search for

try {
    $result = $apiInstance->searchCAPECApiSearchCapecGet($page_idx, $page_size, $keyword, $capec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCAPECApiSearchCapecGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_idx** | **int**| Results page index | [optional] [default to 0] |
| **page_size** | **int**| Results page size | [optional] [default to 10] |
| **keyword** | [**string[]**](../Model/string.md)| regexp to search for CPE in the description | [optional] |
| **capec** | [**string[]**](../Model/string.md)| Related CAPEC IDs to search for | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCPEApiSearchCpeGet()`

```php
searchCPEApiSearchCpeGet($page_idx, $page_size, $keyword, $cpe23, $last_mod_start_date, $last_mod_end_date, $days_back, $deprecated): \Msn\Apis\FastCVE\Model\CpeOutput
```

Search Cpe

API to search for CPEs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Msn\Apis\FastCVE\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_idx = 0; // int | Results page index
$page_size = 10; // int | Results page size
$keyword = array('keyword_example'); // string[] | regexp to search for CPE in the description
$cpe23 = 'cpe23_example'; // string | CPE2.3 filter specification to search for
$last_mod_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last modified start date
$last_mod_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last modified end date
$days_back = 56; // int | Number of days back when the CPEs were last modified
$deprecated = false; // bool | If set to true, will fetch only the deprecated CPE names

try {
    $result = $apiInstance->searchCPEApiSearchCpeGet($page_idx, $page_size, $keyword, $cpe23, $last_mod_start_date, $last_mod_end_date, $days_back, $deprecated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCPEApiSearchCpeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_idx** | **int**| Results page index | [optional] [default to 0] |
| **page_size** | **int**| Results page size | [optional] [default to 10] |
| **keyword** | [**string[]**](../Model/string.md)| regexp to search for CPE in the description | [optional] |
| **cpe23** | **string**| CPE2.3 filter specification to search for | [optional] |
| **last_mod_start_date** | **\DateTime**| Last modified start date | [optional] |
| **last_mod_end_date** | **\DateTime**| Last modified end date | [optional] |
| **days_back** | **int**| Number of days back when the CPEs were last modified | [optional] |
| **deprecated** | **bool**| If set to true, will fetch only the deprecated CPE names | [optional] [default to false] |

### Return type

[**\Msn\Apis\FastCVE\Model\CpeOutput**](../Model/CpeOutput.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCVEApiSearchCveGet()`

```php
searchCVEApiSearchCveGet($page_idx, $page_size, $keyword, $cve, $cpe23, $cwe, $last_mod_start_date, $last_mod_end_date, $pub_start_date, $pub_end_date, $cvss_severity_v2, $cvss_severity_v3, $cvss_metrics_v2, $cvss_metrics_v3, $vulnerable, $days_back): \Msn\Apis\FastCVE\Model\CveOutput
```

Search Cve

API to search for CVEs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Msn\Apis\FastCVE\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_idx = 0; // int | Results page index
$page_size = 10; // int | Results page size
$keyword = array('keyword_example'); // string[] | regexp to search for CPE in the description
$cve = array('cve_example'); // string[] | Related CVE IDs to search for
$cpe23 = 'cpe23_example'; // string | CPE2.3 filter specification to search for
$cwe = array('cwe_example'); // string[] | Related CWE IDs to search for
$last_mod_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last modified start date
$last_mod_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last modified end date
$pub_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | CVE Published start date
$pub_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | CVE Published start date
$cvss_severity_v2 = new \Msn\Apis\FastCVE\Model\\Msn\Apis\FastCVE\Model\CveSeverityV2(); // \Msn\Apis\FastCVE\Model\CveSeverityV2 | CVSS V2.0 Severity to search for
$cvss_severity_v3 = new \Msn\Apis\FastCVE\Model\\Msn\Apis\FastCVE\Model\CveSeverityV3(); // \Msn\Apis\FastCVE\Model\CveSeverityV3 | CVSS V3.x Severity to search
$cvss_metrics_v2 = 'cvss_metrics_v2_example'; // string | CVSS V2.0 vector string to search for
$cvss_metrics_v3 = 'cvss_metrics_v3_example'; // string | CVSS V3.x vector string to search for
$vulnerable = true; // bool | CVEs found by the CPEs that are marked as vulnerable
$days_back = 56; // int | Number of days back when the CVEs were last modified

try {
    $result = $apiInstance->searchCVEApiSearchCveGet($page_idx, $page_size, $keyword, $cve, $cpe23, $cwe, $last_mod_start_date, $last_mod_end_date, $pub_start_date, $pub_end_date, $cvss_severity_v2, $cvss_severity_v3, $cvss_metrics_v2, $cvss_metrics_v3, $vulnerable, $days_back);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCVEApiSearchCveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_idx** | **int**| Results page index | [optional] [default to 0] |
| **page_size** | **int**| Results page size | [optional] [default to 10] |
| **keyword** | [**string[]**](../Model/string.md)| regexp to search for CPE in the description | [optional] |
| **cve** | [**string[]**](../Model/string.md)| Related CVE IDs to search for | [optional] |
| **cpe23** | **string**| CPE2.3 filter specification to search for | [optional] |
| **cwe** | [**string[]**](../Model/string.md)| Related CWE IDs to search for | [optional] |
| **last_mod_start_date** | **\DateTime**| Last modified start date | [optional] |
| **last_mod_end_date** | **\DateTime**| Last modified end date | [optional] |
| **pub_start_date** | **\DateTime**| CVE Published start date | [optional] |
| **pub_end_date** | **\DateTime**| CVE Published start date | [optional] |
| **cvss_severity_v2** | [**\Msn\Apis\FastCVE\Model\CveSeverityV2**](../Model/.md)| CVSS V2.0 Severity to search for | [optional] |
| **cvss_severity_v3** | [**\Msn\Apis\FastCVE\Model\CveSeverityV3**](../Model/.md)| CVSS V3.x Severity to search | [optional] |
| **cvss_metrics_v2** | **string**| CVSS V2.0 vector string to search for | [optional] |
| **cvss_metrics_v3** | **string**| CVSS V3.x vector string to search for | [optional] |
| **vulnerable** | **bool**| CVEs found by the CPEs that are marked as vulnerable | [optional] [default to true] |
| **days_back** | **int**| Number of days back when the CVEs were last modified | [optional] |

### Return type

[**\Msn\Apis\FastCVE\Model\CveOutput**](../Model/CveOutput.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCWEApiSearchCweGet()`

```php
searchCWEApiSearchCweGet($page_idx, $page_size, $keyword, $cwe): mixed
```

Search Cwe

API to search for CWEs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Msn\Apis\FastCVE\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_idx = 0; // int | Results page index
$page_size = 10; // int | Results page size
$keyword = array('keyword_example'); // string[] | regexp to search for CPE in the description
$cwe = array('cwe_example'); // string[] | Related CWE IDs to search for

try {
    $result = $apiInstance->searchCWEApiSearchCweGet($page_idx, $page_size, $keyword, $cwe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCWEApiSearchCweGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_idx** | **int**| Results page index | [optional] [default to 0] |
| **page_size** | **int**| Results page size | [optional] [default to 10] |
| **keyword** | [**string[]**](../Model/string.md)| regexp to search for CPE in the description | [optional] |
| **cwe** | [**string[]**](../Model/string.md)| Related CWE IDs to search for | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
