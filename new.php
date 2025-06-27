<?$APPLICATION->SetAdditionalCSS($templateFolder."/css/common.css");?>
<?if ($arResult["isFormNote"] != "Y"):?>
    <?=$arResult["FORM_HEADER"]?>
    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">Связаться</div>
            <div class="contact-form__head-text">
                Наши сотрудники помогут выполнить подбор услуги и расчет цены с учетом ваших требований
            </div>
        </div>

        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
                <label class="input__label">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["medicine_name"]["CAPTION"]?>*</div>
                    <?=$arResult["QUESTIONS"]["medicine_name"]["HTML_CODE"]?>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["medicine_company"]["CAPTION"]?>*</div>
                    <?=$arResult["QUESTIONS"]["medicine_company"]["HTML_CODE"]?>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["medicine_email"]["CAPTION"]?>*</div>
                    <?=$arResult["QUESTIONS"]["medicine_email"]["HTML_CODE"]?>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["medicine_phone"]["CAPTION"]?>*</div>
                    <?=$arResult["QUESTIONS"]["medicine_phone"]["HTML_CODE"]?>
                </label>
            </div>
        </div>

        <div class="contact-form__form-message">
            <div class="input">
                <label class="input__label">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["medicine_message"]["CAPTION"]?></div>
                    <?=$arResult["QUESTIONS"]["medicine_message"]["HTML_CODE"]?>
                </label>
            </div>
        </div>

        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">
                Нажимая «Отправить», Вы подтверждаете согласие на обработку персональных данных.
            </div>
            <button class="form-button contact-form__bottom-button">
                <div class="form-button__title"><?=$arResult["SUBMIT_BUTTON"]?></div>
            </button>
        </div>
    </div>
    <?=$arResult["FORM_FOOTER"]?>
<?else:?>
    <div class="form-success-message">
        <p>Спасибо! Форма отправлена.</p>
    </div>
	 
<?endif;?>