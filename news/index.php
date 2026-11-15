<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Разделы новостей");

/**
 * @global CMain $APPLICATION
 * 
 * Комплексный компонент bitrix:news с поддержкой разделов
 * 
 * Структура URL (SEF_MODE):
 * - Главная (список разделов): /news/
 * - Раздел: /news/[SECTION_CODE]/
 * - Детальная: /news/[SECTION_CODE]/[ELEMENT_CODE]/
 */

$APPLICATION->SetTitle("Разделы новостей");

?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"",
	Array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "news",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array("",""),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);?><?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>