# RenderResponseData()

The **RenderResponseData** is the response data returned with the [RenderResponse](https://shotstack.io/docs/api/#tocs_renderresponse) request including status and URL.

### Methods:

Method | Description | Required
:--- | :--- | :---: 
getId(): string | The id of the render task in UUID format. | Y
getOwner(): string | The owner id of the render task. | Y
getPlan(): string | The customer subscription plan. | -
getStatus(): string | The status of the render task. <ul>   <li>`queued` - render is queued waiting to be rendered</li><li>`fetching` - assets are being fetched</li><li>`rendering` - the asset is being rendered</li><li>`saving` - the final asset is being saved to storage</li><li>`done` - the asset is ready to be downloaded</li><li>`failed` - there was an error rendering the asset</li></ul> | Y
getError(): string | An error message, only displayed if an error occurred. | -
getDuration(): float | The output video or audio length in seconds. | -
getRender_time(): float | The time taken to render the asset in milliseconds. | -
getUrl(): string | The URL of the final asset. This will only be available if status is done. This is a temporary URL and will be deleted after 24 hours. By default all assets are copied to the Shotstack hosting and CDN destination. | -
getPoster(): string | The URL of the poster image if requested. This will only be available if status is done. | -
getThumbnail(): string | The URL of the thumbnail image if requested. This will only be available if status is done. | -
getData(): [\Shotstack\Client\Model\Edit](Edit.md) | The timeline and output data to be rendered. | Y
getCreated(): string | The time the render task was initially queued. | Y
getUpdated(): string | The time the render status was last updated. | Y
