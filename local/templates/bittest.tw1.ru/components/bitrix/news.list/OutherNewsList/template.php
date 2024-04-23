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

<? if (count($arResult["ITEMS"]) > 0): ?>
<section class="container home-news">
    <div class="title-block">
        <h3>Другие новости</h3>
        <a href="<? echo $arResult["LANG_DIR"] ?>" class="title-block__link-news">все новости</a>
    </div>
    <div class="home-news__wrapp">
        <button class="btn btn_news-prev">
            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/img/icons/arrow-left.svg") ?>
        </button>
        <div class="swiper home-news__slider">
            <div class="swiper-wrapper">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <a href="<? echo $arItem["DETAIL_PAGE_URL"]?>" class="swiper-slide home-news-item">
                    <? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                        <div class="home-news-item__pic">
                            <img src="<? echo $arItem["PREVIEW_PICTURE"]["SRC"]?>">
                        </div>
                    <? endif; ?>
                    <p class="home-news-item__date"><? echo $arItem["TIMESTAMP_X"]?></p>
                    <p class="home-news-item__title"><? echo $arItem["NAME"]?></p>
                </a>
                <? endforeach; ?>
            </div>
        </div>
        <button class="btn btn_news-next">
            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/img/icons/arrow-left.svg") ?>
        </button>
    </div>
</section>

<? endif; ?>
