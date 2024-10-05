<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>
<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом
            ваших требований
        </div>
    </div>
    <form class="contact-form__form" name="<?=$arResult["WEB_FORM_NAME"]?>" action="<?=POST_FORM_ACTION_URI?>" method="POST">
        <?=$arResult["FORM_HEADER"]?>
        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
              <label class="input__label" 
                for="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_NAME']['STRUCTURE'][0]['ID'];?>">
                <div class="input__label-text"><?=$arResult["QUESTIONS"]['MEDICINE_NAME']['CAPTION']?>
                <?php echo $arResult["QUESTIONS"]['MEDICINE_NAME']['REQUIRED'] === 'Y' ? '*' : '';?></div>
                <input class="input__input" type="text" 
                id="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_NAME']['STRUCTURE'][0]['ID'];?>" 
                name="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_NAME']['STRUCTURE'][0]['ID'];?>" 
                value="<?php echo $arResult["QUESTIONS"]['MEDICINE_NAME']['VALUE'];?>"
                <?php echo $arResult["QUESTIONS"]['MEDICINE_NAME']['REQUIRED'] === 'Y' ? ' required' : '';?> >
                <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
              </label>
            </div>
            <div class="input contact-form__input">
              <label class="input__label"
              for="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_COMPANY']['STRUCTURE'][0]['ID'];?>">
                <div class="input__label-text"><?=$arResult["QUESTIONS"]['MEDICINE_COMPANY']['CAPTION']?>
                <?php echo $arResult["QUESTIONS"]['MEDICINE_COMPANY']['REQUIRED'] === 'Y' ? '*' : '';?></div>
                <input class="input__input" type="text" 
                id="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_COMPANY']['STRUCTURE'][0]['ID'];?>" 
                name="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_COMPANY']['STRUCTURE'][0]['ID'];?>" 
                value="<?php echo $arResult["QUESTIONS"]['MEDICINE_COMPANY']['VALUE'];?>"
                <?php echo $arResult["QUESTIONS"]['MEDICINE_COMPANY']['REQUIRED'] === 'Y' ? ' required' : '';?>>
                <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
              </label>
            </div>
            <div class="input contact-form__input">
              <label class="input__label" 
                for="form_email_<?php echo $arResult["QUESTIONS"]['MEDICINE_EMAIL']['STRUCTURE'][0]['ID'];?>">
                <div class="input__label-text"><?=$arResult["QUESTIONS"]['MEDICINE_EMAIL']['CAPTION']?>
                <?php echo $arResult["QUESTIONS"]['MEDICINE_EMAIL']['REQUIRED'] === 'Y' ? '*' : '';?></div>
                <input class="input__input" type="email" 
                id="form_email_<?php echo $arResult["QUESTIONS"]['MEDICINE_EMAIL']['STRUCTURE'][0]['ID'];?>" 
                name="form_email_<?php echo $arResult["QUESTIONS"]['MEDICINE_EMAIL']['STRUCTURE'][0]['ID'];?>" 
                value="<?php echo $arResult["QUESTIONS"]['MEDICINE_EMAIL']['VALUE'];?>"
                <?php echo $arResult["QUESTIONS"]['MEDICINE_EMAIL']['REQUIRED'] === 'Y' ? ' required' : '';?>>
                <div class="input__notification">Неверный формат почты</div>
              </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" 
                for="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_PHONE']['STRUCTURE'][0]['ID'];?>">
                <div class="input__label-text"><?=$arResult["QUESTIONS"]['MEDICINE_PHONE']['CAPTION']?>
                <?php echo $arResult["QUESTIONS"]['MEDICINE_PHONE']['REQUIRED'] === 'Y' ? '*' : '';?>
                </div>
                <input class="input__input" type="tel" 
                  id="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_PHONE']['STRUCTURE'][0]['ID'];?>" 
                  name="form_text_<?php echo $arResult["QUESTIONS"]['MEDICINE_PHONE']['STRUCTURE'][0]['ID'];?>" 
                  data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12"
                  x-autocompletetype="phone-full" 
                  value="<?php echo $arResult["QUESTIONS"]['MEDICINE_PHONE']['VALUE'];?>"
                  <?php echo $arResult["QUESTIONS"]['MEDICINE_PHONE']['REQUIRED'] === 'Y' ? ' required' : '';?>>
                  </label>
            </div>
        </div>
        <div class="contact-form__form-message">
            <div class="input">
              <label class="input__label" 
                for="form_textarea_<?php echo $arResult["QUESTIONS"]['MEDICINE_MESSAGE']['STRUCTURE'][0]['ID'];?>">
                <div class="input__label-text"><?=$arResult["QUESTIONS"]['MEDICINE_MESSAGE']['CAPTION']?>
                <?php echo $arResult["QUESTIONS"]['MEDICINE_MESSAGE']['REQUIRED'] === 'Y' ? '*' : '';?></div>
                <textarea class="input__input" 
                id="form_textarea_<?php echo $arResult["QUESTIONS"]['MEDICINE_MESSAGE']['STRUCTURE'][0]['ID'];?>" 
                name="form_textarea_<?php echo $arResult["QUESTIONS"]['MEDICINE_MESSAGE']['STRUCTURE'][0]['ID'];?>" 
                <?php echo $arResult["QUESTIONS"]['MEDICINE_MESSAGE']['REQUIRED'] === 'Y' ? ' required' : '';?>><?php echo $arResult["QUESTIONS"]['MEDICINE_MESSAGE']['VALUE'];?></textarea>
                <div class="input__notification"></div>
            </label>
            </div>
        </div>
        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
            <button class="form-button contact-form__bottom-button" data-success="Отправлено"
                    data-error="Ошибка отправки">
                <div class="form-button__title">Оставить заявку</div>
            </button>
        </div>
    </form>
    <?=$arResult["FORM_FOOTER"]?>
</div>
