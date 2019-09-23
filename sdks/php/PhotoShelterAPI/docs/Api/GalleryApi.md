# PhotoShelter\GalleryApi

All URIs are relative to *https://virtserver.swaggerhub.com/PhotoShelter/PhotoShelter/anthony*

Method | HTTP request | Description
------------- | ------------- | -------------
[**galleriesGet**](GalleryApi.md#galleriesget) | **GET** /galleries | Gets all the galleries for the account.

# **galleriesGet**
> \PhotoShelter\APIv4\InlineResponse200 galleriesGet($page, $per_page, $sort_by, $sort_dir, $name, $parent, $portfolio, $recently_updated, $api_key, $x_ps_api_key)

Gets all the galleries for the account.

Gets all the galleries for the account!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PhotoShelter\APIv4Client\GalleryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Page number
$per_page = 56; // int | Number of rows returned per page
$sort_by = "sort_by_example"; // string | Sort by gallery property
$sort_dir = "sort_dir_example"; // string | Sorting result set direction (ascending or descending)
$name = "name_example"; // string | Full or partial gallery name
$parent = "parent_example"; // string | Limit galleries to children of the provided collection ID. Pass blank to find galleries with no parent.
$portfolio = true; // bool | Filter the result set to return galleries listed on public site
$recently_updated = true; // bool | Filter the result set to return galleries recently updated
$api_key = new \PhotoShelter\APIv4\ApiKey(); // \PhotoShelter\APIv4\ApiKey | Your PhotoShelter API Key
$x_ps_api_key = new \PhotoShelter\APIv4\ApiKey(); // \PhotoShelter\APIv4\ApiKey | Your PhotoShelter API Key

try {
    $result = $apiInstance->galleriesGet($page, $per_page, $sort_by, $sort_dir, $name, $parent, $portfolio, $recently_updated, $api_key, $x_ps_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GalleryApi->galleriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Number of rows returned per page | [optional]
 **sort_by** | **string**| Sort by gallery property | [optional]
 **sort_dir** | **string**| Sorting result set direction (ascending or descending) | [optional]
 **name** | **string**| Full or partial gallery name | [optional]
 **parent** | **string**| Limit galleries to children of the provided collection ID. Pass blank to find galleries with no parent. | [optional]
 **portfolio** | **bool**| Filter the result set to return galleries listed on public site | [optional]
 **recently_updated** | **bool**| Filter the result set to return galleries recently updated | [optional]
 **api_key** | [**\PhotoShelter\APIv4\ApiKey**](../Model/.md)| Your PhotoShelter API Key | [optional]
 **x_ps_api_key** | [**\PhotoShelter\APIv4\ApiKey**](../Model/.md)| Your PhotoShelter API Key | [optional]

### Return type

[**\PhotoShelter\APIv4\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

