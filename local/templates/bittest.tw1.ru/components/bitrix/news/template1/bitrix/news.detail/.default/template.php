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

<main>

    <? if (count($arResult) > 0): ?>
    <section class="article container">
        <article class="article-body typo typo_article">
            <? if (!empty($arResult['PREVIEW_PICTURE'])):?>
            <img src="<? echo $arResult['PREVIEW_PICTURE']['SRC']?>" alt="<? echo $arResult['PREVIEW_PICTURE']['ALT']?>">
            <?endif;?>
            <h1><?echo $arResult['NAME']?></h1>
            <?if (!empty($arResult['DETAIL_TEXT'])):?>
            <? echo $arResult['DETAIL_TEXT']?>
            <?endif;?>
        </article>
    </section>
    <? endif;?>

    <section class="home-feedback" style="background-image: url('../src/img/feedback-bg.jpg')">
        <div class="container">
            <form action="" class="home-feedback__form">
                <h3>Записаться на прием</h3>
                <div class="home-feedback__inputs">
                    <input type="text" placeholder="Введите имя">
                    <input type="tel" placeholder="+7 (000) 000-00-00">
                    <select class="select_single">
                        <option value="Тип услуги">Тип услуги</option>
                        <option value="Услуга 1">Услуга 1</option>
                        <option value="Услуга 2">Услуга 2</option>
                    </select>
                    <select class="select_single">
                        <option value="Выберите врача">Выберите врача</option>
                        <option value="Врач 1">Врач 1</option>
                        <option value="Врач 2">Врач 2</option>
                    </select>
                    <input class="date" placeholder="Дата посещения">
                </div>
                <div class="home-feedback__btn">
                    <button class="btn btn_feedback-send">Отправить</button>
                    <div class="home-feedback__rights">
                        <label class="checkbox">
                            <input type="checkbox">
                            <span></span>
                        </label>
                        <p>Я даю свое согласие на обработку персональных данных и соглашаюсь с <a href="#">политикой
                                конфиденциальности</a></p>
                    </div>
                </div>
            </form>
        </div>
        <!--        <div class="home-feedback__pic">-->
        <!--            <img src="../src/img/feedback-bg.jpg">-->
        <!--        </div>-->
    </section>

</main>