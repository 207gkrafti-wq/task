<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/**
 * @global CMain $APPLICATION
 */

$APPLICATION->SetTitle("Результат");
?>
<? $APPLICATION->IncludeComponent(
	"bitrix:form.result.list",
	"",
	array(
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "result_edit.php",
		"NAME_TEMPLATE" => "",
		"NEW_URL" => "result_new.php",
		"NOT_SHOW_FILTER" => "",
		"NOT_SHOW_TABLE" => "",
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_STATUS" => "Y",
		"VIEW_URL" => "result_view.php",
		"WEB_FORM_ID" => $_REQUEST['WEB_FORM_ID']
	)
); ?>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>