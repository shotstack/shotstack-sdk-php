# # Edit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timeline** | [**\Shotstack\Client\Model\Timeline**](Timeline.md) |  |
**output** | [**\Shotstack\Client\Model\Output**](Output.md) |  |
**merge** | [**\Shotstack\Client\Model\MergeField[]**](MergeField.md) | An array of key/value pairs that provides an easy way to create templates with placeholders. The placeholders can be used to find and replace keys with values. For example you can search for the placeholder &#x60;{{NAME}}&#x60; and replace it with the value &#x60;Jane&#x60;. | [optional]
**callback** | **string** | An optional webhook callback URL used to receive status notifications when a render completes or fails. See [webhooks](https://shotstack.gitbook.io/docs/guides/architecting-an-application/webhooks) for  more details. | [optional]
**disk** | **string** | The disk type to use for storing footage and assets for each render. See [disk types](https://shotstack.gitbook.io/docs/guides/architecting-an-application/disk-types) for more details. &lt;ul&gt;   &lt;li&gt;&#x60;local&#x60; - optimized for high speed rendering with up to 512MB storage&lt;/li&gt;   &lt;li&gt;&#x60;mount&#x60; - optimized for larger file sizes and longer videos with 5GB for source footage and 512MB for output render&lt;/li&gt; &lt;/ul&gt; | [optional] [default to 'local']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
