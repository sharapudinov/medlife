<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?use \Bitrix\Main\Localization\Loc;?>
<?$frame = $this->createFrame()->begin('');?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section",
		'catalog_favorit',
		Array(
			"USE_REGION" => ($GLOBALS['arRegion'] ? "Y" : "N"),
			"STORES" => $arParams['STORES'],
			"SHOW_UNABLE_SKU_PROPS"=>$arParams["SHOW_UNABLE_SKU_PROPS"],
			"ALT_TITLE_GET" => $arParams["ALT_TITLE_GET"],
			"SEF_URL_TEMPLATES" => $arParams["SEF_URL_TEMPLATES"],
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"SHOW_COUNTER_LIST" => $arParams["SHOW_COUNTER_LIST"],
			"SECTION_ID" => '',
			"SHOW_POPUP_PRICE" => (CMax::GetFrontParametrValue('SHOW_POPUP_PRICE') == 'Y'),
			"SECTION_CODE" => '',
			"AJAX_REQUEST" => $arParams['IS_AJAX'],
			"ELEMENT_SORT_FIELD" => $arParams['ELEMENT_SORT_FIELD'],
			"ELEMENT_SORT_ORDER" => $arParams['ELEMENT_SORT_ORDER'],
			"SHOW_DISCOUNT_TIME_EACH_SKU" => "N",
			"ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
			"ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
			"FILTER_NAME" => $arParams["FILTER_NAME"],
			"INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
			"SHOW_ALL_WO_SECTION" => $arParams["SHOW_ALL_WO_SECTION"],
			"PAGE_ELEMENT_COUNT" => $arParams['ELEMENT_COUNT'],
			"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
			"TITLE_BLOCK" => $arParams["TITLE_BLOCK"],
			"TITLE_BLOCK_ALL" => $arParams["TITLE_BLOCK_ALL"],
			"ALL_URL" => $arParams["ALL_URL"],
			"DISPLAY_TYPE" => "block",
			"TYPE_SKU" => "TYPE_2",
			"SET_SKU_TITLE" => "N",
			"PROPERTY_CODE" => array_merge(array("HIT"), $arParams['PROPERTY_CODE']),
			"SHOW_ARTICLE_SKU" => $arParams["SHOW_ARTICLE_SKU"],
			"SHOW_MEASURE_WITH_RATIO" => $arParams["SHOW_MEASURE"],

			"OFFERS_FIELD_CODE" => $arParams["LIST_OFFERS_FIELD_CODE"],
			"OFFERS_PROPERTY_CODE" => $arParams["LIST_OFFERS_PROPERTY_CODE"],
			"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
			"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
			"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
			"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
			'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],

			"OFFERS_LIMIT" => $arParams["LIST_OFFERS_LIMIT"],

			"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
			"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
			"BASKET_URL" => CMax::GetFrontParametrValue("BASKET_PAGE_URL"),
			"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
			"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
			"PRODUCT_QUANTITY_VARIABLE" => "quantity",
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
			"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => $arParams["AJAX_OPTION_JUMP"],
			"AJAX_OPTION_STYLE" => $arParams["AJAX_OPTION_STYLE"],
			"AJAX_OPTION_HISTORY" => $arParams["AJAX_OPTION_HISTORY"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			"CACHE_FILTER" => "Y",
			"META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
			"META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
			"BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
			"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
			"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
			'HIDE_NOT_AVAILABLE_OFFERS' => $arParams["HIDE_NOT_AVAILABLE_OFFERS"],
			"DISPLAY_COMPARE" => $arParams["DISPLAY_COMPARE"],
			"SET_TITLE" => "N",
			"SET_STATUS_404" => "N",
			"SHOW_404" => "N",
			"MESSAGE_404" => "",
			"FILE_404" => "",
			"PRICE_CODE" => $arParams['PRICE_CODE'],
			"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
			"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
			"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
			"USE_PRODUCT_QUANTITY" => $arParams["USE_PRODUCT_QUANTITY"],
			"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
			"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
			"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],

			"PAGER_TITLE" => $arParams["PAGER_TITLE"],
			"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
			"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
			"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
			"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
			"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],

			"AJAX_OPTION_ADDITIONAL" => "",
			"ADD_CHAIN_ITEM" => "N",
			"SHOW_QUANTITY" => $arParams["SHOW_QUANTITY"],
			"SHOW_QUANTITY_COUNT" => $arParams["SHOW_QUANTITY_COUNT"],
			"SHOW_DISCOUNT_PERCENT_NUMBER" => $arParams["SHOW_DISCOUNT_PERCENT_NUMBER"],
			"SHOW_DISCOUNT_PERCENT" => $arParams["SHOW_DISCOUNT_PERCENT"],
			"SHOW_DISCOUNT_TIME" => $arParams["SHOW_DISCOUNT_TIME"],
			"SHOW_OLD_PRICE" => $arParams["SHOW_OLD_PRICE"],
			"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
			"SET_BROWSER_TITLE" => $arParams["SET_BROWSER_TITLE"],
			"SET_META_KEYWORDS" => $arParams["SET_META_KEYWORDS"],
			"SET_META_DESCRIPTION" => $arParams["SET_META_DESCRIPTION"],
			"CURRENCY_ID" => $arParams["CURRENCY_ID"],
			"USE_STORE" => $arParams["USE_STORE"],
			"MAX_AMOUNT" => $arParams["MAX_AMOUNT"],
			"MIN_AMOUNT" => $arParams["MIN_AMOUNT"],
			"USE_MIN_AMOUNT" => $arParams["USE_MIN_AMOUNT"],
			"USE_ONLY_MAX_AMOUNT" => $arParams["USE_ONLY_MAX_AMOUNT"],
			"DISPLAY_WISH_BUTTONS" => $arParams["DISPLAY_WISH_BUTTONS"],
			"LIST_DISPLAY_POPUP_IMAGE" => $arParams["LIST_DISPLAY_POPUP_IMAGE"],
			"DEFAULT_COUNT" => $arParams["DEFAULT_COUNT"],
			"SHOW_MEASURE" => $arParams["SHOW_MEASURE"],
			"SHOW_HINTS" => $arParams["SHOW_HINTS"],
			"OFFER_HIDE_NAME_PROPS" => $arParams["OFFER_HIDE_NAME_PROPS"],
			"SHOW_SECTIONS_LIST_PREVIEW" => $arParams["SHOW_SECTIONS_LIST_PREVIEW"],
			"SECTIONS_LIST_PREVIEW_PROPERTY" => $arParams["SECTIONS_LIST_PREVIEW_PROPERTY"],
			"SHOW_SECTION_LIST_PICTURES" => $arParams["SHOW_SECTION_LIST_PICTURES"],
			"USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
			"ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
			"PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
			"PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],
			"SALE_STIKER" => $arParams["SALE_STIKER"],
			"STIKERS_PROP" => $arParams["STIKERS_PROP"],
			"SHOW_RATING" => $arParams["SHOW_RATING"],
			"ADD_PICT_PROP" => $arParams["ADD_PICT_PROP"],
			"FIELDS" => $arParams['FIELDS'],
			"USER_FIELDS" => $arParams['USER_FIELDS'],
			"REVIEWS_VIEW" => (CMax::GetFrontParametrValue('REVIEWS_VIEW') ==  'EXTENDED'),
		), false, array("HIDE_ICONS" => "Y")
	);?>
<?$frame->end();?>