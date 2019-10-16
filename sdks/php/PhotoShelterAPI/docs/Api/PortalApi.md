# PhotoShelter\PortalApi

All URIs are relative to *http://anthony.dev.bitshelter.com/psapi/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portalGet**](PortalApi.md#portalget) | **GET** /portal | Gets all the collections and galleries for the accountat the root level.

# **portalGet**
> portalGet($user_id, $org_id, $page, $per_page, $sort_by, $sort_dir)

Gets all the collections and galleries for the accountat the root level.

Gets all the collections and galleries for the accountat the root level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PhotoShelter\APIv4Client\PortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | User ID, will attempt to derive from hostname if not provided optional.
$org_id = "org_id_example"; // string | Organization ID, will attempt to derive from hostname if not provided optional
$page = 56; // int | Page number
$per_page = 56; // int | Number of rows returned per page.
$sort_by = "sort_by_example"; // string | Sort by gallery property.
$sort_dir = "sort_dir_example"; // string | Sorting result set direction (ascending or descending)

try {
    $apiInstance->portalGet($user_id, $org_id, $page, $per_page, $sort_by, $sort_dir);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User ID, will attempt to derive from hostname if not provided optional. | [optional]
 **org_id** | **string**| Organization ID, will attempt to derive from hostname if not provided optional | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Number of rows returned per page. | [optional]
 **sort_by** | **string**| Sort by gallery property. | [optional]
 **sort_dir** | **string**| Sorting result set direction (ascending or descending) | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

