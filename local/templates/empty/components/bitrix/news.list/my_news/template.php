<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>
<div class="news-list-custom">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="news-item" style="display: flex; gap: 15px; margin-bottom: 20px;">
            <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
                <div class="news-item-img" style="flex-shrink: 0; width: 200px;">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="width: 100%; height: auto;" alt="" />
                    </a>
                </div>
            <?endif;?>
            <div class="news-item-content">
                <h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
                <p><?=$arItem["PREVIEW_TEXT"];?></p>
            </div>
        </div>
    <?endforeach;?>
</div>