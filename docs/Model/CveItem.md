# # CveItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**source_identifier** | **string** |  | [optional]
**vuln_status** | **string** |  | [optional]
**published** | **\DateTime** |  |
**last_modified** | **\DateTime** |  |
**evaluator_comment** | **string** |  | [optional]
**evaluator_solution** | **string** |  | [optional]
**evaluator_impact** | **string** |  | [optional]
**cisa_exploit_add** | **\DateTime** |  | [optional]
**cisa_action_due** | **\DateTime** |  | [optional]
**cisa_required_action** | **string** |  | [optional]
**cisa_vulnerability_name** | **string** |  | [optional]
**descriptions** | [**\Msn\Apis\FastCVE\Model\LangString[]**](LangString.md) |  |
**references** | [**\Msn\Apis\FastCVE\Model\Reference[]**](Reference.md) |  |
**metrics** | [**\Msn\Apis\FastCVE\Model\Metrics**](Metrics.md) |  | [optional]
**weaknesses** | [**\Msn\Apis\FastCVE\Model\Weakness[]**](Weakness.md) |  | [optional]
**configurations** | [**\Msn\Apis\FastCVE\Model\Config[]**](Config.md) |  | [optional]
**vendor_comments** | [**\Msn\Apis\FastCVE\Model\VendorComment[]**](VendorComment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
