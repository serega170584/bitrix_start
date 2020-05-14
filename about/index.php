<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
    <p>Команда, организованная в 2020 году. Предоставляем web-решения различного характера: от сайта-визитки до
        e-commerce решения.</p>
    <p>На каждом из этапов жизненного цикла создания проекта: дизайн, верстка, разработка, можем использовать как
        решения с нуля, так и готовые решения. Разработка может вестись как в контексте этапа жизненного цикла, так и
        созданием сайта под ключ.</p>
    <p>В соответствии с вышесказанным подитожим списком услуг:
    <ul>
        <li>Создание сайта "под ключ".</li>
        <li>Верстка с нуля или на <a href="https://bootstrap-4.ru/" target="_blank">bootstrap</a>.</li>
        <li>Разработка программного кода. Cms: <a href="https://www.1c-bitrix.ru/" target="_blank">bitrix</a>, <a
                    href="https://www.joomla.org/" target="_blank">joomla</a>, <a href="https://ru.wordpress.org/"
                                                                                  target="_blank">wordpress</a>.
            Frameworks: <a href="https://www.yiiframework.com/" target="_blank">yii</a>.
        </li>
    </ul>
    </p>
    <h2>Примеры работ</h2>
<?php $APPLICATION->IncludeComponent("ambersite:gallery", "", array(
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "360000",
        "IBLOCK_CODE" => "as_gallery_s1",
        "PROP" => "AS_GAL_PICT"
    )
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>