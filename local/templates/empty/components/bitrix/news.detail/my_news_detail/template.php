<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>
<div class="news-detail-wrapper">
    <h1><?=$arResult["NAME"]?></h1>

    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
        <div class="news-detail-img" style="margin: 20px 0;">
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" style="max-width: 100%;" alt="" />
        </div>
    <?endif;?>

    <div class="news-detail-text">
        <?=$arResult["DETAIL_TEXT"] ?: $arResult["PREVIEW_TEXT"];?>
    </div>

    <p style="margin-top: 30px;"><a href="/">&larr; На главную</a></p>
</div>