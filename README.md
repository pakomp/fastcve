# fastcve

fast, rich and API-based search for CVE and more (CPE, CWE, CAPEC)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/msn/fastcve-openapi.git"
    }
  ],
  "require": {
    "msn/fastcve-openapi": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/fastcve/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SearchApi* | [**searchCAPECApiSearchCapecGet**](docs/Api/SearchApi.md#searchcapecapisearchcapecget) | **GET** /api/search/capec | Search Capec
*SearchApi* | [**searchCPEApiSearchCpeGet**](docs/Api/SearchApi.md#searchcpeapisearchcpeget) | **GET** /api/search/cpe | Search Cpe
*SearchApi* | [**searchCVEApiSearchCveGet**](docs/Api/SearchApi.md#searchcveapisearchcveget) | **GET** /api/search/cve | Search Cve
*SearchApi* | [**searchCWEApiSearchCweGet**](docs/Api/SearchApi.md#searchcweapisearchcweget) | **GET** /api/search/cwe | Search Cwe
*StatusApi* | [**dBStatusStatusGet**](docs/Api/StatusApi.md#dbstatusstatusget) | **GET** /status | Db Status

## Models

- [AccessComplexityType](docs/Model/AccessComplexityType.md)
- [AccessVectorType](docs/Model/AccessVectorType.md)
- [AuthenticationType](docs/Model/AuthenticationType.md)
- [CollateralDamagePotentialType](docs/Model/CollateralDamagePotentialType.md)
- [CommonModelsCpeType](docs/Model/CommonModelsCpeType.md)
- [CommonModelsCveType](docs/Model/CommonModelsCveType.md)
- [CommonModelsCvssV2CiaRequirementType](docs/Model/CommonModelsCvssV2CiaRequirementType.md)
- [CommonModelsCvssV2CiaType](docs/Model/CommonModelsCvssV2CiaType.md)
- [CommonModelsCvssV2CveCvssDataModel](docs/Model/CommonModelsCvssV2CveCvssDataModel.md)
- [CommonModelsCvssV2RemediationLevelType](docs/Model/CommonModelsCvssV2RemediationLevelType.md)
- [CommonModelsCvssV2Version](docs/Model/CommonModelsCvssV2Version.md)
- [CommonModelsCvssV30AttackComplexityType](docs/Model/CommonModelsCvssV30AttackComplexityType.md)
- [CommonModelsCvssV30AttackVectorType](docs/Model/CommonModelsCvssV30AttackVectorType.md)
- [CommonModelsCvssV30CiaRequirementType](docs/Model/CommonModelsCvssV30CiaRequirementType.md)
- [CommonModelsCvssV30CiaType](docs/Model/CommonModelsCvssV30CiaType.md)
- [CommonModelsCvssV30ConfidenceType](docs/Model/CommonModelsCvssV30ConfidenceType.md)
- [CommonModelsCvssV30CveCvssDataModel](docs/Model/CommonModelsCvssV30CveCvssDataModel.md)
- [CommonModelsCvssV30ExploitCodeMaturityType](docs/Model/CommonModelsCvssV30ExploitCodeMaturityType.md)
- [CommonModelsCvssV30ModifiedAttackComplexityType](docs/Model/CommonModelsCvssV30ModifiedAttackComplexityType.md)
- [CommonModelsCvssV30ModifiedAttackVectorType](docs/Model/CommonModelsCvssV30ModifiedAttackVectorType.md)
- [CommonModelsCvssV30ModifiedCiaType](docs/Model/CommonModelsCvssV30ModifiedCiaType.md)
- [CommonModelsCvssV30ModifiedPrivilegesRequiredType](docs/Model/CommonModelsCvssV30ModifiedPrivilegesRequiredType.md)
- [CommonModelsCvssV30ModifiedScopeType](docs/Model/CommonModelsCvssV30ModifiedScopeType.md)
- [CommonModelsCvssV30ModifiedUserInteractionType](docs/Model/CommonModelsCvssV30ModifiedUserInteractionType.md)
- [CommonModelsCvssV30PrivilegesRequiredType](docs/Model/CommonModelsCvssV30PrivilegesRequiredType.md)
- [CommonModelsCvssV30RemediationLevelType](docs/Model/CommonModelsCvssV30RemediationLevelType.md)
- [CommonModelsCvssV30ScopeType](docs/Model/CommonModelsCvssV30ScopeType.md)
- [CommonModelsCvssV30SeverityType](docs/Model/CommonModelsCvssV30SeverityType.md)
- [CommonModelsCvssV30UserInteractionType](docs/Model/CommonModelsCvssV30UserInteractionType.md)
- [CommonModelsCvssV30Version](docs/Model/CommonModelsCvssV30Version.md)
- [CommonModelsCvssV31AttackComplexityType](docs/Model/CommonModelsCvssV31AttackComplexityType.md)
- [CommonModelsCvssV31AttackVectorType](docs/Model/CommonModelsCvssV31AttackVectorType.md)
- [CommonModelsCvssV31CiaRequirementType](docs/Model/CommonModelsCvssV31CiaRequirementType.md)
- [CommonModelsCvssV31CiaType](docs/Model/CommonModelsCvssV31CiaType.md)
- [CommonModelsCvssV31ConfidenceType](docs/Model/CommonModelsCvssV31ConfidenceType.md)
- [CommonModelsCvssV31CveCvssDataModel](docs/Model/CommonModelsCvssV31CveCvssDataModel.md)
- [CommonModelsCvssV31ExploitCodeMaturityType](docs/Model/CommonModelsCvssV31ExploitCodeMaturityType.md)
- [CommonModelsCvssV31ModifiedAttackComplexityType](docs/Model/CommonModelsCvssV31ModifiedAttackComplexityType.md)
- [CommonModelsCvssV31ModifiedAttackVectorType](docs/Model/CommonModelsCvssV31ModifiedAttackVectorType.md)
- [CommonModelsCvssV31ModifiedCiaType](docs/Model/CommonModelsCvssV31ModifiedCiaType.md)
- [CommonModelsCvssV31ModifiedPrivilegesRequiredType](docs/Model/CommonModelsCvssV31ModifiedPrivilegesRequiredType.md)
- [CommonModelsCvssV31ModifiedScopeType](docs/Model/CommonModelsCvssV31ModifiedScopeType.md)
- [CommonModelsCvssV31ModifiedUserInteractionType](docs/Model/CommonModelsCvssV31ModifiedUserInteractionType.md)
- [CommonModelsCvssV31PrivilegesRequiredType](docs/Model/CommonModelsCvssV31PrivilegesRequiredType.md)
- [CommonModelsCvssV31RemediationLevelType](docs/Model/CommonModelsCvssV31RemediationLevelType.md)
- [CommonModelsCvssV31ScopeType](docs/Model/CommonModelsCvssV31ScopeType.md)
- [CommonModelsCvssV31SeverityType](docs/Model/CommonModelsCvssV31SeverityType.md)
- [CommonModelsCvssV31UserInteractionType](docs/Model/CommonModelsCvssV31UserInteractionType.md)
- [CommonModelsCvssV31Version](docs/Model/CommonModelsCvssV31Version.md)
- [Config](docs/Model/Config.md)
- [CpeItem](docs/Model/CpeItem.md)
- [CpeMatch](docs/Model/CpeMatch.md)
- [CpeOutput](docs/Model/CpeOutput.md)
- [CveItem](docs/Model/CveItem.md)
- [CveOutput](docs/Model/CveOutput.md)
- [CveSeverityV2](docs/Model/CveSeverityV2.md)
- [CveSeverityV3](docs/Model/CveSeverityV3.md)
- [CvssV2](docs/Model/CvssV2.md)
- [CvssV30](docs/Model/CvssV30.md)
- [CvssV31](docs/Model/CvssV31.md)
- [DefReference](docs/Model/DefReference.md)
- [DefTitle](docs/Model/DefTitle.md)
- [Deprecate](docs/Model/Deprecate.md)
- [DeprecatedByItem](docs/Model/DeprecatedByItem.md)
- [ExploitabilityType](docs/Model/ExploitabilityType.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [LangString](docs/Model/LangString.md)
- [LocationInner](docs/Model/LocationInner.md)
- [Metrics](docs/Model/Metrics.md)
- [Node](docs/Model/Node.md)
- [Operator](docs/Model/Operator.md)
- [Reference](docs/Model/Reference.md)
- [ReportConfidenceType](docs/Model/ReportConfidenceType.md)
- [StatusItemOutput](docs/Model/StatusItemOutput.md)
- [StatusOutput](docs/Model/StatusOutput.md)
- [TargetDistributionType](docs/Model/TargetDistributionType.md)
- [ValidationError](docs/Model/ValidationError.md)
- [VendorComment](docs/Model/VendorComment.md)
- [Weakness](docs/Model/Weakness.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
