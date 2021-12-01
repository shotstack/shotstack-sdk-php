# RenderResponse()

The **RenderResponse** is the response received after a [render status request](https://shotstack.io/docs/api/#get-render-status) is submitted. The response includes details about status of a render and the output URL.

### Methods:

Method | Description | Required
:--- | :--- | :---: 
getSuccess(): bool | `true` if status available, else `false`. | Y
getMessage(): string | `OK` or an error message. | Y
getResponse(): [\Shotstack\Client\Model\RenderResponseData](RenderResponseData.md) | `RenderResponse` or an error message. | Y
