# QueuedResponse()

The response received after a [render request](https://shotstack.io/docs/api/#render-asset) is submitted. The render task is queued for rendering and a unique render id is returned.

### Methods:

Method | Description | Required
:--- | :--- | :---: 
getSuccess(): bool | `true` if successfully queued, else `false`. | Y
getMessage(): string | `Created`, `Bad Request` or an error message. | Y
getResponse(): [\Shotstack\Client\Model\QueuedResponseData](QueuedResponseData.md) | `QueuedResponseData` or an error message. | Y
