<div
    id="<?= $this->getId() ?>"
    class="field-fileupload style-image-single <?= $singleFile ? 'is-populated' : '' ?> <?= $this->previewMode ? 'is-preview' : '' ?>"
    data-control="fileupload"
    data-upload-handler="<?= $this->getEventHandler('onUpload') ?>"
    data-template="#<?= $this->getId('template') ?>"
    data-error-template="#<?= $this->getId('errorTemplate') ?>"
    data-thumbnail-width="<?= $imageWidth ?: '0' ?>"
    data-thumbnail-height="<?= $imageHeight ?: '0' ?>"
    data-max-filesize="<?= $maxFilesize ?>"
    <?php if ($useCaption): ?>
        data-config-handler="<?= $this->getEventHandler('onLoadAttachmentConfig') ?>"
    <?php endif ?>
    <?php if ($acceptedFileTypes): ?>
        data-file-types="<?= $acceptedFileTypes ?>"
    <?php endif ?>
    <?= $this->formField->getAttributes() ?>
>

    <!-- Add New Image -->
    <a
        href="javascript:;"
        style="<?= $cssBlockDimensions ?>"
        class="upload-button">
        <span class="upload-button-icon wn-<?= $emptyIcon ?> <?= $imageWidth > 100 ? 'large-icon' : '' ?>"></span>
    </a>

    <!-- Existing file -->
    <div class="upload-files-container">
        <?php if ($singleFile): ?>
            <div class="upload-object is-success" data-id="<?= $singleFile->id ?>" data-path="<?= $singleFile->pathUrl ?>">
                <div class="icon-container image">
                    <img src="<?= $singleFile->thumbUrl ?>" alt="" />
                </div>
                <div class="info">
                    <h4 class="filename">
                        <span data-dz-name><?= e($singleFile->title ?: $singleFile->file_name) ?></span>
                        <a
                            href="javascript:;"
                            class="upload-remove-button"
                            data-request="<?= $this->getEventHandler('onRemoveAttachment') ?>"
                            data-request-confirm="<?= e(trans('backend::lang.fileupload.remove_confirm')) ?>"
                            data-request-data="file_id: <?= $singleFile->id ?>"
                            ><i class="icon-times"></i></a>
                    </h4>
                    <p class="size"><?= e($singleFile->sizeToString()) ?></p>
                </div>
                <div class="meta"></div>
            </div>
        <?php endif ?>
    </div>

</div>

<!-- Template for new file -->
<script type="text/template" id="<?= $this->getId('template') ?>">
    <div class="upload-object dz-preview dz-file-preview">
        <div class="icon-container image">
            <img data-dz-thumbnail style="<?= $cssDimensions ?>" alt="" />
        </div>
        <div class="info">
            <h4 class="filename">
                <span data-dz-name></span>
                <a
                    href="javascript:;"
                    class="upload-remove-button"
                    data-request="<?= $this->getEventHandler('onRemoveAttachment') ?>"
                    data-request-confirm="<?= e(trans('backend::lang.fileupload.remove_confirm')) ?>"
                    ><i class="icon-times"></i></a>
            </h4>
            <p class="size" data-dz-size></p>
        </div>
        <div class="meta">
            <div class="progress-bar"><span class="upload-progress" data-dz-uploadprogress></span></div>
            <div class="error-message"><span data-dz-errormessage></span></div>
        </div>
    </div>
</script>
