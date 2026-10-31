<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();
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

            <div class="form-group">
                <label for="form_text_3">Ваше имя <span class="req">*</span></label>
                <input type="text" name="form_text_3" id="form_text_3" placeholder="Иван Иванов">
            </div>

            <div class="form-group">
                <label for="form_text_4">Компания/Должность <span class="req">*</span></label>
                <input type="text" name="form_text_4" id="form_text_4" placeholder="ООО Ромашка, менеджер">
            </div>

            <div class="form-group">
                <label for="form_email_5">Email <span class="req">*</span></label>
                <input type="email" name="form_email_5" id="form_email_5" placeholder="mail@example.com"
                    autocomplete="email">
            </div>

            <div class="form-group">
                <label for="form_text_6">Номер телефона <span class="req">*</span></label>
                <input type="text" name="form_text_6" id="form_text_6" placeholder="+7 (999) 123-45-67">
            </div>

            <div class="form-group">
                <label for="form_textarea_7">Сообщение</label>
                <textarea name="form_textarea_7" id="form_textarea_7" rows="4"
                    placeholder="Введите ваше сообщение..."></textarea>
            </div>

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

        <?= $arResult["FORM_FOOTER"] ?>
    <?php endif; ?>
</div>