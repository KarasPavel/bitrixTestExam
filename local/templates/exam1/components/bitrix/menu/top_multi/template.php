<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="menu-block popup-wrap">
    <a href="" class="btn-menu btn-toggle"></a>
    <div class="menu popup-block">
    <ul class="">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a class="<?=$arItem['PARAMS']['COLOR']?>" href="<?=$arItem["LINK"]?>"><?if($arItem["TEXT"]): echo $arItem["TEXT"]; endif;?></a>
				<ul>
                    <?if($arItem['PARAMS']['MENU_TEXT']):?>
                        <div class="menu-text"><?=$arItem['PARAMS']['MENU_TEXT']?></div>
                    <?endif;?>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><?if($arItem["TEXT"]): echo $arItem["TEXT"]; endif;?></a>
				<ul>
                    <?if($arItem['PARAMS']['MENU_TEXT']):?>
                        <div class="menu-text"><?=$arItem['PARAMS']['MENU_TEXT']?></div>
                    <?endif;?>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if($arItem["LINK"] === '/'):?> class="main-page" <?endif;?>><a class="<?=$arItem['PARAMS']['COLOR']?>" href="<?=$arItem["LINK"]?>"><?if($arItem["TEXT"]): echo $arItem["TEXT"]; endif;?></a></li>
			<?else:?>
				<li<?if($arItem["LINK"] === '/'):?> class="main-page" <?endif;?>><a href="<?=$arItem["LINK"]?>"><?if($arItem["TEXT"]): echo $arItem["TEXT"]; endif;?></a></li>
			<?endif?>
		<?endif?>
	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<a href="" class="btn-close"></a>
<div class="menu-overlay"></div>
    </div>
</div>
<?endif?>