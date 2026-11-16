<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<div class="news-list-custom">
    <div class="news-grid">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="news-item">
                <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
                    <div class="news-item-img">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" />
                        </a>
                    </div>
                <?endif;?>
                <div class="news-item-content">
                    <h3 class="news-item-title">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                    </h3>
                    <p class="news-item-text"><?=$arItem["PREVIEW_TEXT"];?></p>
                </div>
            </div>
        <?endforeach;?>
    </div>
    
    <div class="news-list-back">
        <a href="<?= $arParams["IBLOCK_URL"]?>" class="back-link">&larr; На главную</a>
    </div>
</div>