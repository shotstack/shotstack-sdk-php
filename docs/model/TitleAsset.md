# # TitleAsset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of asset - set to &#x60;title&#x60; for titles. | [default to 'title']
**text** | **string** | The title text string - i.e. \&quot;My Title\&quot;. |
**style** | **string** | Uses a preset to apply font properties and styling to the title. &lt;ul&gt;   &lt;li&gt;&#x60;minimal&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;blockbuster&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;vogue&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;sketchy&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;skinny&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;chunk&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;chunkLight&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;marker&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;future&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;subtitle&#x60;&lt;/li&gt; &lt;/ul&gt; | [optional]
**color** | **string** | Set the text color using hexadecimal color notation. Transparency is supported by setting the first two characters of the hex string (opposite to HTML),  i.e. #80ffffff will be white with  50% transparency. | [optional] [default to '#ffffff']
**size** | **string** | Set the relative size of the text using predefined sizes from xx-small to xx-large. &lt;ul&gt;   &lt;li&gt;&#x60;xx-small&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;x-small&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;small&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;medium&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;large&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;x-large&#x60;&lt;/li&gt;   &lt;li&gt;&#x60;xx-large&#x60;&lt;/li&gt; &lt;/ul&gt; | [optional] [default to 'medium']
**background** | **string** | Apply a background color behind the text. Set the text color using hexadecimal color notation. Transparency is supported by setting the first two characters of the hex string (opposite to HTML),  i.e. #80ffffff will be white with 50% transparency. Omit to use transparent background. | [optional]
**position** | **string** | Place the title in one of nine predefined positions of the viewport. &lt;ul&gt;   &lt;li&gt;&#x60;top&#x60; - top (center)&lt;/li&gt;   &lt;li&gt;&#x60;topRight&#x60; - top right&lt;/li&gt;   &lt;li&gt;&#x60;right&#x60; - right (center)&lt;/li&gt;   &lt;li&gt;&#x60;bottomRight&#x60; - bottom right&lt;/li&gt;   &lt;li&gt;&#x60;bottom&#x60; - bottom (center)&lt;/li&gt;   &lt;li&gt;&#x60;bottomLeft&#x60; - bottom left&lt;/li&gt;   &lt;li&gt;&#x60;left&#x60; - left (center)&lt;/li&gt;   &lt;li&gt;&#x60;topLeft&#x60; - top left&lt;/li&gt;   &lt;li&gt;&#x60;center&#x60; - center&lt;/li&gt; &lt;/ul&gt; | [optional] [default to 'center']
**offset** | [**\Shotstack\Client\Model\Offset**](Offset.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
