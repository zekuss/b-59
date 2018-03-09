<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
    <? if (!empty($arResult["ERROR_MESSAGE"])) {
        foreach ($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if (strlen($arResult["OK_MESSAGE"]) > 0) {
        ?>
        <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
    }
    ?>

    <form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
        <?= bitrix_sessid_post() ?>
        <div class="form-group">
            <label for="InputName">
                <?= GetMessage("MFT_NAME") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>
                    <span class="mf-req">*</span>
                <? endif ?>
            </label>
            <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Введите имя"
                   value="<?= $arResult["AUTHOR_NAME"] ?>"/>
            <small id="nameHelp" class="form-text text-muted">Введите ваше имя.</small>
        </div>
        <div class="form-group">
            <label for="InputEMAIL">
                <?= GetMessage("MFT_EMAIL") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?>
                    <span class="mf-req">*</span>
                <? endif ?>
            </label>
            <input type="text" class="form-control" id="InputEMAIL" aria-describedby="emailHelp"
                   placeholder="Введите EMAIL" value="<?= $arResult["AUTHOR_EMAIL"] ?>"/>
            <small id="emailHelp" class="form-text text-muted">Введите вашу почту.</small>
        </div>

        <div class="form-group">
            <label for="FormControlTextarea1">
                <?= GetMessage("MFT_MESSAGE") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])): ?>
                    <span class="mf-req">*</span><? endif ?>
            </label>
        </div>
        <textarea name="MESSAGE" rows="5" cols="40"><?= $arResult["MESSAGE"] ?></textarea>

        <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
            <div class="mf-captcha">
                <div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
                <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40"
                     alt="CAPTCHA">
                <div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span></div>
                <input type="text" name="captcha_word" size="30" maxlength="50" value="">
            </div>
        <? endif; ?>
        <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
        <br/>
        <input type="submit" name="submit" class="btn btn-success" value="<?= GetMessage("MFT_SUBMIT") ?>">
    </form>
</div>