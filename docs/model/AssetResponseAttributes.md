# AssetResponseAttributes()

The **AssetResponseAttributes** contains the list of asset attributes and their values.

### Methods:

Method | Description | Required
:--- | :--- | :---:
getId(): string | The unique id of the hosted asset in UUID format. | -
getOwner(): string | The owner id of the render task. | -
getRegion(): string | The region the asset is hosted, currently only `au` (Australia). | -
getRenderId(): string | The original render id that created the asset in UUID format. Multiple assets can share the same render id. | -
getFilename(): string | The asset file name. | -
getUrl(): string | The asset file name. | -
getStatus(): string | The status of the asset. <ul><li>`importing` - the asset is being copied to the hosting service</li><li>`ready` - the asset is ready to be served to users</li><li>`failed` - the asset failed to copy or delete</li><li>`deleted` - the asset has been deleted</li></ul> | -
getCreated(): string | The time the asset was created. | -
getUpdated(): string | The time the asset status was last updated. | -
