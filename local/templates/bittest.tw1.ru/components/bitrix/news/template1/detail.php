<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
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

$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"",
	[
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"META_KEYWORDS" => $arParams["META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
		"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
		"ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
		"PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"USE_SHARE" => $arParams["USE_SHARE"],
		"SHARE_HIDE" => $arParams["SHARE_HIDE"],
		"SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
		"SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
		"SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
		"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
		"ADD_ELEMENT_CHAIN" => $arParams["ADD_ELEMENT_CHAIN"],
		'STRICT_SECTION_CHECK' => $arParams['STRICT_SECTION_CHECK'],
	],
	$component,
	['HIDE_ICONS' => 'Y']
);?>

<?$GLOBALS['arrFilter'] = array("!ID"=> $ElementID);?>

<?$APPLICATION->IncludeComponent("bitrix:iblock.element.add.form", "feedback", Array(
	"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
		"CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
		"CUSTOM_TITLE_NAME" => "",	// * наименование *
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",	// * текст анонса *
		"CUSTOM_TITLE_TAGS" => "",	// * теги *
		"DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования подробного текста
		"ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
		"GROUPS" => "",	// Группы пользователей, имеющие право на добавление/редактирование
		"IBLOCK_ID" => "6",	// Инфоблок
		"IBLOCK_TYPE" => "form",	// Тип инфоблока
		"LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
		"LIST_URL" => "",	// Страница со списком своих элементов
		"MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
		"MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
		"MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования текста анонса
		"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
			0 => "9",
			1 => "10",
			2 => "11",
			3 => "12",
			4 => "13",
		),
		"PROPERTY_CODES_REQUIRED" => array(	// Свойства, обязательные для заполнения
			0 => "9",
			1 => "10",
			2 => "13",
		),
		"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"STATUS" => "ANY",	// Редактирование возможно
		"STATUS_NEW" => "N",	// Деактивировать элемент
		"USER_MESSAGE_ADD" => "Спасибо, Ваша заявка оформлена!",	// Сообщение об успешном добавлении
		"USER_MESSAGE_EDIT" => "",	// Сообщение об успешном сохранении
		"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
	),
	false
);?>

<? $APPLICATION->IncludeComponent(
"bitrix:news.list",
"OutherNewsList",
[
"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
"IBLOCK_ID" => $arParams["IBLOCK_ID"],
"NEWS_COUNT" => $arParams["NEWS_COUNT"],
"SORT_BY1" => $arParams["SORT_BY1"],
"SORT_ORDER1" => $arParams["SORT_ORDER1"],
"SORT_BY2" => $arParams["SORT_BY2"],
"SORT_ORDER2" => $arParams["SORT_ORDER2"],
"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
"SET_TITLE" => $arParams["SET_TITLE"],
"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
"MESSAGE_404" => $arParams["MESSAGE_404"],
"SET_STATUS_404" => $arParams["SET_STATUS_404"],
"SHOW_404" => $arParams["SHOW_404"],
"FILE_404" => $arParams["FILE_404"],
"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
"CACHE_TYPE" => $arParams["CACHE_TYPE"],
"CACHE_TIME" => $arParams["CACHE_TIME"],
"CACHE_FILTER" => $arParams["CACHE_FILTER"],
"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
"PAGER_TITLE" => $arParams["PAGER_TITLE"],
"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
"DISPLAY_NAME" => "Y",
"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
"FILTER_NAME" => "arrFilter",
"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
"CHECK_DATES" => $arParams["CHECK_DATES"],
],
$component,
['HIDE_ICONS' => 'Y']
);?>