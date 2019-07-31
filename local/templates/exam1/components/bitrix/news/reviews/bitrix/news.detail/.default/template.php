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
?>
<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
        <?=$arResult['PREVIEW_TEXT']?>
        </div>
        <div class="review-autor">
            <?=$arResult['NAME']?>, <?=$arResult['DISPLAY_ACTIVE_FROM']?> г., <?=$arResult['PROPERTIES']['POSITION']['VALUE']?>, <?=$arResult['PROPERTIES']['COMPANY']['VALUE']?>
        </div>
    </div>
       <div style="clear: both;" class="review-img-wrap"><img src="<?if($arResult['DETAIL_PICTURE']['SRC']): echo ($arResult['DETAIL_PICTURE']['SRC']); else: echo '/local/templates/exam1/img/rew/no_photo.jpg'; endif;?>" alt="img"></div>
    </div>