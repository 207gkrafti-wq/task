<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arResult */
?>

<div class="feedback-form-wrap">
    <?php if ($arResult["isFormErrors"] == "Y"): ?>
        <div class="form-errors">
            <?= $arResult["FORM_ERRORS_TEXT"] ?>
        </div>
    <?php endif; ?>

    <?php if ($arResult["isFormNote"] == "Y"): ?>
        <div class="form-success">
            <?= $arResult["FORM_NOTE"] ?>
        </div>
    <?php else: ?>
        <h2 class="form-title">Связаться</h2>
        <p class="form-description">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом ваших
            требований</p>

        <?= $arResult["FORM_HEADER"] ?>

        <div class="feedback-form">

            <?php foreach ($arResult["QUESTIONS"] as $value) { ?>
                <?
                $caption = $value["CAPTION"];
                $id = $value['STRUCTURE'][0]["ID"];
                $required = $value['REQUIRED'];
                $field_type = $value['STRUCTURE'][0]["FIELD_TYPE"];
                ?>


                <div class="form-group">
                    <label for="form_<?= $field_type ?>_<?= $id ?>"><?= $caption ?>
                        <? if ($required == 'Y') { ?>
                            <span class="req">*</span>
                        <? } ?>
                    </label>
                    <? if ($field_type == "textarea") { ?>
                        <textarea name="form_<?= $field_type ?>_<?= $id ?>" id="form_<?= $field_type ?>_<?= $id ?>" rows="4"
                            placeholder="Введите ваше сообщение..."></textarea>
                    <? } else { ?>
                        <input type="<?= $field_type ?>" name="form_<?= $field_type ?>_<?= $id ?>"
                            id="form_<?= $field_type ?>_<?= $id ?>">
                    <? } ?> 
                </div>
            <?php }; ?>

            <div class="form-group form-group-submit">
                <button type="submit" name="web_form_submit" value="Y" class="btn-submit">
                    Отправить
                </button>
                <p class="form-agreement">
                    Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что ознакомлены, полностью согласны
                    и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных данных&raquo;.
                </p>
            </div>

        </div>
        <pre>
            <?
            foreach ($arResult["QUESTIONS"] as $value) {
                var_dump($value['STRUCTURE'][0]['ID']);
            }
            var_dump($arResult["QUESTIONS"]);
            ?>
        </pre>
        <?= $arResult["FORM_FOOTER"] ?>
    <?php endif; ?>
</div>
