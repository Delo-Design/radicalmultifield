<?php defined('JPATH_PLATFORM') or die; ?>

<?php $id = rand(11111, 99999)?>
<div class="drop-area">
    <form class="my-form">
        <input type="hidden" class="pathElem" name="path">
        <p><?= \Joomla\CMS\Language\Text::_("PLG_RADICAL_MULTI_FIELD_FIELD_IMPORT_MODAL_UPLOAD_DROP") ?></p>
        <label class="button" for="fileElem-<?= $id ?>"><?= \Joomla\CMS\Language\Text::_("PLG_RADICAL_MULTI_FIELD_FIELD_IMPORT_MODAL_UPLOAD_SELECT") ?></label>
        <input type="file" id="fileElem-<?= $id ?>" class="fileElem" multiple accept="*">
    </form>
    <progress class="progress-bar" max="100" value="0"></progress>
</div>

<div class="upload-errors">
    <div></div>
    <a class="uk-alert-close uk-close uk-icon upload-errors-close" uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></a>
</div>
