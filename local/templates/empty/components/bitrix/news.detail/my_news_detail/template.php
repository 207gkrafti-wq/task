<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<div class="news-detail-wrapper">
    <h1 class="news-detail-title"><?=$arResult["NAME"]?></h1>

    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
        <div class="news-detail-img">
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>" />
        </div>
    <?endif;?>

    <div class="news-detail-text">
        <?=$arResult["DETAIL_TEXT"] ?: $arResult["PREVIEW_TEXT"];?>
    </div>

    <div class="news-detail-back">
        <a href="<?= $arParams["IBLOCK_URL"] . $arParams["SECTION_CODE"]?>/" class="back-link">&larr; Назад</a>
    </div>
</div>