<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?if(\Bitrix\Main\Loader::includeModule('aspro.max'))
{
	$arResult['TOKEN'] = CMax::GetFrontParametrValue('API_TOKEN_INSTAGRAMM');
	$arResult['TITLE'] = CMax::GetFrontParametrValue('INSTAGRAMM_TITLE_BLOCK');
	$arResult['ALL_TITLE'] = CMax::GetFrontParametrValue('INSTAGRAMM_TITLE_ALL_BLOCK');
	$arResult['TEXT_LENGTH'] = CMax::GetFrontParametrValue('INSTAGRAMM_TEXT_LENGTH');

	if($arParams['INCLUDE_FILE'])
		$arResult['DOP_TEXT'] = SITE_DIR.'include/mainpage/inc_files/'.$arParams['INCLUDE_FILE'];

	$nItemsCount = ($arParams['PAGE_ELEMENT_COUNT'] ? $arParams['PAGE_ELEMENT_COUNT'] : 4);

	$obInstagram = new CInstargramMax($arResult['TOKEN'], $nItemsCount);

	$arData = $obInstagram->getInstagramPosts();
	//$arUser = $obInstagram->getInstagramUser();

	if($arData)
	{
		if($arData['error']['message'])
		{
			$arResult['ERROR'] = $arData['error']['message'];
		}
		elseif($arData['data'])
		{
			$arResult['ITEMS'] = array_slice($arData['data'], 0, $nItemsCount);
			$arResult['USER']['username'] = $arData['data'][0]['username'];
		}
	}
	if($arResult['ERROR']):?>
		<?global $USER;
		if(!is_object($USER))
			$USER = new CUser();

		if($USER->IsAdmin()):?>
			<div class="content_wrapper_block">
				<div class="maxwidth-theme" style="padding-top: 20px;">
					<div class="alert alert-danger">
						<strong>Error: </strong><?=$arResult['ERROR']?>
					</div>
				</div>
			</div>
		<?endif;?>
	<?endif;?>
	<?$this->IncludeComponentTemplate();
}
else
{
	return;
}
?>