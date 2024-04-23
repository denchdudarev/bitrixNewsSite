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

/*echo '<pre>';

print_r($arResult);

echo '</pre>';*/


?>

<main>

    <section class="news container">
        <div class="news__title">
            <? if (!empty($arResult['NAME'])): ?>
            <h1 class="title-second">
                <? echo $arResult['NAME'] ?>
            </h1>
            <? endif;?>
        </div>

        <? if(count($arResult['ITEMS']) > 0):  ?>
        <div class="news-body">
            <? foreach ($arResult['ITEMS'] as $arItems): ?>
            <a href="<? echo $arItems['DETAIL_PAGE_URL']?>" class="news-block">
                <div class="news-block__img">
                    <img src="<? echo $arItems['PREVIEW_PICTURE']['SRC']?>" alt="<? echo $arItems['PREVIEW_PICTURE']['ALT']?>" class="news-block__pict">
                </div>
                <? if (!empty($arItems ['TIMESTAMP_X'])): ?>
                <div class="news-block__data">
                    <? echo $arItems['TIMESTAMP_X']?>
                </div>
                <?endif;?>
                <?if (!empty($arItems['NAME'])): ?>
                <div class="news-block__title">
                    <? echo $arItems ['NAME']?>
                </div>
                <?endif;?>
            </a>
            <? endforeach;?>
        </div>

        <? endif; ?>

        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>

    </section>

</main>


