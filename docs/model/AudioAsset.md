# # AudioAsset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of asset - set to &#x60;audio&#x60; for audio assets. | [default to 'audio']
**src** | **string** | The audio source URL. The URL must be publicly accessible or include credentials. |
**trim** | **float** | The start trim point of the audio clip, in seconds (defaults to 0). Audio will start from the in trim point. The audio will play until the file ends or the Clip length is reached. | [optional]
**volume** | **float** | Set the volume for the audio clip between 0 and 1 where 0 is muted and 1 is full volume (defaults to 1). | [optional] [default to 1]
**effect** | **string** | The effect to apply to the audio asset &lt;ul&gt;   &lt;li&gt;&#x60;fadeIn&#x60; - fade volume in only&lt;/li&gt;   &lt;li&gt;&#x60;fadeOut&#x60; - fade volume out only&lt;/li&gt;   &lt;li&gt;&#x60;fadeInFadeOut&#x60; - fade volume in and out&lt;/li&gt; &lt;/ul&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
