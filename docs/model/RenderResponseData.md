# # RenderResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the render task in UUID format. |
**owner** | **string** | The owner id of the render task. |
**plan** | **string** | The customer subscription plan. | [optional]
**status** | **string** | The status of the render task. &lt;ul&gt;   &lt;li&gt;&#x60;queued&#x60; - render is queued waiting to be rendered&lt;/li&gt;   &lt;li&gt;&#x60;fetching&#x60; - assets are being fetched&lt;/li&gt;   &lt;li&gt;&#x60;rendering&#x60; - the asset is being rendered&lt;/li&gt;   &lt;li&gt;&#x60;saving&#x60; - the final asset is being saved to storage&lt;/li&gt;   &lt;li&gt;&#x60;done&#x60; - the asset is ready to be downloaded&lt;/li&gt;   &lt;li&gt;&#x60;failed&#x60; - there was an error rendering the asset&lt;/li&gt; &lt;/ul&gt; |
**error** | **string** | An error message, only displayed if an error occurred. | [optional]
**duration** | **float** | The output video or audio length in seconds. | [optional]
**render_time** | **float** | The time taken to render the asset in milliseconds. | [optional]
**url** | **string** | The URL of the final asset. This will only be available if status is done. This is a temporary URL and will be deleted after 24 hours. By default all assets are copied to the Shotstack hosting and CDN destination. | [optional]
**poster** | **string** | The URL of the poster image if requested. This will only be available if status is done. | [optional]
**thumbnail** | **string** | The URL of the thumbnail image if requested. This will only be available if status is done. | [optional]
**data** | [**\Shotstack\Client\Model\Edit**](Edit.md) |  |
**created** | **string** | The time the render task was initially queued. |
**updated** | **string** | The time the render status was last updated. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
