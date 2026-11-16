<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));


?>

<div class="catalog-section-list">
    <?if ('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID']):?>
        <?
        $this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>
        <h1 class="catalog-section-title" id="<?=$this->GetEditAreaId($arResult['SECTION']['ID'])?>">
            <a href="<?=$arResult['SECTION']['SECTION_PAGE_URL']?>">
                <?=isset($arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]) && $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != "" 
                    ? $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]
                    : $arResult['SECTION']['NAME']?>
            </a>
        </h1>
    <?endif;?>

    <?if (0 < $arResult["SECTIONS_COUNT"]):?>
        <div class="catalog-sections-grid">
            <?foreach ($arResult['SECTIONS'] as $arSection):?>
                <?
                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                ?>
                <div class="catalog-section-item" id="<?=$this->GetEditAreaId($arSection['ID'])?>">
                    <a href="<?=$arSection['SECTION_PAGE_URL']?>" class="catalog-section-link">
                        <h3 class="catalog-section-name"><?=$arSection['NAME']?></h3>
                        <?if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null):?>
                            <span class="catalog-section-count">
                                <?=$arSection['ELEMENT_CNT']?> 
                            </span>
                        <?endif;?>
                    </a>
                </div>
            <?endforeach;?>
        </div>
    <?endif;?>
</div>