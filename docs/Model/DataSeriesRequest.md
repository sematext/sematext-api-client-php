# DataSeriesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_interval** | **int** |  | [optional]
**end** | **string** | End time of interval. Can be expressed as timestamp in milliseconds or UTC date in yyyy-MM-dd HH:mm:ss format | [optional]
**filters** | [**map[string,\sematext\stcloud\Model\DataSeriesFilter]**](DataSeriesFilter.md) | Map of allowed filter values and aggregation strategy. List of available filter values can be fetched using metric filters endpoint and default aggregation strategy depends on metric | [optional]
**granularity** | **string** | Data points interval granularity between two data points.Default value is \&quot;AUTO\&quot; - calculated based on selected time span. Not required while getting filters. | [optional]
**interval** | **string** |  | [optional]
**metric** | **string** | Metric name or metric group prefix |
**start** | **string** | Start time of interval. Can be expressed as timestamp in milliseconds or UTC date in yyyy-MM-dd HH:mm:ss format | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)
