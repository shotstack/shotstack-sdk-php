# ProbeResponse()

The **ProbeResponse** is the response returned after a [probe request](https://shotstack.io/docs/api/#inspect-media) is submitted. The probe requests returns data from FFprobe formatted as JSON.

### Methods:

Method | Description | Required
:--- | :--- | :---: 
getSuccess(): bool | `true` if media successfully read, else `false`. | Y
getMessage(): string | `Created`, `Bad Request` or an error message. | Y
getResponse(): object | The response from FFprobe in JSON format | Y
